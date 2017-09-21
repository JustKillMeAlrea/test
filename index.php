<?php
//PHP Assignment 3
//https://www.itecdigital.org.uk/2016/460494/index.php
session_start();

$username = 'username'
$password = 'password';

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if( $password == $_POST['password'] AND $username == $_POST['username']) {
        $_SESSION['username'] = $_POST['username'];
}else {
        print "Error - Wrong username or password!";
}
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php if($_SESSION['username']): ?>
            <p>You are logged in as <?=$_SESSION['username']?></p>
            <p><a href="?logout=1">Logout</a></p>
        <?php else: ?>
        <form name="login" action="" method="post">
            Username:  <input type="text" name="username" value="" /><br/>
            Password:  <input type="password" name="password" value="" /><br/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    <?php endif; ?>
    </body>
</html>