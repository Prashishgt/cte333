<?php
$activePage = basename($_SERVER['PHP_SELF']);
?>

<nav class="bg-gray-800 text-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <a href="index.php" class="text-lg font-semibold">AI Solutions</a>
            <div class="hidden md:flex space-x-6">
                <a href="index.php"
                    class="<?= ($activePage == 'index.php') ? 'text-blue-400' : 'hover:text-gray-300' ?>">Home</a>
                <a href="gallery.php"
                    class="<?= ($activePage == 'gallery.php') ? 'text-blue-400' : 'hover:text-gray-300' ?>">Gallery</a>
                <a href="about.php"
                    class="<?= ($activePage == 'about.php') ? 'text-blue-400' : 'hover:text-gray-300' ?>">About Us</a>
                <a href="contact.php"
                    class="<?= ($activePage == 'contact.php') ? 'text-blue-400' : 'hover:text-gray-300' ?>">Contact
                    Us</a>
            </div>
        </div>
    </div>
</nav>