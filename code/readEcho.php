<?php

function readmyFile(string $file_path): string {
    if (!file_exists($file_path)) {
        return "Target file path does not exist: " . $file_path;
    }

    $result = file_get_contents($file_path);
    if ($result === false) {
        return "The file is not readable.";
    }

    return $result;
}

function showHeader(): void {
    echo readmyFile("./include/navbar.php");
}

function showHero(): void {
    echo readmyFile("./include/hero.php");
}

?>
