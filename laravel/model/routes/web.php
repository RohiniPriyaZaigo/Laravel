<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudInsertController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    echo "hello World";
});
Route::get('/user', [mainController::class, 'myFunction']);
Route::get('/rohini', function () {
    return 'welcome';
    //echo "hello World";
});
Route::get('/gree', function () {
    return view('greeting', ['name' => 'James']);
});
Route::get('users', [mainController::class, 'myForm']);
//Route::post('users', [mainController::class, 'data']);
Route::post('/Store', [mainController::class, 'student_lists'])-> name('student_details'); 
Route::get('/nestedView' , [mainController::class, 'nestedView']);
Route::get('/nestedView1', [mainController::class, 'nested']);
Route::get('/nestedView2', [mainController::class, 'nested1']);
Route::get('/nestedView3', [mainController::class, 'nested2']);
Route::get('/nestedView4', [mainController::class, 'nested3']);
Route::get('/nestedView5', [mainController::class, 'nested4']);
Route::get('/create', [mainController::class, 'student_lists']) -> name('student_lists');

Route::get('/create', [EmployeeController::class, 'create']);
Route::post('/store', [EmployeeController::class, 'store'])->name('detail');
Route::get('/lists',[EmployeeController::class, 'index'])->name('details');
Route::get('/edit/{id}',[EmployeeController::class, 'edit'])->name('edit');
Route::put('/update/{id}',[EmployeeController::class,'update'])->name('update');
Route::delete('/delete/{id}',[EmployeeController::class,'destroy'])->name('delete');

/* Route::group(['prefix' => 'officers','as' => 'officers', 'middleware' => 'auth'],
function (){ */
Route::get('/create',[EmpController::class, 'create'])->name('create');
Route::post('/store',[EmpController::class, 'store'])->name('store');
Route::get('/list',[EmpController::class, 'index'])->name('list');
Route::get('/edit/{id}',[EmpController::class,'edit'])->name('edit');
Route::put('/update/{id}',[EmpController::class,'update'])->name('update');
Route::delete('/delete/{id}',[EmpController::class,'destroy'])->name('delete');

Route::get('/dashboard',[EmpController::class, 'dashboard'])->name('dashboard');
Route::get('/admin',[EmpController::class, 'admin'])->name('admin');
Route::get('/employee',[EmpController::class, 'employee'])->name('employee');
Route::get('/user',[EmpController::class, 'user'])->name('user');
Route::get('/manager',[EmpController::class,'manager'])->name('manager');
Route::get('/role',[EmpController::class,'role']);

//});

/* Route::get('/file', [OfficerController::class, 'file'])->name('file');
Route::post('/image',[OfficerController::class, 'image'])->name('image');
Route::get('/upload', [OfficerController::class,'upload']); */

Route::resource('products',[ProductController::class,'product']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
