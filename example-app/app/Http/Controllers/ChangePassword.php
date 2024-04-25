<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Controller
{
    public function showChangePasswordForm()
    {
        return view('changerpassword');
    }
    
    public function changePassword(Request $request)
    {
        // Validate form data
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Check if current password matches the authenticated user's password
        if (Hash::check($request->current_password, Auth::user()->password)) {
            // Update user's password
            Auth::user()->update(['password' => Hash::make($request->new_password)]);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Đổi mật khẩu thành công!');
        } else {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Mật khẩu hiện tại không chính xác.');
        }
    }
}
