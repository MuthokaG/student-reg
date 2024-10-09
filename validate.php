<?php
// Database connection settings
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "form_submission";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form when POST request is made
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $linkedin = $_POST['linkedin'];
    $comments = $_POST['comments'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, linkedin, comments, gender) 
            VALUES ('$name', '$email', '$linkedin', '$comments', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Your Input:</h2>";
        echo $name . "<br>";
        echo strtolower($email) . "<br>";
        echo $linkedin . "<br>";
        echo $comments . "<br>";
        echo $gender . "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); // Close the database connection
?>
