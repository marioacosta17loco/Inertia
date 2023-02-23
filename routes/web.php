<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
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
    return Inertia::render('Home');
    
});
Route::get('/contacto', function () {
    return Inertia::render('Contact');
});

Route::get('/usuarios', function () {
    return Inertia::render('Users', [
        'usuarios' => User::all()->makeHidden([
            'id', 
            'create_at', 
            'email_verified_at',
            'updated_at',
         ]),
    ]);
});

Route::get('/chat', function () {
    return Inertia::render('chat');
});
