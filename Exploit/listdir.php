<?php
// Get the current directory
$directory = getcwd();

// List all files in the current directory
$files = scandir($directory);

// Loop through the files and display them
foreach ($files as $file) {
    // Exclude "." and ".." directories
    if ($file != "." && $file != "..") {
        echo $file . "<br>";
    }
}
?>
