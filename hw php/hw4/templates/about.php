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
    <title>About</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    <h1>About My Project</h1>
    <p>This is a description of my project.</p>
</div>
<script src="assets/js/script.js"></script>
</body>
</html>
