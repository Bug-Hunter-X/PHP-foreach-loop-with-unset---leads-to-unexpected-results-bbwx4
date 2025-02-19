# PHP Foreach Loop with Unset() Bug

This repository demonstrates a common, yet subtle, bug in PHP related to the use of `unset()` within a `foreach` loop iterating over an array.  When using `unset()` to remove elements from the array being iterated, unexpected behavior can occur due to how keys are handled by value instead of reference.

## Bug Description
The problem arises because the `foreach` loop implicitly iterates over a copy of the keys, not references.  When you `unset` an element, the array's internal structure changes; however, the `foreach` loop continues iterating using its initial copy of the keys, potentially skipping elements or causing index issues.

## Bug Solution
This bug is solved using a `while` loop and iterating through a copy of the array while modifying the original. Using a `for` loop iterating backwards would also fix the issue.

## How to reproduce
1. Clone this repository.
2. Run `php bug.php`