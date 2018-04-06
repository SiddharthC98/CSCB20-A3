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
    include ("database_connect.php");

    $sql = "SELECT utorid,content,comments FROM remarkrequests";
    $result = $db->query($sql);

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

  <form method="post" action="TApage.php">
    <input type="submit" name="sButton" value="<  Back"><br>
  </form>

</body>

</html>
