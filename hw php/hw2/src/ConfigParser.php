<?php

function load_config($filename) {
    $config_data = file_get_contents($filename);
    return json_decode($config_data, true);
}

function set_environment_variables($config) {
    foreach ($config as $key => $value) {
        putenv(strtoupper($key) . "=" . $value);
    }
}

// Load configuration from config.json
$config = load_config("config.json");

// Set environment variables
set_environment_variables($config);

echo "Configuration loaded successfully.";
?>
