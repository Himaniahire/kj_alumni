<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::get();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('admin.roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|unique:roles,name',

        ]);
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        Session::flash('success','Role created successfully');
        return redirect('admin/roles');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::findOrFail($id);
        return view('admin.roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::get();
        $userPermissions = Permission::join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
        ->where('role_has_permissions.role_id', $role->id)  // Access user id
        ->get();
        return view('admin.roles.edit',compact(['role','permissions','userPermissions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' =>'required',

        ]);
        $role = Role::findOrFail($id);

        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->permissions);
        Session::flash('success','Role updated successfully');
        return redirect('admin/roles');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        Session::flash('success','Role deleted successfully');
        return redirect('admin/roles');

        //
    }
}
