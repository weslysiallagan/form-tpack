<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    function index() {
        return view('pages.login');
    }

    function register() {
        return view('pages.register');
    }

    function create(Request $request) {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'jnskelamin'=>'required',
            'tgllahir'=>'required'
        ],[
            'name.required'=>'Nama Wajib Diisi',
            'email.required'=>'Email Wajib Dimasukkan',
            'email.email'=>'Silahkan masukkan email yang valid',
            'email.unique'=>'Email sudah terdaftar',
            'password.required'=>'Password tidak boleh kosong',
            'password.min'=>'Minimum password 6 karakter',
            'jnskelamin.required'=>'Data jenis kelamin belum dipilih',
            'tgllahir.required'=>'Tanggal Lahir tidak boleh kosong'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jnskelamin' => $request->jnskelamin,
            'tgllahir' => date('Y-m-d H:i:s',strtotime($request->tgllahir)),
        ];

        User::create($data);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)) {
            return redirect('user')->with('success', Auth::user()->name);
        }else {
            return redirect('')->withErrors('Silahkan masukkan data yang valid.');
        }
    }

    function login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email Wajib Dimasukkan',
            'password.required'=>'Password tidak boleh kosong',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)) {
            if(Auth::user()->role == 'user'){
                return redirect('/user');
            }else if(Auth::user()->role == 'admin') {
                return redirect('/admin');
            }
        }else {
            return redirect('')->withErrors('Username dan password tidak sesuai')->withInput(); 
        }
    }

    function logout() {
        Auth::logout();
        return redirect('');
    }
}
