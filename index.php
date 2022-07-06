<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="style4.css">

</head>
<body>
	<form action="login.php" method="post">
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Summer Internship<br><h2>IIT KANPUR</h2></h1>
		<p><h2>Network Monitoring Tool<br>{Traffic Analyzer}<br><br>Made By:Sudeep</h2></p>
		</div>
	</div>
		<div class="right">
		<h5>Login</h5>
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<div class="inputs">
			<input type="text" name="uname" placeholder="user name">
			<br>
			<input type="password" name="password" placeholder="password">
		</div>		
			<br>
			<button>Login</button>
	</div>
	
</div>
	  </form>
</body>
</html>

