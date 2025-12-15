<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
    return view('welcome'); // page client
});

// Route::get('/dashAdmin', function () {
//     return view('dashboard.dashboardAdmin'); // dashboard admin
// })->name('admin.dashboard');



// Route::get('/dashMedcin', function () {
//     return view('dashboard.dashboardMedcin'); // dashboard medcin
// }) ->name('dashboard.dashboardMedcin');



// Route::get('/dashPatient', function () 
// {
//     return view('dashboard.dashboardPatient'); // dashboard patient
// }) ->name('dashboard.dashboardPatient');

Route:: get('/login', function ()
 {
    return view('auth.login'); // page de connexion
})-> name('login');

Route::get('/register', function ()
 {
    return view('auth.register'); // page d'inscription
})-> name('register');

Route::get('/forgot_password', function () 
{
    return view('auth.forgot_password'); // page mot de passe oublie
})-> name('forgot_password');

Route::middleware(['auth','role:admin'])->group(function ()
 {
    Route::get('/dashboard/admin', function () 
    {
        return view('dashboard.admin');
    })->name('dashboard.admin');

    Route::get('/admin/services', function ()
     {
        return view('admin.services');
    })->name('admin.services');

    Route::get('/admin/users', function () 
    {
        return view('admin.users');
    })->name('admin.users');
});

Route::middleware(['auth','role:medecin']) ->group(function()
{
    Route::get('/dashboard/medecin', function ()
     {
        return view('dashboard.medecin');
    })-> name('dashboard.medecin');
});
Route::middleware(['auth','role:patient']) ->group(function()
{
    Route::get('/dashboard/patient', function ()
     {
        return view('dashboard.patient');
    })-> name('dashboard.patient');
});


