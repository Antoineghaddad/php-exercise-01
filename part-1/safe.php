

<html>
<body>
<?php
$username = "haddad";
$password = "password";
if($_POST["user-name"] == $username && $_POST["password"] == $password ){
    echo "<h1>Congradulations</h1>";
}


else{
header("Location:/home.php?error=1");
}
?>
</body>
</html>