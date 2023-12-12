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

    public function create() : Response
    {
         return Inertia::render('Post/Create');
    }
    public function store(Request $request): RedirectResponse
    {
         $user = $request->user();
         $customer = $user->customer;


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
    }
}