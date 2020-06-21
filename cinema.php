<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cars";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT fname, lname, birthday, gender, email, phone FROM cinema";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table><tr><th>first name</th><th>last name</th><th>Birthday</th><th>Gender</th><th>Email</th><th>Phone Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["birthday"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 