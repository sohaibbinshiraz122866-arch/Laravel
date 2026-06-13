<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index(){
       return view('frontpage');
    }

    function info(Request $request){
       dd($request->all());

       $request->validate([

         'full_name' => 'required|max:50|min:2',
         'email' => 'nullable|email'
       ],[
         'full_name.required' => 'Type your name' 
       ]);

      


    }

}
