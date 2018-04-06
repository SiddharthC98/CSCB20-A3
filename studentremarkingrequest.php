<?php
  include ('database_connect.php');

  
?>


<html>
<head>
  <title>Student Remaking Request Page</title>
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
  <h1>Post a Remark Request</h1>

  <form action="/action_page.php">
    Content to Remark: <br>
    <input type="text" name="content">
    <br>
    Comments: <br>
    <input type="text" name="comments">
    <br><br>
    <input type="submit" value="Submit">
  </form>
  <br>
  <br>

  <form method="post" action="StudentWebpage.php">
    <input type="submit" name="sButton" value="<  Back"><br>
  </form>

</body>
</html>
