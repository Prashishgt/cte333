<?php
include('../config/db.php');



session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM solutions WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $solution = $result->fetch_assoc();
} else {
    header("Location: manage_solutions.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];
    $sector = $_POST['sector'];

    $update_sql = "UPDATE solutions SET title = ?, description = ?, image_url = ?, sector = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("ssssi", $title, $description, $image_url, $sector, $id);

    if ($update_stmt->execute()) {
        header("Location: manage_solutions.php");
        exit;
    } else {
        echo "Error: " . $update_stmt->error;
    }

    $update_stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include('admin-navbar.php'); ?>

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Edit Solution</h1>

        <form action="" method="POST">
            <div class="mb-4">
                <label for="title" class="block text-lg font-medium">Title</label>
                <input type="text" id="title" name="title" class="w-full p-2 mt-1 border border-gray-300 rounded"
                    value="<?php echo htmlspecialchars($solution['title']); ?>" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-lg font-medium">Description</label>
                <textarea id="description" name="description" class="w-full p-2 mt-1 border border-gray-300 rounded"
                    required><?php echo htmlspecialchars($solution['description']); ?></textarea>
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-lg font-medium">Image URL</label>
                <input type="text" id="image_url" name="image_url"
                    class="w-full p-2 mt-1 border border-gray-300 rounded"
                    value="<?php echo htmlspecialchars($solution['image_url']); ?>" required>
            </div>

            <div class="mb-4">
                <label for="sector" class="block text-lg font-medium">Sector</label>
                <input type="text" id="sector" name="sector" class="w-full p-2 mt-1 border border-gray-300 rounded"
                    value="<?php echo htmlspecialchars($solution['sector']); ?>" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Update
                    Solution</button>
            </div>
        </form>
    </div>
</body>

</html>