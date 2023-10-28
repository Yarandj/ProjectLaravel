<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(user $user){
        return view('user.show', compact('user'));
    }
    public function edit(user $user){
        return view('user.edit', compact('user'));
    }
    public function update(user $user){
        $user->update(request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]));
        return redirect()->route('user', [$user]);
    }
}
