<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $roles = Role::all();
        $obj = new User();
        $data = [
            'is_edit' => false,
            'title' => 'Add User',
            'button' => 'Submit',
            'route' => route('user.create'),
            'roles' => $roles,
            'edit_user' => $obj,
        ];
        return view('admin.user.form')->with($data);
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
        User::create($request);
        return redirect()->route('user.index')->with('status', 'User has been added successfully');
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
    public function edit(User $user)
    {
        $roles = Role::all();
        $data = [
            'is_edit' => true,
            'title' => 'Update User',
            'button' => 'Update',
            'route' => route('user.update', $user->id),
            'roles' => $roles,
            'edit_user' => $user,
        ];
        return view('admin.user.form')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request = $request->all();

        if (isset($request['new_module'])) {
            $request['module'] = $request['new_module'];
        }
        $user->update($request);
        return redirect()->route('permission.index')->with('status', 'Permission has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $permission)
    {
        $permission->delete();
        return redirect()->route('user.index')->with('status', 'Permission has been deleted successfully');
    }
}
