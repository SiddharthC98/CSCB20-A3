<html>
<head>
</head>
<body>

<?php
include("database_connect.php");

$sql = "SELECT firstName, lastName, utorid FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "UTORID: " . $row["utorid"]. "Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</body>
</html>
