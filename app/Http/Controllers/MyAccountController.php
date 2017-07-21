<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = auth()->user();

        $user->load('department.company', 'permissions');
        
        return view('my-account.show', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.Auth::id(),
            'username' => 'required|string|max:255|unique:users,username,'.Auth::id(),
            'password' => 'required|string|min:6',
            'mobile_no' => 'required|string|max:255',
            'signature' => 'required|string|max:255',
            'mobile_id' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        $user->update([
            'name' => $request->name, 
            'surname' => $request->surname,
            'email' => $request->email, 
            'mobile' => $request->mobile_no,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'signature' => $request->signature,
            'mobile_id' => $request->mobile_id
        ]);

        flash('Successfully updated!', 'success');

        return back();
    }
}
