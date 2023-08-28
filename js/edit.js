function loadUserDetails(username=null){
 if(username){
    $.ajax({
        url: 'api/fetchUser.php',
        type: 'post',
        data: {username: username},
        dataType: 'json',
        success:function(response) { 
            console.log(response);
            $("#firstname").val(response.firstname);
            $("#lastname").val(response.lastname);
            $("#position").val(response.pasition);
            $("#username").val(response.username);

    }
   })
  }
}
function deleteUser(username){
    $.ajax({
        url: './api/deleteUser.php',
        type: 'POST',
        data: {
            username: username,
        },
        success: function(response) {
            // Handle response from PHP script
            $('#result').text(response);
           
            // Redirect to another page
            window.location.href = "users.php";

        }
    });
}

$(document).ready(function() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const username = urlParams.get('username');
    loadUserDetails(username);

    $('#registrationForm').submit(function(event) {
        event.preventDefault(); // Prevent form submission
      
        // Get form values
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var cpassword = $('#cpassword').val();
        var position = $('#position').val();
       // Send AJAX request to PHP script
        if(!validateForm(firstname,lastname,username,password,cpassword,position)){
          return;
        }
        $.ajax({
            url: './api/editAccount.php',
            type: 'POST',
            data: {
                firstname:firstname,
                lastname:lastname,
                username: username,
                password: password,
                position:position
                
            },
            success: function(response) {
                // Handle response from PHP script
                $('#result').text(response);
               
                // Redirect to another page
                window.location.href = "users.php";

            }
        });
    });
    $('#DeleteForm').submit(function(event) {
        event.preventDefault(); // Prevent form submission
        var username = $('#username').val();
        $.ajax({
            url: './api/delete.php',
            type: 'POST',
            data: {
                username: username,
              },
            success: function(response) {
                // Handle response from PHP script
                $('#result').text(response);
               
                // Redirect to another page
                window.location.href = "users.php";

            }
        });
    });
});
function validateForm(firstname,lastname,username,password,cpassword,position){
    if (firstname === '') {
        alert('First name is required');
        return false;
    }

    if (lastname === '') {
        alert('Last name is required');
        return false;
    }

    if (username === '') {
        alert('Username is required');
        return false;
    }

    if (password === '') {
        alert('Password is required');
        return false;
    }

    if (cpassword === '') {
        alert('Confirm password is required');
        return false;
    }

    if (password !== cpassword) {
        alert('Passwords do not match');
        return false;
    } 
    if (position==='') {
        alert('Position is required');
        return false;
    } 
  return true;
}
