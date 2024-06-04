<?php

$log_directory = getenv("LOG_DIRECTORY");
$data_directory = getenv("DATA_DIRECTORY");

echo "Log directory: " . $log_directory . "<br>";
echo "Data directory: " . $data_directory . "<br>";

require_once 'src/ConfigParser.php';

$config = ConfigParser::parse('config/config.json');

foreach ($config as $key => $value) {
    putenv(strtoupper($key) . '=' . $value);
}

echo "Configuration loaded successfully.";


require_once 'src/controllers/PageController.php';

$pageController = new PageController();
$pageController->renderIndex();


?>
