<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {

        return view('welcome');
    }
    public function login(Request $request)
    {



        $SimpanValidasi = $request->validate([
            'nama' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($SimpanValidasi)) {

            $role = Auth::user()->role->name;

            if ($role == 'admin') {

                return redirect('role');
            } elseif ($role == 'user') {

                return redirect('profil');
            }
        }
    }

    public function register()
    {

        return view('auth/register');
    }

    public function registerAuth(Request $request)
    {

        $SimpanValidasi = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'noTelp' => 'required',
            'password' => 'required',

        ]);

        User::create($SimpanValidasi);
        return redirect('/');
    }

    public function logout()
    {

        Auth::logout();
        return redirect('/');
    }
}
