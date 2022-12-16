 <?php

$host="localhost";
$user="root";
$password="";
$db="demo";
$conn= mysqli_connect( $host, $user, $password, $db);
if(! $conn ) {
   die('Could not connect: ' . mysqli_error($conn));
}

echo 'Connected successfully<br>';

******************************************************









// echo 'data inserted<br>';
mysqli_close($conn);
?>





<!DOCTYPE html>
<html>
<head>
	<title> Login Form </title>
	
</head>
<body>
	<div class="container">

      <form method="post" action="process.php">
  <label for="name">name:</label>
  <input type="text" id="name" name="name"><br>
  <label for="email">email:</label>
  <input type="text" id="email" name="email"><br>
  <label for="gender">gender</label>
  <input type="radio" name="gender"  value="male"/>male
  <input type="radio" name="gender"  value="female"/>female
  <br>
  <input type="checkbox" id="receive emails" name="receive emails" value="yes">
  <label for="receive emails"> receive emails</label><br>

  <input type="submit" value="Submit">


		</form>
	</div>
</body>
</html>
<style>
body{
	margin: 0 auto;

	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;

	margin-top: 160px;
}



input[type="text"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}






</style>
