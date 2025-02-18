<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Gallery;
use App\Models\Booking;
use Illuminate\Support\Str;
use App\Models\Contact;
use Notification;
use App\Models\Housekeeping;
use App\Notifications\MyFirstNotification;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                $room = Room::all();

                $gallery = Gallery::all();

                return view('home.index', compact('room', 'gallery'));
            } else if ($usertype == 'admin') {
                return view('home');
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

    $gallery = Gallery::all();

    return view('home.index', compact('room', 'gallery')); 
}
    public function create_room(){
        return view('admin.create_room');
    }
    public function add_room(Request $request)
    {
        $data = new Room;
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->amount = $request->amount;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
    
        if ($request->hasFile('image')) {
            $imagename = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data->image = $imagename;
        }
    
        $data->save();
    
        return redirect()->route('view_room')->with('success', 'Room created successfully.');
    }
    
    public function view_room(){
        $data = Room::all();

        return view('admin.view_room', compact('data'));
    }
    public function room_delete(Room $room)
{
    $room->delete();
    return redirect()->back()->with('success', 'Room deleted successfully.');
}

public function room_update(Room $room)
{
    return view('admin.update_room', compact('room'));
}

public function edit_room(Request $request, Room $room)
{
    $room->room_title = $request->title;
    $room->description = $request->description;
    $room->amount = $request->amount;
    $room->wifi = $request->wifi;
    $room->room_type = $request->type;

    if ($request->hasFile('image')) {
        $imagename = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('room', $imagename);
        $room->image = $imagename;
    }

    $room->save();

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

    public function view_messages()
    {
        $data = contact::all();

        return view('admin.view_messages', compact('data'));
    }

    public function send_mail($id)
    {
        $data = Contact::find($id);

        return view ('admin.send_mail', compact('data'));
    }

    public function mail(Request $request, $id)
    {
        $data = Contact::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'endline' => $request->endline,
        ];
        Notification::send($data, new MyFirstNotification($details));

        return redirect()->back();
    }

    public function transactions()
    {
        return view('admin.transactions');
    }

    public function housekeeping()
    {   
        $housekeepingTasks = \App\Models\Housekeeping::with(['room', 'staff'])->get();
        return view('admin.housekeeping', compact('housekeepingTasks'));
    }    

    public function createHousekeeping()
{
    $data = Room::all();
    $rooms = Room::all();
    $staff = User::where('usertype', 'staff')->get(); // Assuming 'staff' user type

    return view('admin.create_housekeeping', compact('data', 'rooms', 'staff'));
}

public function viewHousekeeping()
{
    $housekeepingTasks = Housekeeping::with('room', 'staff')->get();
    return view('admin.housekeeping', compact('housekeepingTasks'));
}


public function storeHousekeeping(Request $request)
{
    $request->validate([
        'room_id' => 'required|exists:rooms,id',
        'assigned_staff_id' => 'nullable|exists:users,id',
        'cleaning_date' => 'nullable|date',
        'completion_time' => 'nullable|date',
        'supplies_used' => 'nullable|string',
        'status' => 'required|in:clean,dirty,occupied,out_of_service',
        'inspection_status' => 'required|in:pending,passed,failed',
        'notes' => 'nullable|string',
    ]);

    Housekeeping::create($request->all());

    return redirect()->route('housekeeping')->with('success', 'Housekeeping record added.');
}


    public function prediction()
    {
         return view('admin.prediction');
     }
}
