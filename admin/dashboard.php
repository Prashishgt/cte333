<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body>
    <?php include('admin-navbar.php'); ?>

    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Welcome to Admin Dashboard</h2>
        <nav>
            <ul>
                <li><a href="manage_inquiries.php" class="hover:text-blue-400">- Manage Inquiries</a></li>
                <li> <a href="manage_solutions.php" class="hover:text-blue-400">- Manage Solutions</a></li>

            </ul>
        </nav>
    </div>
</body>

</html>