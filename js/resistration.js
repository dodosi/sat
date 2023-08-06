$(document).ready(function() {
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
            url: './api/createAccount.php',
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
