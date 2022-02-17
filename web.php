<?php

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
});

/*Auth Routes*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function(){
$patients = 
array(
   array ('name' => 'Jared Jewett' ,'mrn' => 12345 , 'dob' => '02/20/1980'),
   array ('name' => 'Jimmy James' ,'mrn' => 24684 , 'dob' => '05/26/1977'),
   array ('name' => 'Maggie Mae' ,'mrn' => 3579 , 'dob' => '05/22/1989'),
   array ('name' => 'Rick James' ,'mrn' => 14696 , 'dob' => '06/14/1997'),
);
    
    return view('home', compact('patients'));

});

Route::get('/contrastform', [App\Http\Controllers\ContrastformController::class, 'index'])->name('/contrastform');
/*Application*/
