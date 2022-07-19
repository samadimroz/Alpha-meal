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
<body bgcolor=grey>
        <h1 align=center>Hello, <?php echo $_SESSION['name']; ?></h1>
        <h1 align=center> You are logged in</h1>
        <a href="menu.php" text-align=center>Go to menu page</a>
</body>
</html>
<?php 
}
else{
     header("Location: menucart.php");
     exit();
}
 ?>