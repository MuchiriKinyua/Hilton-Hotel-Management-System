<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RoomRepository;
use Illuminate\Http\Request;
use Flash;

class RoomController extends AppBaseController
{
    /** @var RoomRepository $roomRepository*/
    private $roomRepository;

    public function __construct(RoomRepository $roomRepo)
    {
        $this->roomRepository = $roomRepo;
    }

    /**
     * Display a listing of the Room.
     */
    public function index(Request $request)
    {
        $rooms = $this->roomRepository->paginate(10);

        return view('rooms.index')
            ->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new Room.
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created Room in storage.
     */
    public function store(CreateRoomRequest $request)
    {
        $input = $request->all();

        $room = $this->roomRepository->create($input);

        Flash::success('Room saved successfully.');

        return redirect(route('rooms.index'));
    }

    /**
     * Display the specified Room.
     */
    public function show($id)
    {
        $room = $this->roomRepository->find($id);

        if (empty($room)) {
            Flash::error('Room not found');

            return redirect(route('rooms.index'));
        }

        return view('rooms.show')->with('room', $room);
    }

    /**
     * Show the form for editing the specified Room.
     */
    public function edit($id)
    {
        $room = $this->roomRepository->find($id);

        if (empty($room)) {
            Flash::error('Room not found');

            return redirect(route('rooms.index'));
        }

        return view('rooms.edit')->with('room', $room);
    }

    /**
     * Update the specified Room in storage.
     */
    public function update($id, UpdateRoomRequest $request)
    {
        $room = $this->roomRepository->find($id);

        if (empty($room)) {
            Flash::error('Room not found');

            return redirect(route('rooms.index'));
        }

        $room = $this->roomRepository->update($request->all(), $id);

        Flash::success('Room updated successfully.');

        return redirect(route('rooms.index'));
    }

    /**
     * Remove the specified Room from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $room = $this->roomRepository->find($id);

        if (empty($room)) {
            Flash::error('Room not found');

            return redirect(route('rooms.index'));
        }

        $this->roomRepository->delete($id);

        Flash::success('Room deleted successfully.');

        return redirect(route('rooms.index'));
    }
}
