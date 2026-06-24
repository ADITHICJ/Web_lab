<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Check</title>
</head>
<body>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];

    if ($num <= 1) {
        echo "<p>$num is not a prime number.</p>";
    } else {
        $isPrime = true;

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo "<p>$num is a prime number.</p>";
        } else {
            echo "<p>$num is not a prime number.</p>";
        }
    }
}
?>

</body>
</html>