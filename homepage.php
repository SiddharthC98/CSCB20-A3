<?php
   include('current_session.php');
?>

<html>
   <head>
      <title>Welcome </title>
   </head>

   <body>
      <h1>Welcome <?php echo $login_session; ?></h1>
      <h2><a href = "logout.php">Sign Out</a></h2>

      <form method="post" action="fetch.php">
		  Get list of students<br>
  	<input type="submit" name="sButton"><br>
	</form>
   </body>

</html>