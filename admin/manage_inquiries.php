<?php
session_start();
include('../config/db.php');

// Ensure the admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

// Delete an inquiry
if (isset($_GET['delete_id'])) {
    $inquiry_id = $_GET['delete_id'];

    $sql = "DELETE FROM inquiries WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $inquiry_id);

    if ($stmt->execute()) {
        echo "<script>alert('Inquiry deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
}

// Fetch all inquiries
$sql = "SELECT * FROM inquiries";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Inquiries</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">


    <?php include('admin-navbar.php'); ?>


    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-6">Manage Inquiries</h2>


        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-4">All Inquiries</h3>
            <?php if ($result->num_rows > 0) : ?>
            <table class="w-full text-left table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Message</th>

                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td class="px-4 py-2"><?php echo $row['id']; ?></td>
                        <td class="px-4 py-2"><?php echo $row['name']; ?></td>
                        <td class="px-4 py-2"><?php echo $row['email']; ?></td>
                        <td class="px-4 py-2"><?php echo substr($row['message'], 0, 50); ?>...</td>

                        <td class="px-4 py-2">
                            <a href="view_inquiry.php?id=<?php echo $row['id']; ?>"
                                class="text-blue-500 hover:text-blue-700">View</a> |
                            <a href="?delete_id=<?php echo $row['id']; ?>"
                                class="text-red-500 hover:text-red-700">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else : ?>
            <p>No inquiries found.</p>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>