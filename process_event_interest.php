<?php
include('config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event_id = $_POST['event_id'];
    $message = $_POST['message'];

    $sql = "INSERT INTO event_interests (name, email, event_id, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $name, $email, $event_id, $message);

    if ($stmt->execute()) {
        echo "<script>
            alert('Your interest in the event has been recorded successfully!');
            window.location.href = 'event_interest.php'; // Redirect to the event interest form page
        </script>";
    } else {
        echo "<script>
            alert('An error occurred while submitting your interest: " . addslashes($stmt->error) . "');
            window.location.href = 'event_interest.php'; // Redirect to the event interest form page
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>