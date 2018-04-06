<?php
  include ("database_connect.php");

  $username = $_POST['username'];
  $password = $_POST['password'];
  $user_type = $_POST['user_type'];

  $sql = "INSERT INTO logininfo (username,password,type) VALUES ('$username','$password','$user_type')";

  mysqli_query($conn,$sql);

  if(!mysqli_query($db,$sql)) {
    $result = "Not Inserted";
  }else {
    $result = "Inserted";
  }
?>

<html>
<head>
  <title>Register Page</title>
  <style>
    body {
      background-color: #c1d9ff;
    }

    h1 {
      text-decoration: underline;
      font-family: Arial;
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
  <h1>Registration</h1>

  <form action="register.php" method="post">
    <label><strong>Username:</strong></label><br>
    <input type="text" name="username">
    <br>
    <br>
    <label><strong>Password:</strong></label><br>
    <input type="text" name="password">
    <br>
    <br>
    <label><strong>Enter User(Instructor/TA/Student):</strong></label><br>
    <input type="text" name="user_type">
    <br>
    <br>
    <input type="submit" value="Submit" name="register">
  </form>

  <form method="post" action="index.php">
    <input type="submit" name="backbutton" value="< Back"><br>
  </form>

</body>
</html>
