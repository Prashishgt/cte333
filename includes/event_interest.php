<?php include('config/db.php'); ?>
<section class="bg-gray-100 py-20">
    <div class="container mx-auto px-4 max-w-2xl">
        <h1 class="text-4xl font-bold mb-6 text-gray-800 text-center">Express Interest in Events</h1>
        <form action="process_event_interest.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Your Name</label>
                <input type="text" id="name" name="name" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Your Email</label>
                <input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="event" class="block text-gray-700 font-bold mb-2">Select Event</label>
                <select id="event" name="event_id" required class="w-full px-3 py-2 border rounded">
                    <?php
                    $sql = "SELECT id, event_name FROM galleries";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['id'] . '">' . $row['event_name'] . '</option>';
                        }
                    } else {
                        echo '<option value="">No events available</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-bold mb-2">Your Message (Optional)</label>
                <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border rounded"></textarea>
            </div>
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</section>