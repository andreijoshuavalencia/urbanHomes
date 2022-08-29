<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>

     <form class="proceed" method="get" action="index.html" width=200px>
          <button class="btn-login" type="submit">Proceed to UrbanHomes Agency</button>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>