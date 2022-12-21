<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentCtrl;
use App\Http\Controllers\projectCtrl;
use App\Http\Controllers\userCtrl;


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
    return view('index');
});

Route::get('/home', [projectCtrl::class, 'Homepage']);

Route::get('/studentList', [studentCtrl::class, 'ListAllStudent']);
Route::get('/projectList', [projectCtrl::class, 'ListAllProject']);
Route::get('/userList', [userCtrl::class, 'ListAllUser']);

Route::get('/addStud', [studentCtrl::class, 'AddStudent']);
Route::post('/addProj', [projectCtrl::class, 'AddProject']);

Route::get('/updateStud', [studentCtrl::class, 'UpdateStudent']);
Route::get('/updateProj', [projectCtrl::class, 'UpdateProject']);

Route::get('/deleteStud/{id}', [studentCtrl::class, 'DeleteStudent']);
Route::get('/deleteProj/{id}', [projectCtrl::class, 'DeleteProject']);
Route::get('/deleteUser/{id}', [userCtrl::class, 'DeleteUser']);


// Route::view('/addStudent', 'Student.addStudent');

// Route::get('/updateStudForm/{id}', [studentCtrl::class, 'UpdateStudentForm']);



// Route::get('/getProject/{id}', [studentCtrl::class, 'GetProject']);

// Route::get('/addProject', [projectCtrl::class, 'AddProjectPage']);

// Route::get('/updateProjForm/{id}', [projectCtrl::class, 'UpdateProjectForm']);

// Route::get('/getstudent/{id}', [projectCtrl::class, 'GetStudent']);
// Route::get('/getuser/{id}', [projectCtrl::class, 'GetExaminer1']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/logout', '\App\Http\Controllers\userCtrl@logout');
