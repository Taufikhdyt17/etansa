<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\User;
use App\Pejabat;

class AdminController extends Controller
{
    // -------------------- Role --------------------
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

    //-------------------- User --------------------
    public function user()
    {
        $user = user::with('roles')->get();
        return view('admin.user',compact('user'));
    }

    //-------------------- Pejabat --------------------
    public function pejabat()
    {
        $pejabat = pejabat::all();
        return view('admin.pejabat',compact('pejabat'));
    }

    public function storePejabat(Request $request)
    {
        $pejabat = new Pejabat;
        $pejabat->nama_pejabat = $request->input('nama_pejabat');
        $pejabat->nip = $request->input('nip');
        $pejabat->jabatan = $request->input('jabatan');
        $pejabat->save();

        return redirect()->route('admin.pejabat');
    }

    public function editPejabat($id)
    {
        $pejabat = pejabat::find($id);
        return view('admin.editpejabat',compact('pejabat'));
    }

    public function updatePejabat(Request $request,$id)
    {
       $pejabat = pejabat::find($id);
       $pejabat->nama_pejabat = $request->input('nama_pejabat');
       $pejabat->nip = $request->input('nip');
       $pejabat->jabatan = $request->input('jabatan');
       $pejabat->save();

       return redirect()->route('admin.pejabat');
    }

    public function destroyPejabat($id)
    {
        $pejabat = pejabat::find($id);
        $pejabat->delete();

        return redirect()->route('admin.pejabat');
    }
}
