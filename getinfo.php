<html>
<head>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cscb20w18_h3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "SELECT , ,  FROM instructors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo ": " . $row[""]. " - Name: " . $row[""]. " " . $row[""]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</body>
</html>
