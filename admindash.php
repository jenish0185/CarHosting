<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vroom - Car Rentals</title>  
      
    <style>

        /* Reset CSS */
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {
        font-family: Arial, sans-serif;
        }


        header {
        height: 200px;
        background-color: #7B2CF8;
        color: white;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .branding {
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        .vroom-text {
        font-family: 'meddon';
        font-size: 32px;
        margin-bottom: 5px;
        margin-top: -70px;
        }

        .slogan-text {
        font-family: 'anek bangla';
        margin-top: -15%;
        font-size: 15px;
        }

        .nav-links {
        display: flex;
        justify-content: space-around;
        background-color: #7B2CF8;
        }

        .nav-links a {
        font-size: 20px;
        font-weight: 500;
        font-family: "Anek Bangla";
        margin-top: 100px;
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        margin-right: 50px; /* Add margin between each link */
        }


        .currency-selector {
        display: flex;
        align-items: center;
        }

        .currency-btn {
        background-color: white;
        color: #7B2CF8;
        border: none;
        padding: 15px 25px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 20px;
        margin-top: -70px;
        }

        .profile-picture {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        margin-right: -100px;
        background-image: url('image.png'); /* Replace 'images.png' with your image path */
        background-size: cover;
        border: none; /* Remove the border */
        }


        .manage-btn {
        background-color: #ffffff;
        color: #7B2CF8;
        border: none;
        padding: 15px 25px;
        border-radius: 5px;
        cursor: pointer;
        }



        main {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        margin-top: 50px; /* Add a gap between header and main content */
        }

        .car-panel-wrapper {
        display: flex;
        justify-content: center;
        flex-direction: column; /* Change flex-direction to column */
        }

        .car-panel-wrapper h1 {
        margin-left: 120px;
        }


        .car-panel {
        margin-top: 50px;
        margin-left: 120px;
        width: 900px;
        display: flex;
        align-items: flex-start;
        background-color: white;
        border-radius: 20px;
        border: 2px solid #000000;
        padding: 20px;
        }



        .car-image {
        width: 40%;
        }

        .car-image img {
        width: 100%;
        border-radius: 10px;
        }

        .car-details {
        flex: 1;
        margin-left: 20px;
        }

        .car-details h3 {
        margin-top: 0;
        color: #000;
        font-family: "Anek Bangla";
        font-size: 32px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        }

        .car-specs {
        margin-bottom: 20px;
        }

        .car-spec {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
        }

        .car-spec img {
        width: 20px;
        margin-right: 5px;
        }

        .price {
        width: 30%;
        text-align: center;
        }

        .price h4 {
        margin-top: 0;
        color: #000000a8;
        }

        .price p.number {
        color: #000;
        font-family: "Anek Bangla";
        font-size: 32px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        }

        .free-cancel {
        color: #119F1F;
        font-family: "Anek Bangla";
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        }

        .container {
        display: flex;
        }

        .car-panel-wrapper {
        margin-top: 50px;
        width: 60%; /* Adjust as needed */
        /* Your existing styles */
        }

        .right-panel {
        position: absolute;
        top: 400px;
        right: 30px;
        width: 300px;
        height: 300px;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #000000;
        border-radius: 5%;
        margin-top: 20px; /* Adjust as needed */
        }

        .right-panel .wallet-content {
        margin-top: 20px; /* Add space above */
        margin-bottom: 20px; /* Add space below */
        line-height: 2; /* Adjust line-height as needed */
        }

        .earnings p {
        margin: 10px 0;
        }

        #hostButton {
        position: absolute;
        top: 280px; /* Adjust top position */
        right: 50px; /* Adjust right position */
        background-color: #4285F4;
        color: #ffffff;
        border: none;
        padding: 10px 20px; /* Adjust padding */
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px; /* Adjust font size */
        }

       /* Overlay styles */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
      backdrop-filter: blur(8px); /* Blurred effect */
      z-index: 1000; /* Ensure it's above other content */
      display: none; /* Hide initially */
    }

    /* Panel styles */
    .panel {
      width: 500px;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2000;
      border: 2px solid #000;
      padding: 20px;
      text-align: center;
      border-radius: 12px;
      background-color: #fff;
      display: none; /* Hide initially */
    }


        /* Container styles */
        .container {
        position: relative;
        z-index: 2000; /* Ensure it's above the overlay */
        padding: 20px; /* Add padding */
        }



        /* Styles for input and select elements */
        .panel input[type="text"],
        .panel select,
        .panel input[type="number"] {
        margin-bottom: 10px; /* Add bottom margin */
        width: calc(100% - 20px); /* Full width with padding */
        padding: 8px; /* Add padding */
        box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        .panel button {
        margin-top: 20px;
        }

        /* Adjustments for file input */
        .panel input[type="file"] {
        display: none; /* Hide the original file input */
        }

        /* Custom file upload styles */
        .file-upload {
        margin-top: 10px;
        position: relative;
        width: calc(100% - 20px);
        }

        .upload-btn {
        color: #333;
        text-decoration: underline;
        cursor: pointer;
        }

        .file-display {
        margin-top: 5px;
        }

        .file-display a {
        color: blue;
        text-decoration: none;
        }

        .button {
        background-color: #4285F4;
        color: #ffffff;
        border: none;
        padding: 20px 40px; /* Larger padding for bigger buttons */
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px; /* Increase font size */
        transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        .button:hover {
        background-color: #3367D6; /* Darker shade of blue on hover */
        }

        .update-btn {
        width: 150px;
        height: 50px;
        background-color: #119F1F;
        color: white; /* Set text color to white */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 50px; /* Add margin to the left */
        }

        /* Apply styles to anchor tag within .update-btn */
        .update-btn a {
        text-decoration: none; /* Remove underline */
        color: white; /* Set text color to white */
        }
		.delete-btn {
        width: 150px;
        height: 50px;
        background-color: red;
        color: white; /* Set text color to white */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 50px; /* Add margin to the left */
        }

        /* Apply styles to anchor tag within .update-btn */
        .delete-btn a {
        text-decoration: none; /* Remove underline */
        color: white; /* Set text color to white */
        }
        /* Update existing or add new CSS styles */
        .host-btn {
            position: absolute;
            top: 10px; /* Adjust the top position as needed */
            right: 10px; /* Adjust the right position as needed */
            z-index: 100; /* Ensure it's above other elements */
        }

          /* New styles for the contact panel */
      #contact {
        margin-top: 250px;
        margin-bottom: 0;
        height: 60vh; /* Adjust height as needed */
        background-color: #12042a; /* Set background color to black */
        color: #fff; /* Set text color to white */
        padding: 50px; /* Add padding */
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
      }

      /* Overlay Styles */
.update-overlay {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
    z-index: 1000; /* Sit on top */
}

.update-overlay-content {
    position: relative;
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 5px;
    width: 80%;
    max-width: 500px;
    top: 50px;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
}







    </style>
    
    
</head>
<body>
 
  <header>
    <!-- For header/logo  -->
    <div class="branding">
    <a href="index.php" class="vroom-text">
        <h1>Vroom</h1>
    </a>
    <p class="slogan-text"><a href="index.php">Drive, Explore, and Repeat</a></p>

    </div>
    <nav>
      <div class="nav-links">
        <a href="admindash.php">Car hostings</a>
        <a href="wallet.php">Wallet</a>
        <a href="inbox.php">Inbox</a>
        <a href="setting.php">Settings</a>

      </div>
    </nav>
    
    <div class="currency-selector">
      <button class="currency-btn">NPR</button>
      <div class="profile-picture"></div>
    </div>
    <a href="ManageCarList.php" class="manage-btn">Manage Cars</a>

    <button id="hostButton" class="host-btn" onclick="showPanels()">Host</button>
  </header>
    <main>

    
  <div class="car-panel-wrapper">
        <h1>Your Hosted Cars:</h1>
        <?php
        // Establish database connection
        $servername = "localhost";
        $username = "phpuser";
        $password = "Password123!";
        $dbname = "car_rental";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch car data from the database
        $sql = "SELECT * FROM car_details";
        $result = $conn->query($sql);

        // Output car panels
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                include 'adminCarList.php'; // Include the car panel template
            }
        } else {
            echo "No cars available";
        }

        $conn->close();
        ?>
    </div>

    <!-- Overlay -->
    <div class="overlay"></div>
        <form id="carForm" method="post" enctype="multipart/form-data" action="process_form.php">
        <!-- First Panel -->
        <div id="firstPanel" class="panel">
            <h2>Enter Car Details</h2>
            <input type="text" id="carName" name="carName" placeholder="Car Name"><br>
            <input type="number" id="carPrice" name="carPrice" placeholder="Price"><br>
    
            <!-- New image field -->
            <div class="file-upload">
                <label for="carImage" class="upload-btn">Upload Image</label>
                <input type="file" id="carImage" name="carImage" accept="image/*" class="upload-input" onchange="displayFileName()">
                <div id="image-display" class="file-display">Drag an image here or <a href="#">upload a file</a></div>
            </div>
    
            <div style="margin-bottom: 150px;"></div>
            <button onclick="goBack()" class="button" style="position: absolute; bottom: 10px; left: 10px;">Back</button>
            <button onclick="nextPanel()" class="button" style="position: absolute; bottom: 10px; right: 10px;">Next</button>
        </div>
    
        <!-- Second Panel -->
        <div id="secondPanel" class="panel">
            <h2>Review Car Details</h2>
            <div id="reviewDetails"></div>
    
            <div style="margin-bottom: 150px;"></div>
            <button onclick="goBack()" class="button" style="position: absolute; bottom: 10px; left: 10px;">Back</button>
            <button id="submitButton" class="button" style="position: absolute; bottom: 10px; right: 10px;" type="button" onclick="submitForm()">Submit</button>
        </div>
    </form>


    
      

    </main>
                
                <!-- Overlay container -->
<div id="update-overlay" class="update-overlay" style="display: none;">
    <div class="update-overlay-content">
        <span class="close-btn" onclick="closeUpdateForm()">&times;</span>
            <h2>Update Car Details</h2><br>
            <!-- Form to update car details -->
            <div class="form-container">
                <form id="updateCarForm" method="post" enctype="multipart/form-data" action="update_process.php">
                    <input type="hidden" name="car_id" id="updateCarId">
                    
                    <!-- Car Name -->
                    <label for="carName">Car Name:</label>
                    <input type="text" id="carName" name="carName"><br><br>
                
                    <!-- Car Price -->
                    <label for="carPrice">Price:</label>
                    <input type="text" id="carPrice" name="carPrice"><br><br>

                    <!-- Image Upload -->
                    <label for="carImage">Upload Image:</label><br>
                    <input type="file" id="carImage" name="carImage"><br><br>

                    <!-- Back and Submit buttons -->
                    <button id="submitButton" class="button" type="submit">Confirm</button>
                </form>
            </div>
    </div>
</div>

                
                
                
             
                
                
       <script>
           // Function to show the initial panel and overlay
      function showPanels() {
        // Show overlay
        document.querySelector('.overlay').style.display = 'block';
        // Show first panel
        document.getElementById("firstPanel").style.display = "block";
      }

            // Function to go back to the previous panel
            function goBack() {
                var currentPanel = document.querySelector('.panel[style*="display: block"]');
                var previousPanel = currentPanel.previousElementSibling;

                // If the current panel is the first panel, hide the overlay and return to the default page
                if (currentPanel.id === "firstPanel") {
                    document.querySelector('.overlay').style.display = 'none';
                    window.location.href = "admindash.php"; // Redirect to the default page
                } else {
                    // Otherwise, just hide the current panel and show the previous one
                    currentPanel.style.display = 'none';
                    previousPanel.style.display = 'block';
                }

                // Prevent form submission
                event.preventDefault();
            }

            // Function to display the filename when an image is selected
            function displayFileName() {
                const fileInput = document.getElementById('carImage');
                const fileName = fileInput.files[0].name;
                const imageDisplay = document.getElementById('image-display');
                imageDisplay.innerHTML = fileName;
            }

            // Function to transition to the next panel
            function nextPanel() {
                // Display review details in the second panel
                displayReviewDetails();
                // Show the second panel and hide the first panel
                document.getElementById("secondPanel").style.display = "block";
                document.getElementById("firstPanel").style.display = "none";
                // Prevent form submission
                event.preventDefault();
            }

            // Function to display review details in the second panel
            function displayReviewDetails() {
                var reviewDetails = document.getElementById("reviewDetails");
                reviewDetails.innerHTML = "";
                var carName = document.getElementById("carName").value;
                var carPrice = document.getElementById("carPrice").value;
                var carImage = document.getElementById("carImage").files[0]; // Get the uploaded image file
                var reader = new FileReader(); // Create a new FileReader object

                // Read the uploaded image file as a data URL
                reader.readAsDataURL(carImage);

                // Define the onload function for the FileReader
                reader.onload = function () {
                    var imageDataUrl = reader.result; // Get the data URL representing the image
                    var reviewText = `
                        <p><strong>Car Name:</strong> ${carName}</p>
                        <p><strong>Price:</strong> ${carPrice}</p>
                        <img src="${imageDataUrl}" alt="Car Image" style="max-width: 100%; height: auto;">
                    `;
                    reviewDetails.innerHTML = reviewText; // Display the review details with the image
                };
            }

            // Function to submit the form
            function submitForm() {
                // Disable the submit button to prevent multiple submissions
                document.getElementById("submitButton").disabled = true;
                // Validate first panel fields
                if (!validateFirstPanel()) {
                    alert("Please fill out all required fields in the first panel.");
                    // Re-enable the submit button if validation fails
                    document.getElementById("submitButton").disabled = false;
                    return;
                }
                // Serialize form data
                var formData = new FormData(document.getElementById("carForm"));
                // Manually handle checkbox values in the second panel
                var checkboxes = document.querySelectorAll('#secondPanel input[type="checkbox"]');
                checkboxes.forEach(function(checkbox) {
                    formData.append(checkbox.name, checkbox.checked ? "1" : "0");
                });
                // Send fetch request
                fetch("process_form.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Network response was not ok");
                    }
                    return response.text();
                })
                .then(data => {
                    console.log(data);
                    // Re-enable the submit button after the request is completed
                    document.getElementById("submitButton").disabled = false;
                    // Redirect to the default page after successful submission
                    goBackToDefaultPage();
                })
                .catch(error => {
                    console.error("Fetch error:", error);
                    // Re-enable the submit button if an error occurs
                    document.getElementById("submitButton").disabled = false;
                });
            }

// Function to go back to the default page and hide overlay
        function goBackToDefaultPage() {
            // Hide the overlay
            document.querySelector('.overlay').style.display = 'none';
            
            // Redirect to the default page
            window.location.href = "admindash.php";
        }
		function validateFirstPanel() {
    		// Get the values of the car name and price fields
    		var carName = document.getElementById("carName").value.trim();
    		var carPrice = document.getElementById("carPrice").value.trim();

    		// Check if either field is empty
    		if (carName === '' || carPrice === '') {
       		 // If any field is empty, return false to indicate validation failure
       		 return false;
    		}

   		 // If all fields are filled out, return true to indicate validation success
    	return true;
		}

		function openUpdateForm(carId) {
    // Update the form action with the car ID
    var overlay = document.getElementById('update-overlay');
    var carForm = document.getElementById('updateCarForm');
    var carNameInput = document.getElementById('carName');
    var carPriceInput = document.getElementById('carPrice');
    var carIdInput = document.getElementById('updateCarId');
    
    // Fetch car details using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'getCarDetails.php?car_id=' + carId, true);
    xhr.onload = function () {
        if (this.status == 200) {
            var carDetails = JSON.parse(this.responseText);
            carNameInput.value = carDetails.carName;
            carPriceInput.value = carDetails.carPrice;
            carIdInput.value = carId;
        } else {
            alert('Failed to fetch car details.');
        }
    };
    xhr.send();
    
    // Show the overlay
    overlay.style.display = 'block';
}

function closeUpdateForm() {
    // Hide the overlay
    var overlay = document.getElementById('update-overlay');
    overlay.style.display = 'none';
}

function confirmDelete(carId) {
    if (confirm("Are you sure you want to delete this car?")) {
        // If user confirms, submit the form asynchronously
        document.getElementById("deleteForm_" + carId).submit();
    }
}



        </script>

  
  
  
 
 
</body>
</html>
