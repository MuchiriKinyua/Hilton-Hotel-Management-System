<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Gallery;
use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                $room = Room::all();
                return view('home.index', compact('room'));
            } else if ($usertype == 'admin') {
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
public function home()
{
    $room = Room::all(); 
    return view('home.index', compact('room')); 
}
    public function create_room(){
        return view('admin.create_room');
    }
    public function add_room(Request $request){
        $data = new Room;
        $data ->room_title = $request-> title;
        $data ->description = $request-> description;
        $data ->amount = $request-> amount;
        $data ->wifi = $request-> wifi;
        $data ->room_type = $request-> type;
        $image=$request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data -> image=$imagename;
        }
        $data->save();
        return redirect()->route('view_room')->with('success', 'Room updated successfully.');
    }
    public function view_room(){
        $data = Room::all();

        return view('admin.view_room', compact('data'));
    }
    public function room_delete($id){
        $data = Room::find($id);
        $data->delete();

        return redirect()->back();
    }
    public function room_update($id){
        $data = Room::find($id);

        return view('admin.update_room', compact('data'));
    }
    public function edit_room(Request $request, $id){
        $data = Room::find($id);

        $data ->room_title = $request-> title;
        $data ->description = $request-> description;
        $data ->amount = $request-> amount;
        $data ->wifi = $request-> wifi;
        $data ->room_type = $request-> type;
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data->image=$imagename;
        }
        $data -> save();

        return redirect()->route('view_room')->with('success', 'Room updated successfully.');
    }
    public function bookings(){
        $data=Booking::all();
        return view('admin.booking', compact('data'));
    }
    public function delete_booking($id){
        $data=Booking::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function approve_book($id)
    {
        $booking = Booking::find($id);
        $booking -> status='approved';
        $booking -> save();
        return redirect()->back();
    }
    public function reject_book($id)
    {
        $booking = Booking::find($id);
        $booking -> status='rejected';
        $booking -> save();
        return redirect()->back();
    }

    public function view_gallery()
    {
        $gallery = Gallery::all();

        return view('admin.gallery', compact('gallery'));
    }
    public function upload_gallery(Request $request)
    {
        $data = new Gallery;

        $image = $request->image;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('gallery', $imagename);

            $data->image = $imagename;

            $data->save();

            return redirect()->back();
        }
    }

    public function delete_gallery($id)
    {
        $data = Gallery::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function prediction()
    {
         return view('admin.prediction');
     }
}
