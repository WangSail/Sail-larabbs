<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //Route::get('/users/{user}', 'UsersController@show')->name('users.show');
    // 变量名匹配路由片段 User 对应 {user}
    public function show(User $user)
    {
    	return view('users.show',compact('user'));
    }

}
