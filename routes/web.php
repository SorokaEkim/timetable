<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'templates.main.index')->name('home'); //Главная

Route::view('contacts', 'templates.contacts.index')->name('contacts'); //Контакты

Route::name('user.')->group(function(){
    Route::view('/private', 'private')->middleware('auth')->name('private'); //Личный кабинет

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        } 
        return view('templates.login.index');
    })->name('login'); // Вход в личный кабинет

    // Route::post('/login', [])

    // Route::get('/logout', [])->name('logout');

    Route::get('/registration', function(){
        if(Auth::chek()){
            return redirect(route('user.private'));
        } 
        return view('registration');
    })->name('registration');

    // Route::post('/registration', []);
});