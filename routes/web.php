<?php

use App\Http\Controllers\CentralAdmissionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    // Központi felvételi jelentkezés
    // return view('10_central_join.index');
});
*/

// Központi felvételi beosztás
Route::get('/', [CentralAdmissionController::class, 'index'])->name('index');
Route::post('/ca_schedule', [CentralAdmissionController::class, 'login'])->name('student.login');
Route::get('/ca_schedule', [CentralAdmissionController::class, 'dashboard'])
    ->middleware('auth:student')
    ->name('student.dashboard');

Route::any('/logout', function (){
    Session::flush();
    Auth::logout();
    return redirect('/');
})->name('logout');
