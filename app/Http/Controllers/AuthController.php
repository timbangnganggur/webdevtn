<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if ($validator->fails()) {
            return back()->with('alert-error-login-input', json_decode($validator->errors(), true));
        } else if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin.dashboard.index')->with('alert-success-login', ' Berhasil Login');
        }else if (Auth::guard('user')->attempt($data)) {
            dd('Selamat Berhasil Login');
        } else {
            return back()->with('alert-error-login', 'Password atau username tidak tersedia, harap periksa lagi!');
        }
    }


    public function register(Request $request)
    {
        // Jangan menggunakan $this->validate karena akan langsung return dan tidak next ke baris dibawahnya jika error
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'username' => 'required|unique:users',
            'phone_number' => 'required|unique:users',
            'instagram_account' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|unique:users'
        ]);
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->birthdate = $request->birthdate;
        $user->username = $request->username;
        $user->phone_number = $request->phone_number;
        $user->instagram_account = $request->instagram_account;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //$user->save();

        if ($validator->fails()) {
            return back()->with('alert-error-register', json_decode($validator->errors(), true));
        } else if ($user->save()) {
            return back()->with('alert-success-register', 'Anda berhasil mendaftar, silahkan login!');
        } else {
            return back()->with('alert-error-register', 'Server Bermasalah');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
}
