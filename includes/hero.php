<section class="bg-gray-900 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Explore Our Software Solutions
        </h1>
        <p class="text-lg md:text-xl mb-8">
            Discover innovative solutions and materials tailored for various industries, crafted to drive success and
            efficiency.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
            <?php
            include('config/db.php');

         
            $sql = "SELECT * FROM solutions";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                        <img src="' . $row['image_url'] . '" alt="' . $row['title'] . '" class="mb-4 rounded-md w-full h-40 object-cover">
                        <h2 class="text-xl font-bold mb-2">' . $row['title'] . '</h2>
                        <p class="text-gray-400">' . $row['description'] . '</p>
                        <div class="flex items-center justify-between">
                        <span class="text-blue-500 mt-2 inline-block">' . $row['sector'] . '</span>
                        <a href="solution.php?id=' . $row['id'] . '" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition mt-4">
                            View Details
                        </a></div>
                    </div>';
                }
            } else {
                echo '<p>No solutions found.</p>';
            }
            ?>
        </div>

        <!-- <a href="solutions.php"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded transition mt-10">
            Browse More Solutions
        </a> -->
    </div>
</section>