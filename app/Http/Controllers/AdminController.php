<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function role()
    {
        $role = Role::all();
        return view('admin.role',compact('role'));
    }

    public function storeRole(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50'
        ]);
        $role = Role::firstOrCreate(['name' => $request->name]);
        return redirect()->route('admin.role');
    }

    public function destroyRole($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('admin.role');
    }

    public function user()
    {
        return view('admin.user');
    }

    public function pejabat()
    {
        return view('admin.pejabat');
    }
}
