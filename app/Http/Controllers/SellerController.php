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
       
        return Inertia::render('Seller/Index');
    }

    public function show($sellerId)
    {
        $seller = Seller::findOrFail($sellerId);

        return Inertia::render('Seller/Show', [
            'seller' => $seller,
        ]);
    }
 public function create(): Response
    {
        

        return Inertia::render('Seller/Create');
    }
     public function store(Request $request): RedirectResponse
    {
         $user = $request->user();
         $sellers = $user->sellers;
         
    
        $sellers = new Seller();
        $sellers->user_id = $user->id;


    $attribute = $request->validate([
        'o_username' => 'required',
        'o_name' => 'required',
        'o_address' => 'required',
        'o_city' => 'required',
        'o_phone' => 'required',
        'o_bio' => 'max:500',
    ]);

    $sellers->fill($attribute);
    $sellers->save();

    return Redirect::route('seller.index');
    }
 public function edit($sellerId)
    {
        $seller = Seller::findOrFail($sellerId);

        return Inertia::render('Seller/Edit', [
            'seller' => $seller,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update($sellerId, Request $request): RedirectResponse
    {
         
        $seller = Seller::findOrFail($sellerId);
        $attribute= $request->validate([
            'o_username' => 'required',
            'o_name' => 'required',
            'o_address' => 'required',
            'o_city' => 'required',
            'o_phone' => 'required',
            'O_bio' => 'max:500'

        ]);

        $seller->update($attribute);

        

        return Redirect::route('seller.index');
    }


}