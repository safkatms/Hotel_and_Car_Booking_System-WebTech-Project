function hotelSearch() {
    let city = document.getElementById('city').value;
    let checkin = document.getElementById('checkin').value;
    let checkout = document.getElementById('checkout').value;
    let room = document.getElementById('room').value;

    if (city == '' || checkin == '' || checkout == '' || room == '') {
        alert('Please fill in all the fields.');
        return false; 
    }

    
    let checkinDate = new Date(checkin);
    let checkoutDate = new Date(checkout);

    
    if (checkinDate >= checkoutDate) {
        alert('Check-out date must be after the check-in date.');
        return false; 
    }

    return true; 
}

function carSearch() {
    let pickup_location = document.getElementById('pickup_location').value;
    let pickup_date = document.getElementById('pickup_date').value;
    let dropoff_date = document.getElementById('dropoff_date').value;

    if (pickup_location == '' || pickup_date == '' || dropoff_date == '') {
        alert('Please fill in all the fields.');
        return false; 
    }

    
    let checkinDate = new Date(pickup_date);
    let checkoutDate = new Date(dropoff_date);

    
    if (checkinDate >= checkoutDate) {
        alert('Drop-off date must be after the Pick-up date.');
        return false; 
    }

    return true; 
}