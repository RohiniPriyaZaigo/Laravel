<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Emp;
use App\Models\file;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class EmpController extends Controller
{
    function create(){
        $country = ['India','USA','UK'];
        $age=[];
        for($value=18; $value<50; $value++){
            $age[] = $value;
        }
        $state = ['TamilNadu','AndhraPradesh','Kerala','Delhi','Punjab'];
        
        return view::make('employeeDetail.form',['age' => $age,'state' => $state,'country'=> $country]);
    }
    function store(request $req){
        $req->validate([
            'fname' => 'required|min:6|max:10',
            'lname' => 'required|min:3|max:10',
            'gender' => 'required|in:male,female',
            'city' => 'required',
            'age'=> 'required|min:1',
            'idProof' => 'required',
            'file' => 'required|mimes:jpg,png,gif,svg,jpeg,csv,txt,xlx,xls,pdf,docx|max:2048',
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
            'idProof.required' => 'IdProof is required',
            'file.required' => 'File is required',
            'file.image' => "Plz upload the image",
            'file.mimes'=> "File supported image",
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
        $fileExtension =  $req->file->extension();
        $timeStamp = Carbon::now()->format('Y_m_d_H_i_s_u');
        $fileName = $timeStamp.'.'.$fileExtension;
        //dd($fileName);

        /* if ( file_exists( $file_path ) ) {
            // Send Download
            return \Response::download( $file_path, $filename, $headers );
        } else {
            // Error
            exit( 'Requested file does not exist on our server!' );
        } */
        
        $req->file->storeAs('public/images', $fileName);
        
        $emp = new Emp;
        $emp->firstName = $req->fname;
        $emp->lastName = $req->lname;
        $emp->gender = $req->gender;
        $emp->city = $req->city;
        $emp->age = $req->age;
        $emp->idProof = implode(',' ,$req->idProof);
        $emp->image = $fileName;
        $emp->email = $req->email;
        $emp->password = Hash::make($req->password);
        $emp->state = $req->state;
        $emp->country = $req->country;
        $emp->phoneNumber = $req->phoneNumber;
        $emp->pincode = $req->pincode; 
        $emp->dob = $req->dob;
        $emp->save();
        return redirect()->route("list")->with("success",'file submitted');  
    }
    function index(){
        $emp = Emp::all();
        $emp = Emp:: orderby("firstName","desc")->paginate(5);
        return view::make('employeeDetail.list',['users'=>$emp]);
    }
    function edit($id){
        $country = ['India','USA','UK'];
        $age=[];
        for($value=18; $value<50; $value++){
            $age[] = $value;
        }
        $state = ['TamilNadu','AndhraPradesh','Kerala','Delhi','Punjab'];
        
        $emp = Emp::find($id);
        return view('employeeDetail.edit',['age' => $age,'state' => $state,'country'=> $country,'data'=> $emp]);
    }
    function update(Request $req, $id){
        $req->validate([
            'fname' => 'required|min:6|max:10',
            'lname' => 'required|min:3|max:10',
            'gender' => 'required|in:male,female',
            'city' => 'required',
            'age'=> 'required|min:1',
            'idProof' => 'required',
            'file' => 'required|mimes:jpg,png,gif,svg,jpeg,csv,txt,xlx,xls,pdf,docx|max:2048',
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
            'idProof.required' => 'IdProof is required',
            'file.required' => 'File is required',
            'file.image' => "Plz upload the image",
            'file.mimes'=> "File supported image",
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
        $emp = Emp::find($id);
        $emp->firstName = $req->fname;
        $emp->lastName = $req->lname;
        $emp->gender = $req->gender;
        $emp->city = $req->city;
        $emp->age = $req->age;
        $emp->idProof = $req->idProof;
        $emp->image = $req->file;
        $emp->email = $req->email;
        $emp->password = Hash::make($req->newPassword);
        $emp->state = $req->state;
        $emp->country = $req->country;
        $emp->phoneNumber = $req->phoneNumber;
        $emp->pincode = $req->pincode; 
        $emp->dob = $req->dob;
        $emp->update();
        return redirect()->route('list')->with("success",'Updated Successfully');
    }
    function destroy($id){
        $emp = Emp::find($id);
        $emp->delete();
        return redirect()->route('list')->with("success",'file is deleted');
    }
    function dashboard(){
        return view::make('employeeDetail.dashboard');
    }
    function admin(){
        return view('employeeDetail.adminDashboard');

    }
    function employee(){
        return view('employeeDetail.employeeDashboard');
    }
    function user(){
        $country = ['India','USA','UK'];
        $age=[];
        for($value=18; $value<50; $value++){
            $age[] = $value;
        }
        $state = ['TamilNadu','AndhraPradesh','Kerala','Delhi','Punjab'];
        
        
        return view('employeeDetail.userDashboard',['age' => $age,'state' => $state,'country'=> $country]);
    }
    function manager(){
        return view('employeeDetail.managerDashboard');
    }
    /* function file(){
        return view::make('officerDetail.file');
        //return redirect()->route("list")->with("success",'file submitted');  
    }
    function image(Request $req){
        //dd($req->all());
        $req->validate([
            'file'=> 'required|image|mimes:jpg,png,gif,svg,jpeg',
        ],[
            'file.required' => 'file Upload',
            'file.image' => "Plz upload the image",
            'file.mimes'=> "File supported image",
            ]);
            
           $timeStamp = Carbon::now()->format('Y_m_d_H_i_s_u');
            //dd($file);
            
            
           $file1 =  $req->file->extension();
           $file = ($fileName = $timeStamp.'.'.$file1);
           //dd($file);
           $req->file->storeAs('public/images', $fileName);
           //dd($file1);
            $officer = new file;
            $officer->image = $file;
            $officer->save();
        }
        function upload(){
            dd(asset('public/images'));
            dd(asset('storage/images'));
        } */
        function role(){
            //dd(config('rohini.name'),'hello');
            //dd('hi');
            dd(config('rohini.role.Admin'));
           // dd(config('rohini.role.2'));
            return view::make("employeeDetail.role");
        }
}

