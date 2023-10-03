<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){

       
        // $profil = User::where('nama',auth()->user()->nama)->first();
        $role = Role::where('id',auth()->user()->role_id)->first();

   
        $data = [
            // 'profil'=> $profil,
            'role'=>$role
        ];
        
        return view('berhasillogin',$data);

    }

    public function profil(){

      

    }
}
