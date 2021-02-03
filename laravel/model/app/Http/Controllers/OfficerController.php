<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Officer;
use Illuminate\Support\Facades\Hash;

class OfficerController extends Controller
{
    function create(){
        $country = ['India','USA','UK'];
        $age=[];
        for($value=18; $value<50; $value++){
            $age[] = $value;
        }
        $state = ['TamilNadu','AndhraPradesh','Kerala','Delhi','Punjab'];
        return view::make('officerDetail.form',['age' => $age,'state' => $state,'country'=> $country]);
    }
    function store(request $req){
        $officer = new Officer;
        $officer->FirstName = $req->fname;
        $officer->LastName = $req->lname;
        $officer->Gender = $req->gender;
        $officer->City = $req->city;
        $officer->Age = $req->age;
        $officer->Email = $req->email;
        $officer->Password = Hash::make($req->password);
        $officer->State = $req->state;
        $officer->Country = $req->country;
        $officer->PhoneNumber = $req->phoneNumber;
        $officer->Pincode = $req->pincode; 
        $officer->DOB = $req->dob;
        $req->validate([
            'fname' => 'required|min:6|max:10',
            'lname' => 'required|min:3|max:10',
            'gender' => 'required|in:male,female',
            'city' => 'required',
            'age'=> 'required|min:1',
            'email' => 'required',
            'password' => 'required|min:6|regex:/[@!$%]/',
            'state'=> 'required|min:1',
            'country' => 'required|min:1',
            'phoneNumber' => 'required|digits-between:9,11',
            'pincode'=> 'required|digits:6',
            'dob'=> 'required',
        ],[
            'fname.required' => 'FirstName is Required',
            'fname.min' => 'Name should be atleast :min characters',
            'fname.max' => 'Name should not be greater than :max characters',
            'lname.required' => 'LastName is Required',
            'lname.min' => 'Name should be atleast :min characters',
            'lname.max' => 'Name should not be greater than :max characters',
            'gender.required' => 'Gender is Required',
            'gender.in' => 'select atleast one gender',
            'city.required' => 'City name is Required',
            'age.required' => 'Age is Required',
            'age.min' => 'Age should be atleast :min characters',
            'email.required' => 'Email is Required',
            'password.required' => 'Password is Required',
            'password.min' => 'Password should be atleast :min characters',
            'password.regex' => 'Special character is Required',
            'state.required' => 'State is Required',
            'state.min' => 'State should be atleast :min characters',
            'country.required' => 'Country is Required',
            'country.min' => 'Select the state: min characters',
            'phoneNumber' => 'PhoneNumber is Required',
            'phoneNumber.digits' => 'Not a valid PhoneNumber',
            'pincode.required' => 'Pincode is Required',
            'pincode.digits' => 'Enter a valid pincode',
            'dob.required' => 'Enter a valid DateOfBirth',
        ]);
        $officer->save();
        return redirect()->route("list")->with("success",'file submitted');  
    }
    function index(){
        $officer = Officer::all();
        $officer = Officer:: orderby("FirstName","desc")->paginate(5);
        return view::make('officerDetail.list',['users'=>$officer]);
    }
    function edit($id){
        $country = ['India','USA','UK'];
        $age=[];
        for($value=18; $value<50; $value++){
            $age[] = $value;
        }
        $state = ['TamilNadu','AndhraPradesh','Kerala','Delhi','Punjab'];
        $officer = Officer::find($id);
        return view('officerDetail.edit',['age' => $age,'state' => $state,'country'=> $country,'data'=> $officer]);
    }
    function update(Request $req, $id){
        $officer = Officer::find($id);
        $officer->FirstName = $req->fname;
        $officer->LastName = $req->lname;
        $officer->Gender = $req->gender;
        $officer->City = $req->city;
        $officer->Age = $req->age;
        $officer->Email = $req->email;
        $officer->Password = Hash::make($req->newPassword);
        $officer->State = $req->state;
        $officer->Country = $req->country;
        $officer->PhoneNumber = $req->phoneNumber;
        $officer->Pincode = $req->pincode; 
        $officer->DOB = $req->dob;
        $officer->update();
        return redirect()->route('list')->with("success",'Updated Successfully');
    }
    function destroy($id){
        $officer = Officer::find($id);
        $officer->delete();
        return redirect()->route('list')->with("success",'file is deleted');
    }
}
