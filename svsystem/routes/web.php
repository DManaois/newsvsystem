<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\guestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\IncidentReportController;


Route::get('/', function () {
    return view('login');
});




// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



//guest Routes
Route::get('/guestabout', [guestController::class, 'guest_about'])->name('guest_about');
Route::get('/guestviolations', [guestController::class, 'guest_violations'])->name('guest_violations');
Route::get('/guestpolicy', [guestController::class, 'guest_policy'])->name('guest_policy');
Route::get('/guestinterventions', [guestController::class, 'guest_interventions'])->name('guest_interventions');



// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//admin_dashboard Routes

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/admin/about', [AdminController::class, 'about'])->name('about');
    Route::get('/admin/violations', [AdminController::class, 'violations'])->name('violations');
    Route::get('/admin/students', [AdminController::class, 'students'])->name('students');
    Route::get('/admin/policy', [AdminController::class, 'policy'])->name('policy');
    Route::get('/admin/interventions', [AdminController::class, 'interventions'])->name('interventions');
    Route::get('/listofstudents', [AdminController::class, 'listStudents'])->name('admin.liststudents');
    Route::get('/student/{id}', [AdminController::class, 'viewStudent'])->name('admin.viewstudent');
    Route::get('/incident_report/{id}', [AdminController::class, 'add_incident_report'])->name('add_incident_report');
    Route::post('/incident_report', [AdminController::class, 'storeIncidentReport'])->name('store_incident_report');
    Route::get('/view_incident_report/{id}', [AdminController::class, 'viewIncidentReport'])->name('view_incident_report');
    Route::get('/update_incident_report/{id}', [AdminController::class, 'edit_incident_report'])->name('edit_incident_report');
    Route::post('/update_incident_report', [AdminController::class, 'update_incident_report'])->name('update_incident_report');
    Route::delete('/incident-report/{id}', [IncidentReportController::class, 'destroy'])->name('delete_incident_report');   
    Route::get('/admin/editstudent/{id}', [AdminController::class, 'editStudent'])->name('admin.editstudent');
    Route::put('/admin/updatestudent/{id}', [AdminController::class, 'updateStudent'])->name('admin.updatestudent');
    Route::delete('/admin/deletestudent/{id}', [AdminController::class, 'deleteStudent'])->name('admin.deletestudent');
});

//student_dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('student_dashboard');
    Route::get('/about', [StudentController::class, 'about'])->name('student_about');
    Route::get('/policy', [StudentController::class, 'policy'])->name('student_policy');
    Route::get('/violations', [StudentController::class, 'violations'])->name('student_violations');
    Route::get('/interventions', [StudentController::class, 'interventions'])->name('student_interventions');
    Route::get('/student/profile/{id}', [StudentController::class, 'profile'])->name('profile');
    Route::get('/student/view-incident-report/{id}', [StudentController::class, 'viewIncidentReport'])->name('student.viewIncidentReport');


});




