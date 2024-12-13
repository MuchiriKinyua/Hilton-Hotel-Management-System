<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;

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
    public function create_room(){
        return view('admin.create_room');
    }
    public function add_room(Request $request){
        $data = new Room;
        $data ->room_title = $request-> title;
        $data ->description = $request-> description;
        $data ->price = $request-> price;
        $data ->wifi = $request-> wifi;
        $data ->room_type = $request-> type;
        $image=$request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data -> image=$imagename;
        }
        $data->save();
        return redirect()->back();
    }
}
