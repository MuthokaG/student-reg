<?php
// Define the array of days in a week
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

// Use a for loop to print for 4 weeks
for ($week = 1; $week <= 4; $week++) {
    echo "Week $week:<br>";
    echo "<ul>"; // Start an unordered list
    // Iterate through the days array
    for ($i = 0; $i < count($days); $i++) {
        echo "<li>$days[$i]</li>";
    }
    echo "</ul><br>"; // End the unordered list
}
?>
