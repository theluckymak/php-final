
<?php
require_once 'controllers/PageController.php';

$controller = new PageController();
$controller->about();
?>

<!-- about.php -->
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
    <h1>About Mohamed Amine Kaltoum</h1>
    <p>Date of Birth: 13.04.2001</p>
    <p>Studies: Kazan Federal University, ITIS</p>
    <p>Occupation:Camping</p>
    <p>Specialty: Full Stack Engineer </p>
</div>
<script src="assets/js/script.js"></script>
</body>
</html>
