<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Movie.Movie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
            echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Genre</th>";
                echo "<th>Date</th>";
            echo "</tr>";
    while($row = $result->fetch_assoc()) {
          echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Genre'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
            echo "</tr>";
    }
    echo "</table>";

} else {
    echo "0 results";
}

?>

