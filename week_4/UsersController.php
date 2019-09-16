<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index () {
        return view("users", ["users" => User::all()]);
    }

    public function edit ($id) {
        $user = User::where('id', $id)->first();

        return view('edit', compact('user'));
    }

    public function update($id, Request $request) {

        $sentData = $request->only(["name","lastname","email","password"]);
        $user = User::where('id', $id)->first();

        $user->name = $sentData['name'];
        $user->lastname = $sentData['lastname'];
        $user->email = $sentData['email'];
        $user->password = $sentData['password'];
        $user->save();

        
      return redirect('/users');
    } 

    public function destroy($id, Request $request) {

        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/users');
    }

}
