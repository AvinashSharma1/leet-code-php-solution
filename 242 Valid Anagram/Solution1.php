<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        /**
         * Solution 1 using count character occurrences
         * Time Complexity: O(n) - we traverse each string once
         */
        return count_chars($s, 1) === count_chars($t, 1);
        
        /**
         * Solution 2 using character count array
         * Time Complexity: O(n) - we traverse each string once
         * Space Complexity: O(1) - fixed size array for 26 lowercase letters
         */

        /*
        $s_len = strlen($s);
        $t_len = strlen($t);
        if($s_len !== $t_len)
            return false;
        $charCount = array_fill(0, 26, 0);

        for($i= 0; $i < $s_len; $i++)
        {
            //$charCount[$s[$i] - 'a' ]++;
            $charCount[ord($s[$i]) - ord('a')]++;
            $charCount[ord($t[$i]) - ord('a')]--;
            //$charCount[$t[$i] - 'a' ]--;
        }
         return !array_filter($charCount);
        */
         /*
        foreach($charCount as $count)
        {
            if($count != 0)
            {
                return false;
            }
        }
        return true;*/
    }
}

// Example test calls for isAnagram
$sol = new Solution();
echo "isAnagram('anagram', 'nagaram'): ";
var_dump($sol->isAnagram('anagram', 'nagaram')); // true
echo "isAnagram('rat', 'car'): ";
var_dump($sol->isAnagram('rat', 'car')); // false