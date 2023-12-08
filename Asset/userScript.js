function hotelSearch() {
  let city = document.getElementById("city").value;
  let checkin = document.getElementById("checkin").value;
  let checkout = document.getElementById("checkout").value;
  let room = document.getElementById("room").value;

  if (city == "" || checkin == "" || checkout == "" || room == "") {
    alert("Please fill in all the fields.");
    return false;
  }

  let checkinDate = new Date(checkin);
  let checkoutDate = new Date(checkout);

  if (checkinDate >= checkoutDate) {
    alert("Check-out date must be after the check-in date.");
    return false;
  }

  return true;
}

function sortHotels() {
  let city = document.getElementById("city").value;
  let checkin = document.getElementById("checkin").value;
  let checkout = document.getElementById("checkout").value;
  let room = document.getElementById("room").value;
  let sort = document.getElementById("sort").value;

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../Controller/sorthotel.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send(
    "city=" +
      city +
      "&checkin=" +
      checkin +
      "&checkout=" +
      checkout +
      "&room=" +
      room +
      "&sort=" +
      sort
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      let response = JSON.parse(this.responseText);
      let html = '<table border="1" style="width: 100%;">';
      html +=
        "<tr><th>Hotel Name</th><th>City</th><th>Room Type</th><th>Available Rooms</th><th>Price Per Night</th><th>Actions</th></tr>";

      response.forEach(function (hotel) {
        html += "<tr>";
        html += "<td>" + hotel.HotelName + "</td>";
        html += "<td>" + hotel.City + "</td>";
        html += "<td>" + hotel.TypeName + "</td>";
        html += "<td>" + hotel.AvailableRooms + "</td>";
        html += "<td>" + hotel.PricePerNight + "</td>";
        html +=
          '<td><a href="hotelbooking.php?id=' +
          hotel.RoomTypeID +
          '"><input type="button" value="Select"></a></td>';
        html += "</tr>";
      });

      html += "</table>";
      document.getElementById("results").innerHTML = html;
    }
  };
}

function hotelBooking() {
  let checkinDate = new Date(document.getElementById("CheckinDate").value);
  let checkoutDate = new Date(document.getElementById("CheckoutDate").value);
  let numberOfRooms = parseInt(document.getElementById("NumberofRoom").value);
  let availableRooms = parseInt(document.getElementById("Available").value);
  let pricePerNight = parseFloat(
    document.getElementById("PricePerNight").value
  );
  let totalPriceElement = document.getElementById("TotalPrice");

  // First, validate the inputs
  if (isNaN(numberOfRooms) || numberOfRooms <= 0) {
    alert("Please enter a positive number for the rooms.");
    return false;
  }
  if (checkoutDate <= checkinDate) {
    alert("Check-out date must be after the check-in date.");
    return false;
  }

  if (numberOfRooms > availableRooms) {
    alert("The number of rooms booked cannot exceed the number available.");
    return false;
  }

  // Calculate the number of nights
  let numberOfNights = (checkoutDate - checkinDate) / (1000 * 60 * 60 * 24);
  // Calculate the total price
  let totalPrice = numberOfNights * numberOfRooms * pricePerNight;

  // Update the total price element
  totalPriceElement.value = totalPrice.toFixed(2); // Rounds to two decimal places
}

function cancelHotelBooking() {
  let id = document.getElementById("bookingID").value;

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../Controller/hotelbookingcancel.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id=" + id);
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4) {
      if (this.status === 200) {
        alert("Booking cancelled successfully.");
      } else {
        console.error("HTTP error:", this.status);
      }
    }
  };
}

function carSearch() {
  let pickup_location = document.getElementById("pickup_location").value;
  let pickup_date = document.getElementById("pickup_date").value;
  let dropoff_date = document.getElementById("dropoff_date").value;

  if (pickup_location == "" || pickup_date == "" || dropoff_date == "") {
    alert("Please fill in all the fields.");
    return false;
  }

  let start = new Date(pickup_date);
  let end = new Date(dropoff_date);

  if (start >= end) {
    alert("Drop-off date must be after the Pick-up date.");
    return false;
  }

  return true;
}

function carBooking() {
  let pickupDate = document.getElementById("PickupDate").value;
  let dropoffDate = document.getElementById("DropoffDate").value;
  let dailyRate = parseFloat(document.getElementById("DailyRate").value);
  let totalPriceElement = document.getElementById("TotalPrice");

  // Convert the dates from string to Date objects
  let start = new Date(pickupDate);
  let end = new Date(dropoffDate);

  // Calculate the difference in milliseconds
  let difference = end - start;

  // Convert milliseconds to days (1 day = 24 hours * 60 minutes * 60 seconds * 1000 milliseconds)
  let numberOfDays = difference / (24 * 60 * 60 * 1000);

  // Calculate the total price
  let totalPrice = numberOfDays * dailyRate;

  // Update the TotalPrice element
  totalPriceElement.value = totalPrice; // Rounds to two decimal places

  if (start >= end) {
    alert("Drop-off date must be after the Pick-up date.");
    return false;
  }
}

function cancelCarBooking() {
  let id = document.getElementById("bookingID").value;

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../Controller/carbookingcancel.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id=" + id);
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4) {
      if (this.status === 200) {
        alert("Booking cancelled successfully.");
      } else {
        console.error("HTTP error:", this.status);
      }
    }
  };
}

function sortCars() {
  let pickupLocation = document.getElementById("pickup_location").value;
  let pickupDate = document.getElementById("pickup_date").value;
  let dropoffDate = document.getElementById("dropoff_date").value;
  let sort = document.getElementById("sort").value;

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../Controller/sortcar.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("pickup_location=" + pickupLocation + "&pickup_date=" +pickupDate +"&dropoff_date=" +dropoffDate + "&sort=" + sort);
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      let response = JSON.parse(this.responseText);
      let html = '<table border="1" style="width: 100%;">';
      html +=
        "<tr><th>Brand Name</th><th>Model</th><th>Year</th><th>Location</th><th>Price Per Day</th><th>Actions</th></tr>";

      response.forEach(function (car) {
        html += "<tr>";
        html += "<td>" + car.Barnd + "</td>";
        html += "<td>" + car.Model + "</td>";
        html += "<td>" + car.Year + "</td>";
        html += "<td>" + car.Location + "</td>";
        html += "<td>" + car.DailyRate + "</td>";
        html +=
          '<td><a href="carbooking.php?id=' +
          car.CarID +
          '"><input type="button" value="Select"></a></td>';
        html += "</tr>";
      });

      html += "</table>";
      document.getElementById("results").innerHTML = html;
    }
  };
}
