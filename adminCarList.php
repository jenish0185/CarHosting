<div class="car-panel">
    <div class="car-image">
        <?php
        // Decode the base64 encoded image retrieved from the database
        $imageData = base64_decode($row['carImage']);
        // Output the image data
        echo '<img src="data:image/jpeg;base64,'.base64_encode($imageData).'" alt="'.$row['carName'].'">';
        ?>
    </div>
    
    <div class="car-details">
        <!-- Display car name -->
        <h3><?php echo $row['carName']; ?></h3>
        
    </div>
    
    <!-- Display car price, free cancellation, and update button -->
    <div class="price">
        <h4>Price for a day:</h4>
        <p class="number">Rs. <?php echo number_format($row['carPrice'], 2); ?></p>
        <!-- Link to update car details page -->
		<button class="update-btn" onclick="openUpdateForm(<?php echo $row['id']; ?>)">Update</button>
        <form id="deleteForm_<?php echo $row['id']; ?>" method="post" action="DeleteCar.php">
            <input type="hidden" name="car_id" value="<?php echo $row['id']; ?>">
            <button type="button" class="delete-btn" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</button>
        </form>
    </div>
</div>
<script>
    // Function to confirm deletion
    function confirmDelete(carId) {
        if (confirm("Are you sure you want to delete this car?")) {
            // If user confirms, submit the form asynchronously
            document.getElementById("deleteForm_" + carId).submit();
        }
    }
</script>
