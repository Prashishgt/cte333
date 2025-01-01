<?php
include('config/db.php'); // Include database connection

if (isset($_GET['id'])) {
    $solution_id = $_GET['id'];

    // Fetch solution details
    $sql = "SELECT * FROM solutions WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $solution_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $solution = $result->fetch_assoc();
    } else {
        echo "Solution not found!";
        exit;
    }

    // Fetch related reviews for this solution
    $reviews_sql = "SELECT * FROM reviews WHERE solution_id = ? ORDER BY created_at DESC";
    $reviews_stmt = $conn->prepare($reviews_sql);
    $reviews_stmt->bind_param("i", $solution_id);
    $reviews_stmt->execute();
    $reviews_result = $reviews_stmt->get_result();

    // Fetch case study metadata
    $metadata_sql = "SELECT * FROM case_studies WHERE solution_id = ?";
    $metadata_stmt = $conn->prepare($metadata_sql);
    $metadata_stmt->bind_param("i", $solution_id);
    $metadata_stmt->execute();
    $metadata_result = $metadata_stmt->get_result();
    $metadata = $metadata_result->fetch_assoc();

    $reviews_stmt->close();
    $metadata_stmt->close();
    $stmt->close();
    $conn->close();
} else {
    echo "No solution ID provided!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($solution['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php include('includes/navbar.php'); ?>

    <div class="container mx-auto px-4 py-10">
        <!-- Solution Image -->
        <div class="mb-8">
            <img src="<?= htmlspecialchars($solution['image_url']) ?>" alt="<?= htmlspecialchars($solution['title']) ?>"
                class="w-full h-80 object-cover rounded-lg shadow-md">
        </div>

        <!-- Solution Details -->
        <h1 class="text-3xl font-bold"><?= htmlspecialchars($solution['title']) ?></h1>
        <p class="text-lg text-gray-600 mt-4"><?= nl2br(htmlspecialchars($solution['description'])) ?></p>
        <p class="text-gray-500 mt-2">Sector: <?= htmlspecialchars($solution['sector']) ?></p>
        <p class="text-gray-500 mt-2">Last Updated: <?= htmlspecialchars($solution['updated_at']) ?></p>

        <!-- Case Study Metadata -->
        <div class="mt-10">
            <h2 class="text-2xl font-semibold">Case Study</h2>
            <p class="text-lg"><?= nl2br(htmlspecialchars($metadata['case_study'])) ?></p>
        </div>

        <!-- Reviews Section -->
        <div class="mt-10">
            <h2 class="text-2xl font-semibold">Client Reviews</h2>

            <?php if ($reviews_result->num_rows > 0) : ?>
            <div class="mt-6 space-y-6">
                <?php while ($review = $reviews_result->fetch_assoc()) : ?>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                    <p class="text-yellow-400 mb-2"><?= str_repeat('⭐', $review['rating']) ?></p>
                    <p class="font-semibold text-white"><?= htmlspecialchars($review['name']) ?></p>
                    <p class="text-gray-400 mt-2"><?= nl2br(htmlspecialchars($review['review'])) ?></p>
                    <p class="text-gray-500 mt-4 text-sm"><?= $review['created_at'] ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
            <p class="text-gray-400">No reviews yet. Be the first to leave a review!</p>
            <?php endif; ?>
        </div>

        <!-- Feedback Form -->
        <div class="mt-10">
            <h2 class="text-2xl font-semibold">Provide Feedback</h2>
            <form action="solution.php?id=<?= $solution_id ?>" method="POST" class="mt-4">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Your Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Your Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="feedback" class="block text-gray-700">Your Feedback</label>
                    <textarea id="feedback" name="feedback" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md">Submit Feedback</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>

</html>