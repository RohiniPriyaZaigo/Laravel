<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Officer;



class OfficerController extends Controller
{
    function create(){
        $country = ['India','USA','UK'];
        $age=[];
        for($value=18; $value<50; $value++){
            $age[] = $value;
        }
        $state = ['TamilNadu','AndhraPradesh','Kerala','Delhi','Punjab'];
        return view::make('officerDetail.index',['age' => $age,'state' => $state,'country'=> $country]);
        
    }
    function store(request $req){
        $officer = new Officer;
        $officer->FirstName = $req->fname;
        $officer->LastName = $req->lname;
        $officer->Gender = $req->gender;
        $officer->City = $req->city;
        $officer->Age = $req->age;
        $officer->Email = $req->email;
        $officer->Password = $req->password;
        $officer->State = $req->state;
        $officer->Country = $req->country;
        $officer->PhoneNumber = $req->phoneNumber;
        $officer->Pincode = $req->pincode; 
        $officer->DOB = $req->dob;
        $officer->save();
        return redirect()->route("show")->with("success",'file submitted');
        /* $req->validate([
            'FirstName' => 'required|min:6|max:7',
            'LastName' => 'required|min:1|max:5',
            'Gender' => 'required|min:1|max:100',
            'City' => 'required|min:1',
            'Age'=> 'required|min:1|max:3',
            'Email' => 'required|min:1|max:100',
            'Password' => 'required|min:1|max:10',
            'State'=> 'required|min:1',
            'Country' => 'required|min:1',
            'PhoneNumber' => 'required|digits:10',
            'Pincode'=> 'required|digits:6',
            'DOB'=> 'required|',



            ],[
            'FirstName.required' => 'FirstName is Required',
            'FirstName.min' => 'Name should be atleast :min characters',
            'FirstName.max' => 'Name should not be greater than :max characters',
            'LastName.required' => 'LastName is Required',
            'LastName.min' => 'Name should be atleast :min characters',
            'LastName.max' => 'Name should not be greater than :max characters',
            'City.required' => 'City name is Required',
            'City.min' => 'Name should be atleast :min characters',
            'City.max' => 'Name should not be greater than :max characters',
            ]);  */
        
    }
    function show(){

        $officer = Officer::all();
        return view::make('officerDetail.show',['users'=>$officer]);
    }
    function edit(){
        $officer = Officer::find($id);
         return view('officerDetail.edit',['data'=> $officer]);

    }
    function update(){

    }
    function destroy(){

    }
}
