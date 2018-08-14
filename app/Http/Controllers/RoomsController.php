<?php

namespace HMS\Http\Controllers;

use Illuminate\Http\Request;
use HMS\RoomModel;
use HMS\Http\Resources\RoomResource;

class RoomsController extends Controller
{
    
    public function index(Request $request)
    {   
        $search = $request->input('search');
        // $roomtypes = RoomtypeModel::all()->first();
        // $rooms = RoomModel
        // ::join('roomtypes', 'rooms.roomType', '=', 'roomtypes.id')
        // ->select('rooms.roomNo', 'roomtypes.type', 'rooms.floor', 'roomtypes.rate', 'roomtypes.rateperhour')
        // ->orderBy('createdDate', 'asc')
        // ->get(); 

        // $rooms = RoomModel::paginate(3);
        // return new RoomResource(RoomModel::find(1));
        // return RoomResource::collection($rooms);
        //return view('pages.manageRooms')->with(compact('rooms', 'roomtypes'));
        $rooms = RoomModel::search($search)->paginate(10);

        // $rooms = RoomModel::all();
        // return RoomResource::collection($rooms);
        // return view('pages.Rooms')->with('rooms',$rooms);
        // return view('pages.Rooms')->with(compact('rooms', 'search'));
         return view('pages.Rooms', compact('rooms', 'search'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $room = $request->isMethod('put') ? RoomModel::findOrfail($request->roomNo) : new Room;
    }

    public function show($id)
    {
        $room = RoomModel::findOrfail($id);
        return new RoomResource($room);
    }

    public function destroy($id)
    {
        //
    }
}
