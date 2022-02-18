<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('Admin.User.add_user');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        $insertUser = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => $request->role,
        ]);

        return redirect("view-users");
    }

    public function index()
    {
        $users = User::all();

        return view('Admin.User.view_users')
        ->with("users",$users);
    }

    public function edit($id)
    {
        $editUser = User::find($id);

        return view('Admin.User.edit_user')
        ->with("editUser",$editUser);
    }

    public function update(Request $request, $id)
    {
        $updateUser = User::find($id);

        $updateUser->name = $request->name;
        $updateUser->email = $request->email;
        $updateUser->role = $request->role;
        $updateUser->update();

        return redirect("view-users");
    }

    public function destroy($id)
    {
        $deleteUser = User::find($id)->delete();

        return redirect("view-users");
    }

    public function active($id)
    {
        $updateUser = User::find($id);

        $updateUser->publication_status = "1";

        $updateUser->update();

        return redirect("view-users");
    }

    public function inactive($id)
    {
        $updateUser = User::find($id);

        $updateUser->publication_status = "0";

        $updateUser->update();

        return redirect("view-users");
    }
}
