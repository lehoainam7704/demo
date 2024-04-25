<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Kiểm tra hình ảnh
        ]);
    
        // Kiểm tra nếu tập tin không phải là hình ảnh
        if (!in_array($request->file('avatar')->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
            return redirect()->back()->withErrors(['avatar' => 'The avatar must be an image.'])->withInput();
        }
    
        // Hash password
        $password = Hash::make($request->password);
    
        // Lưu dữ liệu người dùng vào cơ sở dữ liệu
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->role = 'user'; // Thiết lập vai trò mặc định cho người dùng
        // Xử lý ảnh đại diện
        if ($request->hasFile('avatar')) {
            $avatarName = time() . '.' . $request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('avatars'), $avatarName);
            $user->avatar = $avatarName;
        }
        $user->save();
    
        // Chuyển hướng người dùng sau khi đăng ký thành công
        return redirect()->route('login')->with('success', 'Đăng ký tài khoản thành công!');
    }    
}
