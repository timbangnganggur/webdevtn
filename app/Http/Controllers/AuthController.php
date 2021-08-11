<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Validator;

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



        $v = Validator::make($request->all(), [
        'first_name' => 'required',
        'last_name' => 'required',
        'birthdate' => 'required',
        'username' => 'required|unique:users',
        'phone_number' => 'required|unique:users',
        'instagram_account' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|unique:users'
        ]);

        if ($v->fails())
    {
        return back()->withErrors($v->errors());
    }


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

      if ($user->save()) {

          return back()->with('alert-success','Berhasil Menambahkan Data!'); 
         } 
         //elseif ($validator->fails()) {
          //return view('general.clbk');
          //self::index($request)->withErrors($validator->errors());
      //}


    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
}
