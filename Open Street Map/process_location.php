<?php
// Retrieve latitude and longitude from form submission
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Connect to MySQL database
$conn = new mysqli("localhost", "root", "", "google");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert latitude and longitude into the database
$sql = "INSERT INTO locations (latitude, longitude) VALUES ('$latitude', '$longitude')";
if ($conn->query($sql) === TRUE) {
    echo "Location saved successfully";
    header("Location: display_map.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
