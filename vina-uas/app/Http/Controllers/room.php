<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class room extends Controller
{
    //
}
// app/Http/Controllers/RoomController.php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $room = new Room();
        $room->room_number = $request->input('room_number');
        $room->room_type = $request->input('room_type');
        $room->is_available = $request->input('is_available');
        $room->save();
        return redirect()->route('rooms.index');
    }

    public function edit($id)
    {
        $room = Room::find($id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        $room->room_number = $request->input('room_number');
        $room->room_type = $request->input('room_type');
        $room->is_available = $request->input('is_available');
        $room->save();
        return redirect()->route('rooms.index');
    }

    public function destroy($id)
    {
        Room::destroy($id);
        return redirect()->route('rooms.index');
    }
}