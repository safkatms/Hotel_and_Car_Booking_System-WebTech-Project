function validateBan() {
    let username = document.getElementById('username').value;
    

    let banRadio = document.getElementById('ban');
    let unbanRadio = document.getElementById('unban');

    let banstatus = '';
    if (banRadio.checked) {
        banstatus = banRadio.value;
    } else if (unbanRadio.checked) {
        banstatus = unbanRadio.value;
    }

    let data = JSON.stringify({
        username: username,
        banstatus: banstatus
    });

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/ownerbancheckjs.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('data='+data);

    xhttp.onreadystatechange = function()
     {
        if (this.readyState == 4 && this.status == 200) 
        {
            let response = JSON.parse(this.responseText);
            alert(response.message);
            return true;
        }
    };
    
  
    
}
