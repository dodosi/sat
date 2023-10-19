$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault(); // Prevent form submission

        // Get form values
        var username = $('#username').val();
        var password = $('#password').val();
        localStorage.setItem('username',username);
       // Send AJAX request to PHP script
        $.ajax({
            url: './api/login.php',
            type: 'POST',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                var myres=JSON.parse(response);
                //console.log(myres)
                var username=myres.username;
                var position=myres.position;
                // // Handle response from PHP script
                // //$('#result').text(response);
                localStorage.setItem('username',username);
                localStorage.setItem('position',position);
                localStorage.setItem('group',position);
                localStorage.setItem('questionaire',position+'.json');
                // // Redirect to another page
                if(position==='ADMIN'){
                    window.location.href = "./users.php";  
                }else{
                    window.location.href = "./index.html";
                }
                

            }
        });
    });
});
