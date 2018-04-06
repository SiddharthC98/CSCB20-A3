<?php
  include ("database_connect.php");
  if($_SERVER["REQUEST_METHOD"] == "GET") {
    $q1 = $_GET['q1'];
    $q2 = $_GET['q2'];
    $q3 = $_GET['q3'];
    $q4 = $_GET['q4'];

    $sql = "INSERT INTO anonfeedback (q1,q2,q3,q4) VALUES ('$q1','$q2','$q3','$q3')";
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
  <title>Post Feedback Page</title>
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
  <h1>Post Feedback for the Professor</h1>

  <form action="student_postfeedback.php" method="get">
    <label><strong>What do you like about the instructor teaching?</strong></label><br>
    <input type="text" name="q1">
    <br>
    <br>
    <label><strong> What do you recommend the instructor to do to improve their teaching?</strong></label><br>
    <input type="text" name="q2">
    <br>
    <br>
    <label><strong>What do you like about the labs?</strong></label><br>
    <input type="text" name="q3">
    <br>
    <br>
    <label><strong>What do you recommend the lab instructors to do to improve their lab teaching?</strong></label><br>
    <input type="text" name="q4">
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
