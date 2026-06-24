<!DOCTYPE html>
<html>
<head>
    <title>Authentication Result</title>
</head>
<body>

<?php
$username = $_POST["username"];
$password = $_POST["password"];

$flag = false;

$file = fopen("users.txt", "r");

while (($line = fgets($file)) != false) {
    list($u, $p) = explode(",", trim($line));

    if ($username == $u && $password == $p) {
        $flag = true;
        break;
    }
}

fclose($file);

if ($flag)
    echo "<h2>Login Successful</h2>";
else
    echo "<h2>Invalid Username or Password</h2>";
?>

</body>
</html>