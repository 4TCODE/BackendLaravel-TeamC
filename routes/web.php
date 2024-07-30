<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes();
// Route student
Route::middleware(['auth','user-role:student'])->group(function()
{
    Route::get("/home",[HomeController::class, 'studentHome'])->name("home");
});
// Route student
Route::middleware(['auth','user-role:instructor'])->group(function()
{
    Route::get("/instructor/home",[HomeController::class, 'instructorHome'])->name("instructor.home");
});
// Route instructor
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
});
