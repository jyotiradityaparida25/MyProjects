<?php
include('skilldb.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemname = $_POST['itemname'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bidding Option</title>
    <link rel="stylesheet" href="styles.css">
    <script>
    document.getElementById('biddingForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way
    
        const itemName = document.getElementById('itemName').value;
        const startingBid = document.getElementById('startingBid').value;
        const bidEndTime = document.getElementById('bidEndTime').value;
    
        // Here you would typically send this data to your server
        // For demonstration, we'll just log it to the console
        console.log('Item Name:', itemName);
        console.log('Starting Bid:', startingBid);
        console.log('Bid End Time:', bidEndTime);
    
        // Display a success message
        document.getElementById('message').innerText = 'Bidding option added successfully!';
        
        // Clear the form
        document.getElementById('biddingForm').reset();
    });</script>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
input[type="datetime-local"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

.message {
    margin-top: 20px;
    text-align: center;
    color: green;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Bidding Option</h1>
        <form id="biddingForm">
            <div class="form-group">
                <label for="itemName">Item Name:</label>
                <input type="text" id="itemName" name="itemName" required>
            </div>
            <div class="form-group">
                <label for="startingBid">Starting Bid ($):</label>
                <input type="number" id="startingBid" name="startingBid" min="0" required>
            </div>
            <div class="form-group">
                <label for="bidEndTime">Bid End Time:</label>
                <input type="datetime-local" id="bidEndTime" name="bidEndTime" required>
            </div>
            <button type="submit">Add Bidding Option</button>
        </form>
        <div id="message" class="message"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>