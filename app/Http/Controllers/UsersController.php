<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {

        $users = User::all();
        return view('index', ['users' => $users]);


    }

    public function view($id)
    {
        $user = User::find($id);
        return view('view', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit', compact('user'));

    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $validatedUser = $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|',
            'password' => 'required|string|min:8',
        ]);

        $user->name = $validatedUser['name'];
        $user->email = $validatedUser['email'];
        $user->password = bcrypt($validatedUser['password']);
        $user->save();
        return redirect()->route('user.index');
    }

    public function add(Request $request)
    {
        $user = new User();
        $validatedUser = $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|',
            'password' => 'required|string|min:8',
        ]);
        
        $user->name = $validatedUser['name'];
        $user->email = $validatedUser['email'];
        $user->password = bcrypt($validatedUser['password']);
        $user->save();;
        return redirect()->back();
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
