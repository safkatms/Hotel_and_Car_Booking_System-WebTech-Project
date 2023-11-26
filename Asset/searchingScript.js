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
