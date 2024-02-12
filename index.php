<?php
session_start();
if(!$_SESSION['customer'])
{

    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
   Welcome <?php echo $_SESSION['uname']; ?> 
   <a href="logout.php">Logout........</a>
</body>
</html>