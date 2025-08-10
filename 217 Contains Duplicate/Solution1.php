<?php
/**
 * Optimized solution using associative array for O(1) lookup
 * Time Complexity: O(n) - we visit each element once
 * Space Complexity: O(n) - we store at most n unique elements
 * Early-exit hashset (safe & efficient, stops early on duplicate):
 */
function containsDuplicate($nums) {
    $seen = []; // Use associative array as a hash set
    
    foreach ($nums as $value) {
        // Check if key exists - this is O(1) operation in PHP
        if (isset($seen[$value])) {
            return true; // Duplicate found immediately
        }
        // Mark this value as seen by using it as a key
        $seen[$value] = true;
    }
    
    return false; // No duplicates found
}


echo "containsDuplicate([1,2,3,1]): ";
flush();
var_dump(containsDuplicate([1,2,3,1])); // true
flush();
echo "containsDuplicate([1,2,3,4]): ";
flush();
var_dump(containsDuplicate([1,2,3,4])); // false
flush();