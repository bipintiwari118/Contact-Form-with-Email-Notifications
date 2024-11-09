<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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




Route::get('/',[EmailController::class,'contact'])->name('contact');
Route::get('thanks',[EmailController::class,'thanks'])->name('thanks');
Route::post('send-email',[EmailController::class,'sendEmail'])->name('send.email');
