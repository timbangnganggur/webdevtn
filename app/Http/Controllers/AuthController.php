<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($data)){
            return redirect()->route('admin.dashboard.index');
        }else{
            return back();
        }
    }


    public function register(Request $request) 
    {

        $this->validate($request, array(
        'first_name' => 'required',
        'last_name' => 'required',
        'birthdate' => 'required',
        'username' => 'required',
        'phone_number' => 'required',
        'instagram_account' => 'required',
        'email' => 'required',
        'password' => 'required'
        ));


      $user = new User();
              $user->first_name = $request->first_name;
              $user->last_name = $request->last_name;
              $user->birthdate = $request->birthdate;
              $user->username = $request->username;
              $user->phone_number = $request->phone_number;
              $user->instagram_account = $request->instagram_account;
              $user->email = $request->email;
              $user->password = $request->password;
              //$user->save();

      if ($user->save()) {

          return back()->with('alert-success','Berhasil Menambahkan Data!'); 
     } elseif ($validator->fails()) {
          return self::index($request)->withErrors($validator->errors());
     }


    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
}
