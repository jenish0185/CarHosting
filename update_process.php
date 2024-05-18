<?php
// Check if form is submitted and car ID is provided
if (isset($_POST['car_id']) && is_numeric($_POST['car_id'])) {
    $car_id = $_POST['car_id'];
    
    // Retrieve form data
    $carName = $_POST['carName'];
    $carPrice = $_POST['carPrice'];
    
    // Check if an image file was uploaded
    if (isset($_FILES['carImage']) && $_FILES['carImage']['error'] === UPLOAD_ERR_OK) {
        // Get the uploaded image file
        $imageTmpName = $_FILES['carImage']['tmp_name'];
        
        // Read the image file content
        $imageData = file_get_contents($imageTmpName);
        
        // Encode the image data using base64
        $base64Image = base64_encode($imageData);
    } else {
        // If no image uploaded, set base64 data to null
        $base64Image = null;
    }
    
    // Database configuration
    $servername = "localhost";
    $username = "phpuser";
    $password = "Password123!";
    $dbname = "car_rental";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare and bind the SQL statement to update car details
    $stmt = $conn->prepare("UPDATE car_details SET carName = ?, carPrice = ?, carImage = ? WHERE id = ?");
	$stmt->bind_param("sdsi", $carName, $carPrice, $base64Image, $car_id);

    
    // Execute the update statement
    if ($stmt->execute()) {
        // Redirect back to the dashboard with a success message
        header("Location: admindash.php?success=1");
        exit();
    } else {
        // Handle errors
        echo "Error updating car details: " . $stmt->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid car ID!";
}
?>
