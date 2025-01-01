<?php
session_start();
include('../config/db.php');


// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form input values
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];
    $sector = $_POST['sector'];

    // Prepare the SQL query to insert the data into the solutions table
    $sql = "INSERT INTO solutions (title, description, image_url, sector) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $title, $description, $image_url, $sector);

    // Execute the query
    if ($stmt->execute()) {
        echo "<p class='text-green-600'>Solution added successfully!</p>";
    } else {
        echo "<p class='text-red-600'>Error: " . $stmt->error . "</p>";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add New Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <?php include('admin-navbar.php'); ?>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Add New Solution</h1>

        <form action="add_solution.php" method="POST" class="space-y-4">
            <div>
                <label for="title" class="block font-semibold">Solution Title</label>
                <input type="text" id="title" name="title" class="w-full p-3 border border-gray-300 rounded" required>
            </div>

            <div>
                <label for="description" class="block font-semibold">Description</label>
                <textarea id="description" name="description" rows="5" class="w-full p-3 border border-gray-300 rounded"
                    required></textarea>
            </div>

            <div>
                <label for="image_url" class="block font-semibold">Image URL</label>
                <input type="text" id="image_url" name="image_url" class="w-full p-3 border border-gray-300 rounded"
                    required>
            </div>

            <div>
                <label for="sector" class="block font-semibold">Sector</label>
                <input type="text" id="sector" name="sector" class="w-full p-3 border border-gray-300 rounded" required>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-3 rounded hover:bg-blue-700">
                    Add Solution
                </button>
            </div>
        </form>
    </div>
</body>

</html>