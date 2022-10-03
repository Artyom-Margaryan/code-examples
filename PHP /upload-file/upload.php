<?php

if (!isset($_FILES["myFile"])) {
    die("There is no file to upload.");
}

$filepath = $_FILES['myFile']['tmp_name'];
$fileSize = filesize($filepath);
$fileInfo = finfo_open(FILEINFO_MIME_TYPE);
$filetype = finfo_file($fileInfo, $filepath);

if ($fileSize === 0) {
    die("The file is empty.");
}

if ($fileSize > 3145728) { // 3 MB (1 byte * 1024 * 1024 * 3 (for 3 MB))
    die("The file is too large");
}

$allowedTypes = [
    'image/png' => 'png',
    'image/jpeg' => 'jpg'
];

if (!in_array($filetype, array_keys($allowedTypes))) {
    die("File not allowed.");
}

$filename = basename($filepath);
$extension = $allowedTypes[$filetype];
$targetDirectory = __DIR__ . "/uploads";

$newFilepath = $targetDirectory . "/" . $filename . "." . $extension;

if (!copy($filepath, $newFilepath)) {
    die("Can't move file.");
}
unlink($filepath);

echo "File uploaded successfully :)";