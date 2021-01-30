<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Model1;

class mainController extends Controller{
    function myFunction(){
        echo "I am rohinipriya";
    }
    function myForm(){

        return View::make('form');
        /* DB::table('users')->insert([
            'name' => 'rohini',
            'address' => 'chennai',
            'pincode' => '600013',
        ]); */
    }
    function myStore(request $req){
        //$Model = Model1:all();
         //$Model = Model1::orderBy("name",'desc')->take(10)->get(['name','address']);
        //dd($Model);
        //dd($req ->all());
        $data1 = new Model1;
        $data1->name = $req->name;
        $data1->address = $req->address;
        $data1->pincode = $req->number; 
        $data1->save();
        return redirect()->route("student_lists")->with("success",'file submitted'); 
        //return view('student.student_list', ['users' => $users]);
        //echo "inside a store function";
        /* print_r($_POST);
        if($_POST["number"] % 2 == 0)
            echo "even";
        else
        echo "odd";
        $number = $_POST["number"];
        $number1 = $_POST["number1"];
        for ($result = $number; $result <= $number1; $result++){
            echo $result. "<br>";
        }
        $id = DB::table('model1s')->insert([ */
            /* ['name' => $_POST['name'],
            'address' => $_POST['address'],
            'pincode' => $_POST['number']], */
            /* ['name' => 'rohini', 'address' => 'raja velu street', 'pincode'=>13],
            ['name' => 'ragavi', 'address' => 'egmore', 'pincode' => 12], */
            //return redirect()->route('users');
      //  ]);
        //echo id; 
        //return redirect()->route('student_lists');
    }
    function nestedView(){
        return View::make('nestedView.sample1');
        //echo "This is a nested view";
    }
    function nested(){
        return View::make('nestedView.foreach');
    }
    function nested1(){
        return view::make('nestedView.switch');
    }
    function nested2(){
        return view::make('nestedView.if');
    }
    function nested3(){
        return view::make('nestedView.while');
    }
    function nested4(){
        return view::make('nestedView.for');
    }
   /*  function data(Request $req){
       
    } */

 
    function student_lists(){
        $Model = Model1::orderBy("name",'desc')->paginate(10);
        //dd($Model);
        //dd($req ->all());
        /* $data1 = new Model1;
        $data1->name = $req->name;
        $data1->address = $req->address;
        $data1->pincode = $req->number; 
        $data1->save(); */
        //return redirect()->route("student_lists")->with("success",'file submitted');
       /*  $users = DB::table('model1s')->get();
        $users1 = DB::table('model1s')->count('id');
        $users2 = DB::table('model1s')->min('name');
        $users3 = DB::table('model1s')->max('address');
        $users4 = DB::table('model1s')->avg('id');
        $users5 = DB::table('model1s')->sum('id'); */
        //->where('address', 'like', 'e%')
        //->where('name', 'like', 'p%')
        //->orderBy('pincode','asc')
        //->get();
       /*  echo "count:-";
        echo ("$users1.<br>");
        echo "min-name:-";
        echo("$users2.<br>");
        echo "max-address:-";
        echo("$users3.<br>");
        echo "avg-id:-";
        echo("$users4.<br>");
        echo "sum-id:-";
        echo("$users5"); */
        return view('student.student_list', ['users' => $Model]);
    }
}



