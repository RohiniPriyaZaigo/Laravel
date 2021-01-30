<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\MyModel;

class MyController extends Controller
{
    function create(){
        
        return view::make('newDetail.index');
    }
    function store(request $req){
        $myModel = new MyModel;
        $myModel->name = $req->name;
        $myModel->age = $req->age;
        $myModel->address = $req->address; 
        $myModel->phoneNumber = $req->phoneNumber;
        $myModel->pincode = $req->pincode; 
        $myModel->save();
        return redirect()->route("details")->with("success",'file submitted'); 
     }
     function index(){

        $users = MyModel::all();
        return view::make('newDetail.form1',['users'=>$users]);
     }
}
