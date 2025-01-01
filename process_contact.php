<?php
include('config/db.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "<script>
            alert('Your inquiry has been submitted successfully!');
            window.location.href = 'contact.php'; // Redirect to the contact page
        </script>";
    } else {
        echo "<script>
            alert('An error occurred while submitting your inquiry: " . addslashes($stmt->error) . "');
            window.location.href = 'contact.php'; // Redirect to the contact page
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>