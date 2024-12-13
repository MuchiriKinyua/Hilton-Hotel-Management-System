<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {  // Better check if user is authenticated
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('home.index');
            } elseif ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }

        // Optional: Redirect if user is not authenticated
        return redirect()->route('login');
    }
    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Validate input
    $request->validate([
        'usertype' => 'required|in:user,admin',
    ]);

    // Update the user type
    $user->usertype = $request->input('usertype');
    $user->save();

    return redirect()->route('user.index')->with('success', 'User updated successfully.');
}
    public function home(){
        return view('home.index');
    }

}
