<?php

use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/biens',[\App\Http\Controllers\PropertyController::class, 'index'])->name('property.index');
Route::get('/biens/{slug}-{property}',[\App\Http\Controllers\PropertyController::class, 'show'])->name('property.show')->where([
    'property' => $idRegex,
    'slug' => $slugRegex
]);
Route::post('/biens/{property}/contact',[\App\Http\Controllers\PropertyController::class, 'contact'])->name('property.contact')->where([
    'property' => $idRegex
]);

Route::get('/listAgent', [\App\Http\Controllers\PropertyController::class, 'listAgent'])->name('listAgent'); 
Route::get('/singleAgent/{user_id}', [\App\Http\Controllers\PropertyController::class, 'singleAgent'])->name('singleAgent'); 
Route::get('/listAgency', [\App\Http\Controllers\PropertyController::class, 'listAgency'])->name('listAgency'); 
Route::get('/singleAgency', [\App\Http\Controllers\PropertyController::class, 'singleAgency'])->name('SingleAgency');

//Route::get('/createproperty', [\App\Http\Controllers\PropertyController::class, 'createproperty'])->name('createproperty'); 


Route::get('/register', [AuthController::class, 'register'])
    ->name('register');
Route::post('/register', [AuthController::class, 'doregister'])->name('doregister');
Route::get('/login', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [AuthController::class, 'dologin'])->name('dologin');
Route::get('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('/property', PropertyController::class)->except(['show']);
    Route::resource('/option', OptionController::class)->except(['show']);
    Route::get('/bien',[\App\Http\Controllers\PropertyController::class, 'search'])->name('property.search');
    Route::get('/myprofile', [PropertyController::class, 'profile'])->name('profile');
    Route::post('myprofile', [PropertyController::class, 'doprofile'])->name('doprofile');
    Route::post('updateProfile', [PropertyController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/changePassword', [PropertyController::class, 'changePassword'])->name('changePassword');
    Route::post('updatePassword', [PropertyController::class, 'updatePassword'])->name('updatePassword');
    Route::get('/bookmarked', [PropertyController::class, 'bookmarked'])->name('bookmarked');
    Route::post('/property/{property}/favori', [PropertyController::class, 'addToFavorites'])->name('property.favori');
    Route::delete('/favori/{favori}', [PropertyController::class, 'delete'])->name('delete.favori');
    
});

