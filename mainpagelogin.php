<?php



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
  padding: 70px 30px;
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
    <form>
      <label>Username: </label> <br>
      <input type="text" name="username">
      <br>
      <br>
      <label>Password: </label> <br>
      <input type="text" name="password">
      <br>
      <br>
      <input type="submit" name="submit" value="Log In">
    </form>
  </div>
</body>

</html>
