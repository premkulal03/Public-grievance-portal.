<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: user_login.html");
    exit();
}

include 'db_connection.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $zone = $_POST['zone'];
    $area = $_POST['area'];
    $landmark = $_POST['landmark'];
    $pincode = $_POST['pincode'];
    $date = $_POST['date'];
    $complaint = $_POST['complaint'];
    $user_id = $_SESSION['user_id'];

    $photo = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $photo = 'uploads/' . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    }

    $query = "INSERT INTO complaints (user_id, zone, area, landmark, pincode, date, complaint, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("isssssss", $user_id, $zone, $area, $landmark, $pincode, $date, $complaint, $photo);
    $stmt->execute();

    echo "Complaint registered successfully.";
}
?>
