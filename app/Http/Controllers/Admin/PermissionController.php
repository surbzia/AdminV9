<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all()->sortBy('module');
        return view('admin.permissions.index')->with(compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $permissions = Permission::distinct()->get('module');
        $obj = new Permission();
        $data = [
            'is_edit' => false,
            'title' => 'Add Permission',
            'button' => 'Submit',
            'route' => route('permission.store'),
            'permissions' => $permissions,
            'edit_permission' => $obj,
        ];
        return view('admin.permissions.form')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->all();

        if (isset($request['new_module'])) {
            $request['module'] = $request['new_module'];
        }
        Permission::create($request);
        return redirect()->route('permission.index')->with('status', 'Permission has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $permissions = Permission::distinct()->get('module');
        $data = [
            'is_edit' => true,
            'title' => 'Update Permission',
            'button' => 'Update',
            'route' => route('permission.update', $permission->id),
            'permissions' => $permissions,
            'edit_permission' => $permission,
        ];
        return view('admin.permissions.form')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request = $request->all();

        if (isset($request['new_module'])) {
            $request['module'] = $request['new_module'];
        }
        $permission->update($request);
        return redirect()->route('permission.index')->with('status', 'Permission has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permission.index')->with('status', 'Permission has been deleted successfully');
    }
}
