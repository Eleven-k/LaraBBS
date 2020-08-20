<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Handlers\ImageUploadHandler;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    // 个人页面
    public function show(User $user)
    {
        $user = Auth::user();
        return view('users.show', compact('user'));
    }

    // 编辑资料页面
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function passwordEdit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.passswordEdit', compact('user'));
    }

    // 编辑资料逻辑
    public function update(User $user, Request $request, ImageUploadHandler $uploader)
    {
        $this->authorize('update', $user);
        $this->validate($request, [
            'name' => 'nullable|max:50',
            'introduction' => 'nullable',
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=208,min_height=208'
        ]);

        $data = [];
        $data['name'] = $request->name;
        $data['introduction'] = $request->introduction;
        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 416);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }
        $user->update($data);
        session()->flash('success', '个人资料更新成功！');
        return redirect()->route('users.show', $user);
    }

    public function passwordUpdate(User $user, Request $request, ImageUploadHandler $uploader)
    {
        $this->authorize('update', $user);
        $this->validate($request, [
            'password' => 'nullable|confirmed|min:6',
        ]);

        $data = [];
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        session()->flash('success', '个人资料更新成功！');
        return redirect()->route('users.show', $user);
    }
}
