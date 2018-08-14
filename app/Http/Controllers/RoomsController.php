<?php

namespace HMS\Http\Controllers;

use Illuminate\Http\Request;
use HMS\RoomModel;
use HMS\RoomtypeModel;
use HMS\Http\Resources\RoomResource;
use HMS\Http\Resources\RoomCollection;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $roomtypes = RoomtypeModel::all()->first();

        $rooms = RoomModel
        ::join('roomtypes', 'rooms.roomType', '=', 'roomtypes.id')
        ->select('rooms.roomNo', 'roomtypes.type', 'rooms.floor', 'roomtypes.rate', 'roomtypes.rateperhour')
        ->orderBy('createdDate', 'asc')
        // ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        // return new RoomResource(RoomModel::find(1));
        return new RoomCollection($rooms);
        //return view('pages.manageRooms')->with(compact('rooms', 'roomtypes'));
        // return view('pages.manageRooms')->with('rooms',$rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return new RoomResource($room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
