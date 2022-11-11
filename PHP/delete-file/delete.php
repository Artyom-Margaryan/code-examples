<?php
$files = [
    'first.jpg',
    'second.jpg',
    'third.jpg'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        unlink($file);
    } else {
        // File not found.
    }
}