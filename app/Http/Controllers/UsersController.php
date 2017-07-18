<?php

namespace App\Http\Controllers;

use App\Company;
use App\Department;
use App\Permission;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::pluck('name', 'id');
        $departments = Department::pluck('description', 'id');
        $permissions = Permission::pluck('label', 'id');

        return view('users.create', [
            'companies' => $companies,
            'departments' => $departments,
            'permissions' => $permissions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'signature' => 'required|string|max:255',
            'mobile_id' => 'required|string|max:255',
        ]);

        $department = Department::findOrFail($request->department);

        $user = $department->users()->create([
            'name' => $request->name, 
            'surname' => $request->surname,
            'email' => $request->email, 
            'mobile' => $request->mobile_no,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'signature' => $request->signature,
            'mobile_id' => $request->mobile_id
        ]);

        $user->permissions()->sync($request->permissions);

        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $companies = Company::pluck('name', 'id');
        $departments = Department::pluck('description', 'id');
        $permissions = Permission::pluck('label', 'id');

        $user->load('department.company', 'permissions');

        return view('users.edit', [
            'user' => $user, 
            'companies' => $companies,
            'departments' => $departments,
            'permissions' => $permissions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,'.$user->id,
            'signature' => 'required|string|max:255',
            'mobile_id' => 'required|string|max:255',
        ]);

        $user->update([
            'department_id' => $request->department, 
            'name' => $request->name, 
            'surname' => $request->surname,
            'email' => $request->email, 
            'mobile' => $request->mobile_no,
            'username' => $request->username,
            'signature' => $request->signature,
            'mobile_id' => $request->mobile_id
        ]);

        $user->permissions()->sync($request->permissions);

        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
