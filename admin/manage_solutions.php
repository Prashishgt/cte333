<?php
session_start();
include('../config/db.php');

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}


$sql = "SELECT * FROM solutions";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include('admin-navbar.php');  ?>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Manage Solutions</h1>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-3 px-6 border-b">Title</th>
                    <th class="py-3 px-6 border-b">Sector</th>
                    <th class="py-3 px-6 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <tr>
                        <td class="py-3 px-6 border-b">' . $row['title'] . '</td>
                        <td class="py-3 px-6 border-b">' . $row['sector'] . '</td>
                        <td class="py-3 px-6 border-b">
                            <a href="edit_solution.php?id=' . $row['id'] . '" class="text-blue-500 hover:text-blue-700">Edit</a> | 
                            <a href="delete_solution.php?id=' . $row['id'] . '" class="text-red-500 hover:text-red-700" onclick="return confirm(\'Are you sure?\')">Delete</a>
                        </td>
                    </tr>';
                }
            } else {
                echo '<tr><td colspan="3" class="text-center py-3">No solutions found</td></tr>';
            }
            ?>
            </tbody>
        </table>

        <div class="mt-6">
            <a href="add_solution.php"
                class="inline-block bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">
                Add New Solution
            </a>
        </div>
    </div>
</body>

</html>