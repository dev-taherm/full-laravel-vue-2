<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Customer;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    public function show($postId)
    {
        $post = Post::findOrFail($postId);
        $postable = $post->postable;

        return Inertia::render('Post/Show', [
            'post' => $post,
            'postable' => $postable,
        ]);
    }
    public function create(): Response
    {
        return Inertia::render('Post/Create');
    }
    public function store(Request $request): RedirectResponse
    {
        $user = $request->user();
        $customer = $user->customer;

        if ($customer !== null) {
            $post = new Post();
            $post->postable_type = 'customer';
            $post->postable_id = $customer->id;


            $attribute = $request->validate([
                'title' => 'required',
                'description' => 'required',

            ]);


            $post->fill($attribute);
            $post->save();

            return Redirect::route('profile.index');
        } else {
            return redirect()->route('customer.create');
        }
    }
    public function edit($postId)
    {


        $post = Post::findOrFail($postId);



        return Inertia::render('Post/Edit', [
            'post' => $post,
        ]);
    }
    public function update($postId, Request $request): RedirectResponse
    {

        $post = Post::findOrFail($postId);
        $attribute = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $post->update($attribute);



        return Redirect::route('post.show', ['postId' => $postId]);
    }
}
