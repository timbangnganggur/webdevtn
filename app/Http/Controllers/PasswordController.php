<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.password.edit');
    }
    public function edit()
    {
        return view('admin.password.edit');
    }
    public function update(UpdatePasswordRequest $request)
{
    $request->user()->update([
        'password' => Hash::make($request->get('password'))
    ]);

    return redirect()->route('admin.password.edit')->with('message', 'password telah di ubah');;
}
}