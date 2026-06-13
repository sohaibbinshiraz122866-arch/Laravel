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

      'full-name' => 'required|max:50|min:2',
      'email' => 'nullable|email',
      'parent-name' => 'required|max:50|min:5',
      'phone' => 'required|digits_between:11,14',
      'payment-information' => 'required|max:100',
      'payment-method' => 'required',
      'transaction-id' => 'required|max:50|min:5',
      'amount' => 'required|numeric|min:1',

    ], [
      'full-name.required'           => 'Type your name',
      'full-name.min'                => 'Name must be at least 2 characters',
      'full-name.max'                => 'Name cannot exceed 50 characters',

      'email.email'                  => 'Please enter a valid email address',

      'parent-name.required'         => 'Type your parent name',
      'parent-name.min'              => 'Parent name must be at least 5 characters',
      'parent-name.max'              => 'Parent name cannot exceed 50 characters',

      'phone.required'               => 'Type your phone number',
      'phone.digits'                 => 'Phone number must be 11 digits',
      'phone.digits_between'         => 'Phone number is not valid',

      'payment-method.required'      => 'Select a payment method',

      'transaction-id.required'      => 'Type your transaction ID',
      'transaction-id.min'           => 'Transaction ID is too short',
      'transaction-id.max'           => 'Transaction ID is too long',

      'amount.required'              => 'Type the amount',
      'amount.numeric'               => 'Amount must be a number',
      'amount.min'                   => 'Amount must be greater than 0',
    ]);
  }
}
