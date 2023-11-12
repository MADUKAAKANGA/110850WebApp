
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bmp";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
include 'db_connection.php';

?>

