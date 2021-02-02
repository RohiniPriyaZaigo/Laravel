<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Employee;

class EmployeeController extends Controller
{
    function create(){
        
        return view::make('newDetail.form');
    }
    function store(request $req){
        $employee = new Employee;
        $employee->name = $req->name;
        $employee->age = $req->age;
        $employee->address = $req->address; 
        $employee->phoneNumber = $req->phoneNumber;
        $employee->pincode = $req->pincode; 
        
        $req->validate([
            'name' => 'required|min:6|max:10',
            'age' => 'required|min:1|max:3',
            'address' => 'required|min:1|max:100',
            'phoneNumber' => 'required|digits:10',
            'pincode'=> 'required|digits:6'

            ],[
            'name.required' => 'Name is Required',
            'name.min' => 'Name should be atleast :min characters',
            'name.max' => 'Name should not be greater than :max characters'
            ]);
        
            $employee->save();
        return redirect()->route("details")->with("success",'file submitted'); 
     }
     function index(){

        $employee = Employee::all();
        return view::make('newDetail.list',['users'=>$employee]);
     }
     function edit($id){
         $employee = Employee::find($id);
         return view('newDetail.edit',['data'=> $employee]);
    }
    function update($id, Request $req){
        $employee = Employee::find($req->id);
        $employee->name = $req->name;
        $employee->age = $req->age;
        $employee->address = $req->address; 
        $employee->phoneNumber = $req->phoneNumber;
        $employee->pincode = $req->pincode; 
        $employee->update();
        return redirect()->route("details")->with("success",'file updated'); 
    }
    function destroy($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('details')->with("success",'file is deleted');
    }

}
