<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Solutions | Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include('config/db.php'); ?>
    <?php include('includes/navbar.php'); ?>

    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-4 max-w-2xl">
            <h1 class="text-4xl font-bold mb-6 text-gray-800 text-center">Contact Us</h1>
            <form action="process_contact.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Your Name</label>
                    <input type="text" id="name" name="name" required class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Your Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full px-3 py-2 border rounded"></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>
        </div>
    </section>
    <?php include('includes/footer.php'); ?>

</body>

</html>