<?php 
// connecting to the MYSQL Server
$link = mysqli_connect("localhost", "root", "root", "demo");
 
 // connection check
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // insert new query in the database
$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//finsh and close connection
mysqli_close($link);
?>
