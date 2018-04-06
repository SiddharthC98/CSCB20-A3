<?php

?>

<html>
<head>
  <title>Remark Requests</title>
  <style></style>
</head>

<body>
  <?php
    $servername = "localhost";
    $username = "SiddharthC";
    $password = "NightHawk038";
    $dbname = "cscb20a3";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT FeedbackNum,q1,q2,q3,q4 FROM anonfeedback";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Student: " . $row["utorid"] . ":" . "<br>" .
            "1) What do you like about the instructor teaching? "."<br>"."--". $row["q1"]. "<br>" .
            "2) What do you recommend the instructor to do to improve their teaching? "."<br>" ."--". $row["q2"]. "<br>" .
            "3) What do you like about the labs? "."<br>". "--" . $row["q3"]. "<br>".
            "4) What do you recommend the lab instructors to do to improve their lab teaching? "."<br>"."--" . $row["q4"] . "<br>" . "<br>";
        }
    } else {
        echo "No Feedback";
    }
  ?>

</body>

</html>
