<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function create(){
        return view::make('frontend.dashboard');
    }
    function store(Request $req){
        $req->validate([
            'name' => 'required|min:6|max:10',
             'email' => 'required',
            'password' => 'required|min:6|regex:/[@!$%]/',
        ],[
            'name.required' => 'Name is Required',
            'name.min' => 'Name should be atleast :min characters',
            'name.max' => 'Name should not be greater than :max characters',
            'email.required' => 'Email is Required',
            'password.required' => 'Password is Required',
            'password.min' => 'Password should be atleast :min characters',
            'password.regex' => 'Special character is Required',
        ]);
        $emp = new User;
        $emp->name = $req->name;
        $emp->email = $req->email;
        $emp->password = Hash::make($req->password);
        $emp->save();

    }
    function admin(){
        return view::make('frontend.administrator');
    }
    function manager(){
        return view::make('frontend.manager');
    }
    function customer(){
       
        return view::make('frontend.customer');
    }
    function product(){
        return view::make('frontend.product');
    }
}
