<?php
session_start();
include('../config/db.php');

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM inquiries";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Inquiries</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>
    <?php include('admin-navbar.php'); ?>

    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Customer Inquiries</h2>
        <table class="w-full table-auto border-collapse border">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Message</th>
                    <th class="border px-4 py-2">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td class="border px-4 py-2"><?php echo $row['name']; ?></td>
                    <td class="border px-4 py-2"><?php echo $row['email']; ?></td>
                    <td class="border px-4 py-2"><?php echo $row['message']; ?></td>
                    <td class="border px-4 py-2"><?php echo $row['created_at']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>