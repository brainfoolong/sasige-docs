<?php

namespace Nullix\Sasige;

// create sitemap
$rootFolder = File::sanitizePath(File::concat(dirname(__DIR__), Config::getOutputFolder()));
$files = File::getFiles($rootFolder, "~.*?\.html~", true);
$fileData = [];
foreach ($files as $file) {
    $relativePath = mb_substr($file, strlen($rootFolder));
    $fileData[] = "https://sasige.0x.at" . $relativePath;
}
file_put_contents($rootFolder . "/sitemap.txt", implode("\n", $fileData));