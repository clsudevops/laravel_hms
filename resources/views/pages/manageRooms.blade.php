@extends('layouts.app') 

@section('content')
    {{-- <example-component></example-component> --}}
    <div class="row">
            <div class="col s12">
                <div class="card-1">
                    <div class="page-header valign-wrapper z-depth-1">
                        <h5>Manage Rooms</h5>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col s12 m7">
                            <search></search>
                            <table class="z-depth-2 highlight roomTypeTable">
                                <thead>
                                    <tr>
                                        <th>Room #</th>
                                        <th>Type</th>
                                        <th>Floor</th>
                                        <th>Rate</th>
                                        <th>Rate/Hour</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="roomTable">
                                    @if(count($rooms) > 1)
                                        @foreach($rooms as $room)
                                            <tr>
                                                <td>{{ $room->roomNo }}</td>
                                                <td>{{ $room->type }}</td>
                                                <td>{{ $room->floor }}</td>
                                                <td>{{ $room->rate }}</td>
                                                <td>{{ $room->rateperhour }}</td>
                                                <td><a class="btn btn-flat btn-2 tooltipped" style="margin-right:5px;" data-tooltip="Delete"><i class="material-icons">delete</i></a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>    
                            </table>
                            {{-- <ul class="pagination right" id="pagination"></ul> --}}
                        </div>
                        <div class="col s12 m5">
                            <div class="card" style="margin-top:15px;">
                                <h5 class="h5-adding z-depth-1">Add or Update Room</h5>
                                <div class="row" style="padding:0 15px;">
                                    <div class="col s12 m4" style="margin-bottom:0px;">
                                        <label>Room No:</label>
                                        <input style="height:36px; line-height:36px;" id="roomNo" type="text" class="validate" required>
                                    </div>
                                    <div class="col s12 m4" style="margin-bottom:0px;">
                                        <label>Rate:</label>
                                        <input style="height:36px; line-height:36px;" id="rate" type="text" class="validate" required disabled>
                                    </div>
                                    <div class="col s12 m4" style="margin-bottom:0px;">
                                        <label>Rate/Hour:</label>
                                        <input style="height:36px; line-height:36px;" id="rateperhour" type="text" class="validate" disabled>
                                    </div>
                                </div>
                                <div class="row" style="padding:0 15px;margin-bottom:0px;">
                                    <roomtype></roomtype>
                                    <div class="col s12 m4">
                                        <label >Select Floor</label>
                                        <select id="roomFloor" style="height:36px; line-height:36px;">
                                            <?php
                                                for($i = 1 ; $i <= 11 ; $i++){
                                                    echo "<option value=" . $i . ">" . $i . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="padding:0 15px;">
                                    <div class="input-field col s12 m12">
                                        <a class="btn right btn-1" id="submitRoom" style="margin-left:5px; height:36px; line-height:36px;">
                                            <i class="material-icons left" style="margin-right:10px;">
                                                save
                                            </i>
                                            save
                                        </a>
                                        <a class="btn right btn-1" id="clearRoom" onclick="clearRoom()" style="margin-left:5px; height:36px; line-height:36px;">
                                            <i class="material-icons left" style="margin-right:10px;">
                                                clear_all
                                            </i>
                                            Clear
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="margin-top:15px;">
                                <h5 class="h5-adding z-depth-1" style="margin-bottom:5px;">Room Inventory</h5>
                                <div class="row" style="padding:0 15px;">
                                    <div class="input-field col s6 m6">
                                        <h5 id="roomtoDisplayInventory" style="height:36px; line-height:36px; margin-left:0;">
                                            <!-- js used here to get details and dynamic header -->
                                        </h5>
                                    </div>
                                    <div class="input-field col s6 m6">
                                        <div id="addInventoryContainer">
                                            <!-- js used here to get details and dynamic button -->
                                        </div>
                                    </div>
                                    <div class="col s12 m12" style="margin-top:0">
                                        <div class="roomInventoryDiv">
                                            <table id="ItemInventoryTable">
                                            
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>  
                </div>
            </div>
        </div>
@endsection