<?php

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex items-center justify-between">
        <div class="text-2xl font-bold">AI Solutions Admin</div>
        <div class="space-x-6">
            <a href="dashboard.php" class="hover:text-blue-400">Dashboard</a>
            <a href="manage_inquiries.php" class="hover:text-blue-400">Manage Inquiries</a>
            <a href="manage_solutions.php" class="hover:text-blue-400">Manage Solutions</a>
            <a href="logout.php" class="hover:text-red-400">Logout</a>
        </div>
    </div>
</nav>