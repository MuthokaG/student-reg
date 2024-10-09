<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "student_registration";
// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $student_id = $_POST['id'];
    $gender = $_POST['gender'];
    // Insert data into the students table
    $sql = "INSERT INTO students (student_name, student_id, gender) VALUES ('$name', '$student_id', '$gender')";

    if ($conn->query($sql) === TRUE) {
        if ($gender == 'male') {
            echo "<p style='color:blue;'>Hello $name, welcome to IT405.</p>";
        } else {
            echo "<p style='color:red;'>Hello $name, welcome to IT405.</p>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close(); // Close the database connection
?>
