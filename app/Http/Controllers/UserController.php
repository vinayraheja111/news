<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = user::all();
        return view('admin.users.users',compact('user'));
    }

    public function adduser()
    {
        return view('admin.users.add-user');
    }

    public function createuser(Request $request)
{

    $request->validate([
        'fname' => 'required|unique:users,name',
        'lname' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required|min:8',
        'role' => 'required'
    ]);

    $user = new User([
        'name' => $request->input('fname'),
        'lname' => $request->input('lname'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')), // Hash the password
        'role' => $request->input('role')
    ]);
    //dd($user);

    if ($user->save()) {
        return redirect('admin/users')->with('success', 'User added successfully');
    }
    else {
        return 'error';
    }
}
    public function edituser(Request $request,$id)
    {
          $user = User::find($id);
          return view('admin.users.update-user',compact('user'));
    }

    public function updateuser(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'fname' => 'required|unique:users,name,' . $user->id,
            'lname' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'password' => 'required|min:8',
            'role' => 'required'
        ]);

        // Update the existing user model
        $user->name = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');

        if ($user->save()) {
            return redirect('admin/users')->with('success', 'User updated successfully');
        } else {
            return 'error';
        }
    }

    public function deleteuser(Request $request,$id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users')->with('success', 'User Deleted successfully');
    }

}
