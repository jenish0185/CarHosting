<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Connect to your MySQL database
    $servername = "localhost";
    $username = "phpuser";
    $password = "Password123!";
    $dbname = "car_rental";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert form data into database
    $sql = "INSERT INTO car_details (carName, carPrice, carImage) VALUES (?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $carName, $carPrice, $carImage);

    // Set parameters and execute the statement
    $carName = $_POST["carName"];
    $carPrice = $_POST["carPrice"];
    $carImage = base64_encode(file_get_contents($_FILES["carImage"]["tmp_name"]));

    // Execute the statement
    if ($stmt->execute()) {
        // Close statement and database connection
        $stmt->close();
        $conn->close();

        // Redirect to the admin dashboard after successful submission
        header("Location: admindash.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted, redirect or display an error message
    echo "Form submission error: No data received.";
}
?>
