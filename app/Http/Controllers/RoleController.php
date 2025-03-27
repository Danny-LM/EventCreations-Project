<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::all();
        return view('permissions', compact('roles'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name|max:255',
        ]);

        try {
            $role = new Role();
            $role->name = $request->role_name;
            $role->save();
    
            return redirect()->route('dashboard', ['section' => 'permissions'])
                             ->with('success', 'Role created successfully!');
        } catch (\Exception $e) {
            return redirect()->route('dashboard', ['section' => 'permissions'])
                             ->with('error', 'Error creating role: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
    }

    public function delete($id)
    {
        Role::find($id)->delete();
    }
}
