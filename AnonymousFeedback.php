<html>
<head>
  <title>Anonymous Feedback Page</title>
  <style>
    body {
      background-color: #c1d9ff;
    }

    input[type=submit] {
      background-color: #1865e0;
      border: 0%;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
      font-size: 20px;
      font-family: arial;

    }

    input[type=submit]:hover {
      background-color: #4CAF50;
      color: black;

    }
  </style>
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
            echo "FEEDBACK " . $row["FeedbackNum"] . ":" . "<br>" .
            "1) What do you like about the instructor teaching? "."<br>"."--". $row["q1"]. "<br>" .
            "2) What do you recommend the instructor to do to improve their teaching? "."<br>" ."--". $row["q2"]. "<br>" .
            "3) What do you like about the labs? "."<br>". "--" . $row["q3"]. "<br>".
            "4) What do you recommend the lab instructors to do to improve their lab teaching? "."<br>"."--" . $row["q4"] . "<br>" . "<br>";
        }
    } else {
        echo "No Feedback";
    }
  ?>

  <form method="post" action="InstructorWebpage.php">
    <input type="submit" name="sButton" value="<  Back"><br>
  </form>
</body>
</html>
