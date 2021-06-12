<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest'])->except('index', 'logout');
    }

    public function index()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('landing')->with('success', 'Logout Success');    }

    public function storeLogin(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|max:255',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('username', 'password'), $request->remember)){
            return back()->with('status', 'Invalid Login Details');
        }
        

        return redirect()->route('landing')->with('success', 'Login Success');
    }
    public function storeRegister(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'nama' => 'required|max:255',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('username', 'password'));
        
        return redirect()->route('landing')->with('success', 'Register Success');
    }
}
