<!DOCTYPE html>
<html>
<head>
    <title>Display Information</title>
</head>
<body>

<?php
$name = $_POST["name"];
$email = $_POST["email"];

echo "<h2>Entered Information</h2>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";

$data = "Name: $name, Email: $email\n";

$file = fopen("data.txt", "a");
fwrite($file, $data);
fclose($file);

echo "<br>Data stored successfully in data.txt";
?>

</body>
</html>