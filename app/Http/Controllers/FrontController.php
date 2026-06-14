<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

  function index()
  {
    return view('frontpage');
  }

  function info(Request $request)
  {
    //dd($request->all());

    $request->validate([

      'full_name' => 'required|max:50|min:2',
      'email' => 'nullable|email',
      'parent_name' => 'required|max:50|min:5',
      'phone' => 'required|digits_between:11,14',
      // 'payment_information' => 'required|max:100',
      'payment_method' => 'required',
      'transaction_id' => 'required|max:50|min:5',
      'amount' => 'required|numeric|min:1',

    ], [
      'full_name.required'           => 'Type your name',
      'full_name.min'                => 'Name must be at least 2 characters',
      'full_name.max'                => 'Name cannot exceed 50 characters',

      'email.email'                  => 'Please enter a valid email address',

      'parent_name.required'         => 'Type your parent name',
      'parent_name.min'              => 'Parent name must be at least 5 characters',
      'parent_name.max'              => 'Parent name cannot exceed 50 characters',

      'phone.required'               => 'Type your phone number',
      'phone.digits'                 => 'Phone number must be 11 digits',
      'phone.digits_between'         => 'Phone number is not valid',

      'payment_method.required'      => 'Select a payment method',

      'transaction_id.required'      => 'Type your transaction ID',
      'transaction_id.min'           => 'Transaction ID is too short',
      'transaction_id.max'           => 'Transaction ID is too long',

      'amount.required'              => 'Type the amount',
      'amount.numeric'               => 'Amount must be a number',
      'amount.min'                   => 'Amount must be greater than 0',
    ]);
  }
  
}
