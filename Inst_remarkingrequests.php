<html>
<head>
  <title>Remark Requests</title>
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

    $sql = "SELECT utorid,content,comments FROM remarkrequests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<strong>UTORID:</strong> " . $row["utorid"] . "<br>" .
            "<strong>Content to be Remarked:</strong> ". $row["content"]. "<br>" .
            "<strong>Comments:</strong> ". $row["comments"]. "<br>"."<br>";
            }
    } else {
        echo "<strong>No Remark Requests</strong>"."<br>"."<br>";
    }
  ?>

  <form method="post" action="InstructorWebpage.php">
    <input type="submit" name="sButton" value="<  Back"><br>
  </form>

</body>

</html>
