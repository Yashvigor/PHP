<?php
$host = 'localhost';
$user = 'user';
$pass = '';
$db = 'mydatabase';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die('Connection Failed: ' . mysqli_connect_error());
}
echo 'Connected Successfully<br>';
$tableCreationQuery = "
CREATE TABLE IF NOT EXISTS simple (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
)";
if (!mysqli_query($conn, $tableCreationQuery)) {
    die('Error Creating Table: ' . mysqli_error($conn));
}
echo "Table is Ready.<br>";
$name = "Yashvi"; 


$stmt = $conn->prepare("INSERT INTO simple (name) VALUES (?)");
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("s", $name); 

if ($stmt->execute()) {
    echo "Data inserted successfully.<br>";
} else {
    echo "Error inserting data: " . $stmt->error;
}

$stmt->close();

?>
