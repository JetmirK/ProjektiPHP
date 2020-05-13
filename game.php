<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2> Dice Roll </h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<br>
		<input type="button" value="Roll the Dice" onclick="window.location.reload()" style="padding:5px;" />
		<br><br>
		<p>
		<img src="images/<?php echo rand(1,6); ?>.png" style="width:90px; height: 95px;"/>
		</p>
		<br><br>
    	<p> <a href="game.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>