<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<h1>Welcome to My Farm</h1>
<ul>
    <?php foreach ($farms as $farm): ?>
        <li><?php echo $farm['name']; ?> - <?php echo $farm['location']; ?></li>
    <?php endforeach; ?>
</ul>
<a href="about.php">About</a>
<script src="assets/js/script.js"></script>
</body>
</html>
