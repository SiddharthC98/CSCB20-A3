<?php
   include("database_connect.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $mytype = mysqli_real_escape_string($db,$_POST['type']);

      $sql = "SELECT id FROM logininfo WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        header("Location: InstructorWebpage.php");

      }else {
         $error = "Your Login Name or Password is invalid! Check username, password, and/or user type.";
      }
   }
?>

<html>
  <head>
    <title>Login Page</title>
    <style>
      body {
        background: url(https://www.fjordtravel.no/wp-content/uploads/2017/12/2BCAF065-B3CE-4117-B538-4D972F14AF68-1-1024x682.jpg);
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        z-index: -1;
      }

      .login-box {
        width: 350px;
        height: 420px;
        background: rgba(0,0,0,0.5);
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 40px 30px;
      }

      h2 {
        text-align: center;
      }

      .login-box label {
        margin: 0;
        padding: 0;
      }

      .login-box input {
        width: 100%;
      }

      .login-box input[type="submit"] {
        width: 50%;
        border: none;
        outline: none;
        height: 40px;
        background: #1c8adb;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
        margin-top: 20px;
      }

      .login-box input[type="submit"]:hover {
        cursor: pointer;
        background: #39dc79;
        color: black;
      }
    </style>
  </head>

<body>
  <div class="login-box">
    <h2>Login</h2>
    <form action="" method="post">
      <label><strong>Username:</strong></label> <br>
      <input type="text" name="username">
      <br>
      <br>
      <label><strong>Password:</strong></label> <br>
      <input type="password" name="password">
      <br>
      <br>
      <label><strong>Type of User (Instructor/TA/Student):</strong></label> <br>
      <input type="radio" name="type" value="student" checked>Student<br>
      <input type="radio" name="type" value="professor">Professor<br>
      <input type="radio" name="type" value="TA">TA<br>
      <br>
      <input type="submit" value="Log In">
      <div style = "font-size:13px; color:white; margin-top:20px"><?php echo $error; ?></div>
    </form>
  </div>
</body>

</html>
