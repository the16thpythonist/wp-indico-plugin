#!/usr/bin/env php
<?php

echo "This script will install the required composer packages for the plugin \n";

echo "INSTALLING COMPOSER \n\n";

$composer_setup_url = "https://getcomposer.org/installer";
// Writing the code to a file
$composer_setup_file_path = __DIR__ . '/composer-setup.php';
copy($composer_setup_url, $composer_setup_file_path);

// Reading the actual signature
$actual_signature = hash_file('sha384', $composer_setup_file_path);

echo exec("php " . $composer_setup_file_path . " --quiet");

// Actually installing the dependencies
echo "ACTUALLY INSTALLING DEPENDENCIES\n";
echo exec("cd " . __DIR__ . "; php composer.phar update");

// Removing all the stuff again
echo "\nREMOVING THE TEMPORARY FILES\n";
$composer_phar_file_path = __DIR__ . '/composer.phar';
unlink($composer_setup_file_path);
unlink($composer_phar_file_path);

echo "DONE\n";