# PHP Unexpected Summation Bug

This repository demonstrates a common yet subtle bug in PHP related to loose typing and array summation.  When summing numbers in an array, if the array contains strings that can be interpreted as numbers, PHP's loose type system might lead to unexpected string concatenation instead of numerical addition.

The `bug.php` file contains the problematic code. The `bugSolution.php` file demonstrates a corrected version.

## Bug Description
The core issue arises from PHP's automatic type juggling. When performing addition with strings that resemble numbers, PHP converts those strings into numbers. However, if the array has any explicit string values, PHP treats the addition operation as string concatenation instead of numeric addition.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter. Observe the incorrect summation results.
3. Run `bugSolution.php` to see how the problem is addressed using strict type checking or explicit type casting.