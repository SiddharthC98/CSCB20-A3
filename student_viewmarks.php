<?php
  include ("current_session.php");

  $sql1 = "SELECT * FROM courseWork";
  $result1 = mysqli_query($db,$sql1);

  $header = "";

  if ($result1->num_rows >0) {
    while ($row = $result1->fetch_assoc()) {
          $header = $header . '<div class="divTableCell">'. $row["assignment"] . '</div>';
    }
  }

  $sql = "SELECT * FROM marks WHERE utorid = " . "'" . $_SESSION['myusername'] . "'" . ";" ;
  $result = mysqli_query($db,$sql);
  $quiz1 = "hi";
  $quiz2 = $quiz3 = "";
  $assignment1 = $assignment2 = $assignment3 = "";
  $midterm = $finalExam = $practical = $attendance = "";

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $quiz1 = $row["quiz1"];
      $quiz2 = $row['quiz2'];
      $quiz3 = $row['quiz3'];
      $assignment1 = $row["assignment1"];
      $assignment2 = $row["assignment2"];
      $assignment3 = $row["assignment3"];
      $midterm = $row["midterm"];
      $finalExam = $row["finalExam"];
      $practical = $row["practical"];
      $attendance = $row["attendance"];
      $total = $row["total"];
    }
  }

  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);





?>


<html>
<head>
  <title>Marks Page</title>
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

    /* DivTable.com */
    .divTable{
    	display: table;
    	width: 100%;
    }
    .divTableRow {
    	display: table-row;
    }
    .divTableHeading {
    	background-color: #EEE;
    	display: table-header-group;
    }
    .divTableCell, .divTableHead {
    	border: 1px solid #999999;
    	display: table-cell;
    	padding: 3px 10px;
    }
    .divTableHeading {
    	background-color: #EEE;
    	display: table-header-group;
    	font-weight: bold;
    }
    .divTableFoot {
    	background-color: #EEE;
    	display: table-footer-group;
    	font-weight: bold;
    }
    .divTableBody {
    	display: table-row-group;
    }

  </style>
</head>

<body>
  <h2> Grades </h2>
  <div class="divTable" style="border: 2px solid #000;">
  <div class="divTableBody">
  <div class="divTableRow">
  <div class="divTableCell">UserName</div>
  <?php echo $header; ?>
  </div>
  <div class="divTableRow">
  <div class="divTableCell"> <?php echo $_SESSION['myusername']; ?> </div>
  <div class="divTableCell"><?php echo $quiz1;?></div>
  <div class="divTableCell"><?php echo $quiz2;?></div>
  <div class="divTableCell"><?php echo $quiz3;?></div>
  <div class="divTableCell"><?php echo $assignment1;?></div>
  <div class="divTableCell"><?php echo $assignment2;?></div>
  <div class="divTableCell"><?php echo $assignment3;?></div>
  <div class="divTableCell"><?php echo $midterm;?></div>
  <div class="divTableCell"><?php echo $finalExam;?></div>
  <div class="divTableCell"><?php echo $practical;?></div>
  <div class="divTableCell"><?php echo $attendance;?></div>
  <div class="divTableCell"><?php echo $total;?></div>
  </div>
  </div>
  </div>
  <!-- DivTable.com -->

  <form method="post" action="StudentWebpage.php">
    <input type="submit" name="sButton" value="<  Back"><br>
  </form>
</body>
</html>
