<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Customer;
use App\Models\Seller;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class SellerController extends Controller
{
   public function index(Request $request): Response
    {
        $user = $request->user();
        $sellers = $user ? $user->sellers : null;

        return Inertia::render('Seller/Index', [
            'sellers' => $sellers,
        ]);
    }

    public function show($sellerId)
    {
        $seller = Seller::findOrFail($sellerId);

        return Inertia::render('Seller/Show', [
            'seller' => $seller,
        ]);
    }
//  public function create(): Response
//     {
        

//         return Inertia::render('Seller/create');
//     }
//      public function store(Request $request): RedirectResponse
//     {
//          $user = $request->user();
//          $sellers = $user->sellers;
         
    
//         $sellers = new Seller();
//         $sellers->user_id = $user->id;


//     $attribute = $request->validate([
//         'o_username' => 'required',
//         'o_name' => 'required',
//         'o_address' => 'required',
//         'o_city' => 'required',
//         'o_phone' => 'required',
//         'bio' => 'max:500',
//     ]);

//     $sellers->fill($attribute);
//     $sellers->save();

//     return Redirect::route('seller.edit');
//     }
// public function edit(Request $request): Response
//     {
//        $user = $request->user();
//        $seller = $user->seller;

//         return Inertia::render('seller/Edit', [
           
//             'seller' => $seller,
//         ]);
//     }

//     /**
//      * Update the user's profile information.
//      */
//     public function update(Request $request): RedirectResponse
//     {
//          $user = $request->user();
//          $customer = $user->customer;
//         $attribute= $request->validate([
//             'name' => 'required',
//             'address' => 'required',
//             'city' => 'required',
//             'phone' => 'required',
//             'bio' => 'max:500'

//         ]);

//         $customer->update($attribute);

        

//         return Redirect::route('profile.edit');
//     }


}