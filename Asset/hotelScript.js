function validatehotel()
{
    let hotelName = document.getElementById("Hotelname").value;
    let hotelAddress = document.getElementById("Hoteladdress").value;
    let city = document.getElementById("City").value;
    

    let specialCharacters = '!@#$%^&*()+=-[]{}|;:,\"<>?~`';

    let ratingNA = document.getElementById("N/A");
    let rating1 = document.getElementById("Rating1");
    let rating2 = document.getElementById("Rating2");
    let rating3 = document.getElementById("Rating3");
    let rating4 = document.getElementById("Rating4");
    let rating5 = document.getElementById("Rating5");


let ratingSelected = ratingNA.checked || rating1.checked || rating2.checked || rating3.checked || rating4.checked || rating5.checked;


    if (hotelName =="" ||hotelAddress == "" || city == "" || !ratingSelected) {
        alert("Please fill out all fields!");
        return false;
    }

    if (hotelName =="")
    {
        alert("Please fill Hotel Name");
        return false;
    }

    if (hotelName.length<3) {
        alert("Hotel Name must be greater than 3 letters");
        return false;
    }

    
    for (let i = 0; i < hotelName.length; i++) {
        if (specialCharacters.indexOf(hotelName[i]) !== -1) {
            alert("Hotel Name cannot contain special characters.");
            return false;
        }
    }
   
        return true;

    

}

function editroom() {
    let room = document.getElementById("room").value;
    let pricePerNight = document.getElementById("PricePerNight").value;
    let totalRooms = document.getElementById("TotalRooms").value;
    let availableRooms = document.getElementById("AvailableRooms").value;

    if (room =="" || pricePerNight =="" || totalRooms=="" || availableRooms=="") {
        alert("Please fill all the fields.");
        return false;
    }

   
    if (Number(availableRooms) > Number(totalRooms)) {
        alert("Available rooms can't be greater than total rooms.");
        return false;
    }

    return true;

}



function validateroom() {
    let room = document.getElementById("room").value;
    let pricePerNight = document.getElementById("PricePerNight").value;
    let totalRooms = document.getElementById("TotalRooms").value;
    let availableRooms = document.getElementById("AvailableRooms").value;

    if (room =="" || pricePerNight =="" || totalRooms=="" || availableRooms=="") {
        alert("Please fill all the fields.");
        return false;
    }

   
    if (Number(availableRooms) > Number(totalRooms)) {
        alert("Available rooms can't be greater than total rooms.");
        return false;
    }

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../Controller/addroomcheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("room=" + room + "&PricePerNight=" + pricePerNight + "&TotalRooms=" + totalRooms + "&AvailableRooms=" + availableRooms);
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let response = JSON.parse(this.responseText);
            let table = "";
            for (let i = 0; i < response.length; i++) {
                table += "<fieldset><ul>";
                table += "<li>Room: " + response[i].TypeName + "</li>";
                table += "<li>Price Per Night: " + response[i].PricePerNight + "</li>";
                table += "<li>Total Rooms: " + response[i].TotalRooms + "</li>";
                table += "<li>Available Rooms: " + response[i].AvailableRooms + "</li>";
                table += '</ul><a href="editroom.php?id=' + response[i].RoomTypeID + '"> EDIT </a></fieldset>';
            }
            document.getElementById("list").innerHTML = table;
        }
    };

}
