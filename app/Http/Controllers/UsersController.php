<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    // 个人页面
    public function show(User $user)
    {
        $user = Auth::user();
        return view('users.show', compact('user'));
    }

    // 编辑资料页面
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    // 编辑资料逻辑
    public function update(UserRequest $requests, User $user)
    {

    }
}
