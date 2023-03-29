<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

Route::get('/getToken', function () {
    if (Auth::attempt([ // this checks whether a user with these credentials exists in DB
        'slug' => 'adell-jenkins',
        'email' => 'wrohan@example.com',
    ])){
        $user = User::where('slug', 'adell-jenkins');
    }
    $token = $user->createToken('basic-token', ['Read']); // this function only works on valid users (authenticable)
    
    return $token;
});