<?php

use App\Http\Controllers\CentralAdmissionController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\VerbalScheduleController;
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
/*
Route::get('/', [CentralAdmissionController::class, 'index'])->name('index');
Route::post('/ca_schedule', [CentralAdmissionController::class, 'login'])->name('student.login');
Route::get('/ca_schedule', [CentralAdmissionController::class, 'dashboard'])
    ->middleware('auth:student')
    ->name('student.dashboard');
*/


// Szóbeli felvételi beosztás
/*
Route::get('/', [VerbalScheduleController::class, 'index'])->name('index');
Route::post('/ca_schedule', [VerbalScheduleController::class, 'login'])->name('student.login');
Route::get('/ca_schedule', [VerbalScheduleController::class, 'dashboard'])
    ->middleware('auth:student')
    ->name('student.dashboard');
*/

// Előzetes felvételi rangsor
Route::get('/', [RankingController::class, 'index'])->name('index');
/*
Route::any('/ca_schedule', function () {
    return redirect()->route('index');
})->name('student.login');
*/
Route::post('/rank', [RankingController::class, 'login'])->name('student.login');
Route::get('/rank', [RankingController::class, 'dashboard'])
    ->middleware('auth:student')
    ->name('student.dashboard');


/*
Route::get('/', function (){
    return view('30_verbal_dist.index');
})->name('index');

Route::get('/verb_schedule', function () {
    return view('30_verbal_dist.index');
})->name('login');
*/

Route::any('/logout', function (){
    Session::flush();
    Auth::logout();
    return redirect('/');
})->name('logout');
