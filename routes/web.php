<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CensusRecordController;

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

Route::get('/landing', [ViewController::class, 'landing']);

Route::get('/admin', [ViewController::class, 'home']);

Route::post('census-delete', [CensusRecordController::class, 'destroy']);
Route::post('new-rec', [CensusRecordController::class, 'store']);

Route::resource('/censusRecord', CensusRecordController::class);

Route::get('/user', [ViewController::class, 'userLanding']);

// Route::get('/AddRecAdmin', function () {
//     return view('admin/AddRecAdmin');
// });

Route::get('/censusRec', function () {
    return view('admin/censusRec');
});

// Route::get('/users', function () {
//     return view('admin/users');
// });

// Route::get('/viewCensusAdmin', function () {
//     return view('admin/viewCensusAdmin');
// });

// Route::get('/unverifiedCensusAdmin', function () {
//     return view('admin/unverifiedCensusAdmin');
// });

Route::get('/addAccount', function () {
    return view('admin/addAccount');
});

Route::get('/addRecUser', function () {
    return view('user/addRecUser');
});

Route::get('/censusRecUser', function () {
    return view('user/censusRecUser');
});

Route::get('/unverifiedUser', function () {
    return view('user/unverifiedUser');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/AddRecAdmin', [App\Http\Controllers\HomeController::class, 'addRecAdmin'])->name('AddRecAdmin');
Route::get('/unverifiedCensusAdmin', [App\Http\Controllers\HomeController::class, 'unverifiedCensusAdmin'])->name('unverifiedCensusAdmin');
Route::get('/userAccounts', [App\Http\Controllers\HomeController::class, 'users'])->name('UserAccounts');
Route::get('/viewCensusAdmin', [App\Http\Controllers\HomeController::class, 'viewCensusAdmin'])->name('ViewCensusAdmin');