<?php 

$link = mysqli_connect("localhost", "root", "root", "demo");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "INSERT INTO Movie(Name, Genre, date) VALUES ('Titanic', 'Drama', '1997')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>



































?>