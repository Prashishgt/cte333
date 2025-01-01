<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col h-screen bg-green-500">
        <?php include('includes/navbar.php'); ?>
        <?php include('includes/hero.php'); ?>
        <?php include('includes/chat_bot.php'); ?>
        <?php include('includes/footer.php'); ?>

    </div>
</body>

</html>

<!-- <?php
include('config/db.php');

if ($conn) {
    echo "Database connection successful!";
} else {
    echo "Database connection failed!";
}
?> -->