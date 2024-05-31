<?php
// Database connection
$servername = "localhost";
$username = "tannu";
$password = "7505047380";
$dbname = "system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT * FROM your_table_name";
$result = $conn->query($sql);

// Generate HTML content
echo "<html><head><link rel='stylesheet' href='styles.css'></head><body>";
if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["column1"] . "</td><td>" . $row["column2"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "</body></html>";

// Close connection
$conn->close();
?>
