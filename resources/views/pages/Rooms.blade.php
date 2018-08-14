@extends('layouts.app') 

@section('content')
    <div class="row">
            <div class="col s12">
                <div class="card-1">
                    <div class="page-header valign-wrapper z-depth-1">
                        <h5>Manage Rooms</h5>
                    </div>
                    <div class="row" style="margin-top:20px; margin-bottom:0px;">
                        <div class="col s12 m6">
                            @include('includes.search')
                        </div>
                        <div class="col s12 m6">
                            <a class="btn btn-1 right" style="height:36px; line-height:36px; margin-bottom:10px;">
                                <i class="material-icons left">add</i>
                                Add New Room
                            </a>
                        </div>
                        {{-- here --}}
                    </div>
                    <div class="row">
                        <div class="col s12 m12">
                            <table class="z-depth-2 highlight myTable">
                                    <thead>
                                        <tr>
                                            <th>Room #</th>
                                            <th>Type</th>
                                            <th>Floor</th>
                                            <th>Rate</th>
                                            <th>Rate/Hour</th>
                                            <th style="width:20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="roomTable">
                                        @foreach($rooms as $room)
                                            <tr>
                                                <td>{{$room->roomNo}}</td>
                                                <td>{{$room->type}}</td>
                                                <td>{{$room->floor}}</td>
                                                <td>{{$room->rate}}</td>
                                                <td>{{$room->rateperhour}}</td>
                                                <td>
                                                    <a class='btn btn-flat btn-2 tooltipped' style='margin-right:5px;' data-tooltip='Delete'><i class='material-icons'>delete</i></a>
                                                    <a class='btn btn-flat btn-2 tooltipped' style='margin-right:5px;' data-tooltip='Edit'><i class='material-icons'>mode_edit</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>    
                            </table>
                            <div class="right" id="pagination">
                                {{$rooms->appends(['search' => $search])->links()}}    
                            </div>   
                        </div> 
                    </div>  
                </div>
            </div>
        </div>
        {{-- <script type="text/javascript" src="{{ asset('js/pages/Rooms.js') }}"></script> --}}
@endsection