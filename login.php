<?php
if($_POST)
{
    $server="localhost";
    $user="root";
    $pass="";
    $db="customer";
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn=mysqli_connect($server,$user,$pass,$db);
    $query="SELECT * from users where username='$username' and password='$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0)
    {
        session_start();
        $_SESSION['customer']='true';
        $_SESSION['uname']=$username;
        header('location:index.php');
    }
    else{

        echo "check username and password";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h1>login page</h1>
<form action="" method="post">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" value="login">
</form>
</body>
</html>
