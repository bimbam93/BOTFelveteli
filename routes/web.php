<?php

use App\Http\Controllers\CentralAdmissionController;
use App\Http\Controllers\FinalRankingController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\VerbalScheduleController;
use App\Models\StudentLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

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


Route::get('/', function () {
    // Központi felvételi jelentkezés
    return view('10_central_join.index');
});


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

/*
Route::get('/', function (){
    return view('30_verbal_dist.index');
})->name('index');

Route::get('/verb_schedule', function () {
    return view('30_verbal_dist.index');
})->name('login');
*/

// Előzetes felvételi rangsor - 40
/*
Route::get('/', [RankingController::class, 'index'])->name('index');
Route::post('/rank', [RankingController::class, 'login'])->name('student.login');
Route::get('/rank', [RankingController::class, 'dashboard'])
    ->middleware('auth:student')
    ->name('student.dashboard');
*/

// Egyeztetett felvételi rangsor - 50
//Route::get('/', [FinalRankingController::class, 'index'])->name('index');
//Route::post('/rank', [FinalRankingController::class, 'login'])->name('student.login');
/*Route::get('/rank', [FinalRankingController::class, 'dashboard'])
    ->middleware('auth:student')
    ->name('student.dashboard');
*/

Route::any('/logout', function (){
    Session::flush();
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/api/read/{edu_id}', function (Request $request, $edu_id){

    //72928695355

    if (mb_strlen($edu_id) != 11){
        return '<h1 style="color:darkred;">Hibás azonosító</h1>';
    }

    StudentLog::create([
        'edu_id' => $edu_id,
        'ip' => $request->ip(),
        'note' => $request->userAgent(),
    ]);

    return '<h1 style="color:darkgreen;">Köszönjük a visszajelzést! Várjuk a beiratkozáson</h1>';
});
