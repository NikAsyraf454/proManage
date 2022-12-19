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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/addStudent', 'Student.addStudent');
Route::post('/addStud', [studentCtrl::class, 'AddStudent']);
Route::get('/studentList', [studentCtrl::class, 'ListAllStudent']);
Route::get('/updateStud/{id}', [studentCtrl::class, 'UpdateStudent']);
Route::get('/deleteStud/{id}', [studentCtrl::class, 'DeleteStudent']);

Route::get('/getProject/{id}', [studentCtrl::class, 'GetProject']);

Route::get('/addProject', [projectCtrl::class, 'AddProjectPage']);
Route::post('/addProj', [projectCtrl::class, 'AddProject']);
Route::get('/projectList', [projectCtrl::class, 'ListAllProject']);
Route::get('/updateProjForm/{id}', [projectCtrl::class, 'UpdateProjectForm']);
Route::post('/updateProj/{id}', [projectCtrl::class, 'UpdateProject']);
Route::get('/deleteProj/{id}', [projectCtrl::class, 'DeleteProject']);

Route::get('/getstudent/{id}', [projectCtrl::class, 'GetStudent']);
Route::get('/getuser/{id}', [projectCtrl::class, 'GetExaminer1']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
