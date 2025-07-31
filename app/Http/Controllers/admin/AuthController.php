<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Admin;
use Auth;
use Session;
class AuthController extends Controller
{
    public function admin_login()
    {
        if (auth::guard('admin')->check()):
            return redirect('admin/dashboard');
        endif;
        return view('admin.auth.login');
    }

    public function admin_login_now(Request $request)
    {
        if (Auth::guard('admin')->attempt(['al_email' => $request->email, 'password' => $request->password])) {
            return redirect('admin/dashboard');
        }
        Session::flash('error', 'Invalid credential');
        return redirect()->back();
    }

    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }

    // change password
    public function change_password()
    {
        return view('admin.auth.change_password');
    }

    public function change_password_save(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ], [
            'new_password.required' => 'Please enter a new password.',
            'new_password.min' => 'The new password must be at least 6 characters.',
            'confirm_password.required' => 'Please confirm your new password.',
            'confirm_password.same' => 'Confirm password does not match new password.',
        ]);
        $admin = Auth::guard('admin')->user();
        $login = Admin::where('al_id', $admin->al_id)->first();

        if (!$login) {
            return back()->with('error', 'Login record not found.');
        }
        $login->password = bcrypt($request->new_password);
        $login->save();

        return back()->with('success', 'Password Changed Successfully!');
    }
}
