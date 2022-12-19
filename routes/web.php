<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentCtrl;
use App\Http\Controllers\projectCtrl;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/addStudent', 'Student.addStudent');
Route::post('/addStud', [studentCtrl::class, 'AddStudent']);
Route::get('/studentList', [studentCtrl::class, 'ListAllStudent']);

Route::view('/addProject', 'Project.addProject');
Route::post('/addProj', [projectCtrl::class, 'AddProject']);
Route::get('/projectList', [projectCtrl::class, 'ListAllProject']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
