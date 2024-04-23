<html>
<?php

echo 'Versão Atual do PHP: ' . phpversion() . "<br /><br />";
$host = "mysql";
$dbname = "calize";
$username = "rodrigo";
$password = "rod123";

try {

    $conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);    
    $resultado = $conn->query('SET SQL_BIG_SELECTS=1;');

    echo "<br /> Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br />";
}
?>

</html>