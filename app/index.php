<html>
<?php

echo 'Versão Atual do PHP: ' . phpversion() . "<br />";

$servername = "127.0.0.1";
$username = "root";
$password = "TestCoalize";

try {

    $conn = new PDO("mysql:host=127.0.0.1;dbname=coalize;port=3306;", $username, $password);
    // set the PDO error mode to exception

    echo "<br /> Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

</html>