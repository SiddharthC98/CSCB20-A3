<?php
  include('current_session.php');
?>

<html>
<head>
  <title>Student Page</title>
  <style>
    body {
      background-color: #c1d9ff;
    }

    #welcome {
      text-decoration: underline;
    }

    #sign_out {
      float: right;
      text-decoration: none;
    }

    #welcome, #sign_out {
      font-size: 30px;
      font-weight: bold;
      font-family: Arial;
      color: black
    }

    input[type=submit] {
      background-color: #1865e0;
      border: 0%;
      color: white;
      padding: 16px 32px;
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
  <span id="welcome">Welcome Student</span>
  <span id="sign_out"><a href = "index.php">Sign Out</a></span>

  <br>
  <br>

  <form method="post" action="">
    <input type="submit" name="sButton" value="View My Marks"><br>
  </form>

  <form method="post" action="">
    <input type="submit" name="sButton" value="Post Anonymous Feedback"><br>
  </form>

  <form method="post" action="studentremarkingrequest.php">
    <input type="submit" name="sButton" value="Post a Remark Request"><br>
  </form>

</body>
</html>
