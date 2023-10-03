<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {

        $role = Role::all();
        $data = [
            'role' => $role

        ];


        return view('role/role', $data);
    }


    public function create()
    {


        return view('role/createRole');
    }

    public function createAction(Request $request)
    {

        $simpandisini = $request->validate([
            'name' => 'required',

        ]);



        Role::create($simpandisini);

        return redirect('/role')->with('success', 'Data berhasil dibuat');
    }

    public function edit($id)
    {

        $role = Role::findorfail($id);

        $data = [
            'role' => $role,
        ];

        return view('role/edit', $data);
    }

    public function editAction(Request $request,$id)
    {

      $role = Role::findorfail($id);
      $validasi= $request->validate([
        'name' => 'required',

    ]);
      
      $role->update($validasi);
      return redirect('/role')->with('success', 'Data berhasil edit');

       
        
    }

    public function delete($id)
    {
        $role = Role::findorfail($id);
        $role->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
