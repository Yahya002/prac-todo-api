<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

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

Route::get('/csrf', function () {
    return csrf_token();
});

Route::post('/getToken', function (Request $request) {
    if (Auth::attempt([ // this checks whether a user with these credentials exists in DB
        'email' => $request['email'],
        'password' => $request['password'],
    ])){
        $user = User::where('email', $request['email']);
    }
    else{
        $user = new User([
            'slug' => $request['slug'],
            'name' => (explode('-', $request['slug'])[0] . ' ' . explode('-' ,$request['slug'])[1]),
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
        $user->save();
    }

    $token = $user->createToken('user-token', ['create', 'read', 'update', 'delete']); // this function only works on valid users (authenticable)
    
    return $token;
});