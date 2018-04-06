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
    include ('database_connect.php');

    $sql = "SELECT FeedbackNum,q1,q2,q3,q4 FROM anonfeedback";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<strong>FEEDBACK</strong> " . $row["FeedbackNum"] . ":" . "<br>" .
            "<strong>1)</strong> What do you like about the instructor teaching? "."<br>"."--". $row["q1"]. "<br>" .
            "<strong>2)</strong> What do you recommend the instructor to do to improve their teaching? "."<br>" ."--". $row["q2"]. "<br>" .
            "<strong>3)</strong> What do you like about the labs? "."<br>". "--" . $row["q3"]. "<br>".
            "<strong>4)</strong> What do you recommend the lab instructors to do to improve their lab teaching? "."<br>"."--" . $row["q4"] . "<br>" . "<br>";
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
