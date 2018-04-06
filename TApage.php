<?php
  include('current_session.php');
?>

<html>
<head>
  <title>TA Page</title>
  <style>
    body {
      background-color: #e3eaf4;
    }

    #welcome {
      text-decoration: underline;
    }

    #sign_out {
      float: right;
    }

    #welcome, #sign_out {
      font-size: 30px;
      font-weight: bold;
      font-family: Arial;
    }

    .buttons {
      width: 350px;
      height: 420px;
      color: #fff;
      position: absolute;
      box-sizing: border-box;
    }

    .buttons input[type="submit"] {
      width: auto;
      border: none;
      outline: none;
      height: 40px;
      background: #1c8adb;
      color: #fff;
      font-size: 18px;
      border-radius: 20px;
      margin-top: 20px;
    }

    .buttons input[type="submit"]:hover {
      cursor: pointer;
      background: #39dc79;
      color: black;
    }
  </style>
</head>

<body>
  <span id="welcome">Welcome TA</span>
  <span id="sign_out"><a href = "index.php">Sign Out</a></span>

  <div class="buttons">
    <input type="submit" value="View Student Marks"> <br>
    <br>
    <input type="submit" value="View Remarking Requests"> <br>
    <br>
    <input type="submit" value="Edit Marks">
  </div>

</body>
</html>
