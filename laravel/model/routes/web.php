<?php
use App\Http\Controllers\mainController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\StudInsertController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
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

Route::get('/create',[OfficerController::class, 'create']);
Route::post('/store',[OfficerController::class, 'store'])->name('store');
Route::get('/show',[OfficerController::class, 'show'])->name('show');



