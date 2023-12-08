<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Customer;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class CustomerController extends Controller
{
 public function create(): Response
    {
        

        return Inertia::render('Customer/create');
    }
     public function store(Request $request): RedirectResponse
    {
         $user = $request->user();
         $customer = $user->customer;
         
    if (!$customer) {
        $customer = new Customer();
        $customer->user_id = $user->id;
    }

    $attribute = $request->validate([
        'name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'phone' => 'required',
        'bio' => 'max:500'
    ]);

    $customer->fill($attribute);
    $customer->save();

    return Redirect::route('profile.edit');
    }
public function edit(Request $request): Response
    {
       $user = $request->user();
       $customer = $user->customer;

        return Inertia::render('Profile/Edit', [
           
            'customer' => $customer,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
         $user = $request->user();
         $customer = $user->customer;
        $attribute= $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'bio' => 'max:500'

        ]);

        $customer->update($attribute);

        

        return Redirect::route('profile.edit');
    }


}