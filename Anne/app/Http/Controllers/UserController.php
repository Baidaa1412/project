<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use App\Models\User; // Assuming you have a User model

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(4);

        return view('Admin.users', ['users' => $users]);
    }
   
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        User ::create($input);
          return redirect('users')->with('flash_message', ' user Addedd!');}



    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);

        $user->usertype = $request->input('usertype');

        $user->save();
        return redirect('users')->with('success', 'User type updated successfully');
    }

    public function destroy($id)
    {
    }
}
