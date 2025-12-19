<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Dashboard</title>
</head>
<body>
    <header>
        <h1>Public Grievance Portal</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section class="main-content">
        <h2>Register Complaint</h2>
        <form action="submit_complaint.php" method="POST" enctype="multipart/form-data">
            <label for="zone">Select Zone:</label>
            <select id="zone" name="zone" required>
                <option value="North Zone">North Zone</option>
                <option value="East Zone">East Zone</option>
                <option value="West Zone">West Zone</option>
                <option value="South Zone">South Zone</option>
                <option value="Central Zone">Central Zone</option>
                <option value="Yelahanka Zone">Yelahanka Zone</option>
				                <option value="Dasarahalli Zone">Dasarahalli Zone</option>
                <option value="Bommanahalli Zone">Bommanahalli Zone</option>
            </select><br><br>

            <label for="area">Area:</label>
            <input type="text" id="area" name="area" required><br><br>

            <label for="landmark">Landmark:</label>
            <input type="text" id="landmark" name="landmark" required><br><br>

            <label for="pincode">Pincode:</label>
            <input type="text" id="pincode" name="pincode" required><br><br>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br><br>

            <label for="complaint">Complaint Description:</label>
            <textarea id="complaint" name="complaint" required></textarea><br><br>

            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo"><br><br>

            <button type="submit">Submit Complaint</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2024 Public Grievance Portal</p>
    </footer>
</body>
</html>

