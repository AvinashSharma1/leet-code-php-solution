<?php
// Usage: php run_test.php <problem_number|problem_folder> [<solution_file>]
// Example: php run_test.php 217 Solution2.php
// If <solution_file> is omitted, defaults to Solution1.php

if ($argc < 2) {
    echo "Usage: php run_test.php <problem_number|problem_folder> [<solution_file>]\n";
    exit(1);
}

$input = $argv[1];
$solutionFile = $argv[2] ?? 'Solution1.php';
$baseDir = __DIR__;

// Find folder by number or use as folder name
$problemFolder = null;
if (is_dir("$baseDir/$input")) {
    $problemFolder = $input;
} else {
    $dirs = scandir($baseDir);
    foreach ($dirs as $dir) {
        if ($dir === '.' || $dir === '..') continue;
        if (is_dir("$baseDir/$dir") && preg_match('/^' . preg_quote($input, '/') . '\\b/', $dir)) {
            $problemFolder = $dir;
            break;
        }
    }
    if (!$problemFolder) {
        echo "Problem folder not found for: $input\n";
        exit(1);
    }
}

$solutionPath = "$baseDir/$problemFolder/$solutionFile";
if (!file_exists($solutionPath)) {
    echo "Solution file not found: $solutionPath\n";
    exit(1);
}

require $solutionPath;
