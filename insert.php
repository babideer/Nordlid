<?php
$link = mysqli_connect("a-eileen.dk.mysql","a_eileen_dk_portfoliodb","muffin12","a_eileen_dk_portfoliodb");

//connection check
if($link===false){
    die("ERROR: Could not connect" . mysqli_connect_error());
}

//escape user inputs 
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);

//attempt insert query execution
$sql = "INSERT INTO register (fname, email, phone) VALUES('$fname','$email','$phone')";
if(mysqli_query($link,$sql)){
    echo "Tak for din registrering!";
} else{
    echo "ERROR: Could not execute $sql. " .mysqli_error($link);
}

//close connection
mysqli_close($link);
?>
<html>
    <head>

    </head>
    <body><div id="center_button">    
        <button onclick="location.href='index.html'">Tilbage til siden</button>
    </div>
</body>
</html>
