<?php
@ini_set('display_errors', 1);
@ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_implicit_flush(true);
/**
 * Alternative using array_flip for even better performance
 * This leverages PHP's internal optimizations
 * Simple & concise (for integer arrays — LeetCode style):
 * Good: minimal code, fast in C, perfect when inputs are plain ints/strings and you don’t need early exit.
 */
function containsDuplicateFlip($nums) {
    // array_flip swaps keys and values, creating a hash set
    // If there are duplicates, array_flip will overwrite duplicate keys
    return count($nums) !== count(array_flip($nums));
}

/**
 * Robust (handles arrays/objects and distinguishes types)
 *Serialize each element first — stable and safe, at cost of CPU and memory:
 */
function containsDuplicateRobust(array $nums): bool {
    $keys = array_map('serialize', $nums);    // safe unique representation per value (including arrays/objects)
    return count($nums) !== count(array_flip($keys));
}

echo "containsDuplicateFlip([1,2,3,1]): ";
var_dump(containsDuplicateFlip([1,2,3,1])); // true
echo "containsDuplicateFlip([1,2,3,4]): ";
var_dump(containsDuplicateFlip([1,2,3,4])); // false
echo "containsDuplicateRobust([[1],[2],[1]]): ";
var_dump(containsDuplicateRobust([[1],[2],[1]])); // true
echo "containsDuplicateRobust([[1],[2],[3]]): ";
var_dump(containsDuplicateRobust([[1],[2],[3]])); // false
