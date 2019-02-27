<?php

/*Given an array of integers, return indices of the two numbers such that they add up to a specific target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

Example:

Given nums = [2, 7, 11, 15], target = 9,

Because nums[0] + nums[1] = 2 + 7 = 9,
return [0, 1].

https://leetcode.com/problems/two-sum/
*/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = [];

        foreach ($nums as $key => $item) {
            if(in_array(($target - $item), $nums)){
                $key2 = array_search($target - $item, $nums);
                if($key == $key2){
                    continue;
                }
                $result = [$key, $key2];
                break;
            }
        }
        return $result;
    }
}

$nums = [2, 7, 11, 15];
// $nums = [3,2,4];
$target = 9;
// $target = 6;

$solution = new Solution();

$result = $solution->twoSum($nums, $target);

print_r($result);
