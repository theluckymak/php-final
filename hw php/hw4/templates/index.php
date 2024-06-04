<?php

require_once 'src/controllers/PageController.php';

$pageController = new PageController();
$pageController->renderIndex();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<h1>Welcome to My Website</h1>
<p>This is the home page of my project.</p>
<a href="about.php">About</a>
<script src="assets/js/script.js"></script>
</body>
</html>
