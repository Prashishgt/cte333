<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Solutions | Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include('config/db.php'); ?>
    <?php include('includes/navbar.php'); ?>

    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                Upcoming Events and Activities
            </h1>
            <p class="text-lg md:text-xl mb-8 text-gray-600">
                Explore our latest events and promotional activities through our curated photo galleries.
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                <?php
            // Fetch gallery data from the database
            $sql = "SELECT * FROM galleries ORDER BY event_date ASC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <img src="' . $row['image_url'] . '" alt="' . $row['event_name'] . '" class="mb-4 rounded-md w-full h-40 object-cover">
                        <h2 class="text-xl font-bold mb-2 text-gray-800">' . $row['event_name'] . '</h2>
                        <p class="text-gray-600 mb-4">' . $row['description'] . '</p>
                        <span class="text-blue-500 font-medium">' . date("F j, Y", strtotime($row['event_date'])) . '</span>
                    </div>';
                }
            } else {
                echo '<p class="text-gray-600">No upcoming events or activities found.</p>';
            }
            ?>
            </div>
        </div>
    </section>
    <?php include("includes/event_interest.php") ?>
    <?php include('includes/footer.php'); ?>

</body>

</html>