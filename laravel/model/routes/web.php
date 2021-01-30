<?php
use App\Http\Controllers\mainController;
use App\Http\Controllers\MyController;
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

Route::get('/list', [MyController::class, 'create']);
Route::post('/deploy', [MyController::class, 'store'])->name('detail');
Route::get('/store',[MyController::class, 'index'])->name('details');





