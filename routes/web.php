<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // page client
});

Route::get('/dashAdmin', function () {
    return view('dashboard.dashboardAdmin'); // dashboard admin
})->name('admin.dashboard');



Route::get('/dashMedcin', function () {
    return view('dashboard.dashboardMedcin'); // dashboard medcin
}) ->name('dashboard.dashboardMedcin');



Route::get('/dashPatient', function () {
    return view('dashboard.dashboardPatient'); // dashboard patient
}) ->name('dashboard.dashboardPatient');

Route:: get('/login', function () {
    return view('auth.login'); // page de connexion
})-> name('login');

Route::get('/register', function () {
    return view('auth.register'); // page d'inscription
})-> name('register');

Route::get('/forgot_password', function () {
    return view('auth.forgot_password'); // page mot de passe oublie
})-> name('forgot_password');





