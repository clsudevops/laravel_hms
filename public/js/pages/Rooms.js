$(document).ready(function(){
    getRooms();

    function getRooms(){
        $.ajax({
            url:'http://127.0.0.1:8000/api/Rooms'
        }).done(function(rooms){
            $('#roomTable').append(createRoomsTable(rooms));
        });
    }

    function createRoomsTable(Rooms){
        var myRoom = "";
        $.each(Rooms, function (key, room) {
            myRoom += "<tr>" +
                        "<td>" + room.roomNo + "</td>" +
                        "<td>" + room.type + "</td>" +
                        "<td>" + room.floor + "</td>" +
                        "<td>" + room.rate + "</td>" +
                        "<td>" + room.rateperhour + "</td>" +
                        "<td><a class='btn btn-flat btn-2 tooltipped' style='margin-right:5px;' data-tooltip='Delete'><i class='material-icons'>delete</i></a></td>" +
                    "</tr>";
        });
    
        return myRoom;
    }
});