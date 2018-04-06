<html>
<head>
  <title>Marks Page</title>
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

    $sql = "SELECT * FROM marks";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<strong>UTORID:</strong> " . $row["utorid"] . "<br>" .
            "<strong>Quiz 1:</strong> ". $row["quiz1"]. "<br>" .
            "<strong>Quiz 2:</strong> ". $row["quiz2"]. "<br>".
            "<strong>Quiz 3:</strong> ". $row["quiz3"]. "<br>" .
            "<strong>Assignment 1:</strong> ". $row["assignment1"]. "<br>".
            "<strong>Assignment 2:</strong> ". $row["assignment2"]. "<br>" .
            "<strong>Assignment 3:</strong> ". $row["assignment3"]. "<br>".
            "<strong>Midterm:</strong> ". $row["midterm"]. "<br>" .
            "<strong>Final Exam:</strong> ". $row["finalExam"]. "<br>".
            "<strong>Practicals:</strong> ". $row["practical"]. "<br>" .
            "<strong>Attendance:</strong> ". $row["attendance"]. "<br>".
            "<strong>Total:</strong> ". $row["total"]. "<br>"."<br>";
        }
    } else {
        echo "No marks to display";
    }
  ?>

  <form method="post" action="InstructorWebpage.php">
    <input type="submit" name="sButton" value="<  Back"><br>
  </form>
</body>
</html>
