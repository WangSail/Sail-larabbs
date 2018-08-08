<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    //Route::get('/users/{user}', 'UsersController@show')->name('users.show');
    // 变量名匹配路由片段 User 对应 {user}
    public function show(User $user)
    {
    	return view('users.show',compact('user'));
    }
    
    //更新个人资料页面显示
    public function edit(User $user)
    {
    	return view('users.edit',compact('user'));
    }

    //提交个人资料更新修改
    public function update(UserRequest $request, User $user){
        //创建表单验证类 $ php artisan make:request UserReques
        //表单提交验证 规则写入目录：Requset->UserRequest->rules()
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }

}
