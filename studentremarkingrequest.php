<?php
  include ("database_connect.php");
  if($_SERVER["REQUEST_METHOD"] == "GET") {
    $utorid = $_GET['utorid'];
    $content = $_GET['content'];
    $comments = $_GET['comments'];

    $sql = "INSERT INTO remarkrequests (utorid,content,comments) VALUES ('$utorid','$content','$comments')";
    $result = mysqli_query($db,$sql);

    if($result){
      echo "Posted";
    }else {
      echo "Posted";
    }
  }
?>

<html>
<head>
  <title>Student Remaking Request Page</title>
  <style>
    body {
      background-color: #c1d9ff;
    }

    h1 {
      font-family: Arial;
      text-decoration: underline;
    }

    label {
      font-family: Arial;
      font-size: 16px;
    }

    input[type=submit] {
      background-color: #1865e0;
      border: 0%;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
      font-size: 16px;
      font-family: arial;
      font-weight: bold;

    }
    input[type=submit]:hover {
      background-color: #4CAF50;
      color: black;
    }
  </style>
</head>

<body>
  <h1>Post a Remark Request</h1>

  <form action="studentremarkingrequest.php" method="get">
    <label><strong>UTORID:</strong></label><br>
    <input type="text" name="utorid">
    <br>
    <br>
    <label><strong>Item to Remark:</strong></label><br>
    <input type="text" name="content">
    <br>
    <br>
    <label><strong>Comments:</strong></label><br>
    <input type="text" name="comments">
    <br>
    <br>
    <input type="submit" value="Post" name="post">
    <br>

  </form>
  <form method="post" action="StudentWebpage.php">
    <input type="submit" value="<  Back"><br>
  </form>

</body>
</html>
