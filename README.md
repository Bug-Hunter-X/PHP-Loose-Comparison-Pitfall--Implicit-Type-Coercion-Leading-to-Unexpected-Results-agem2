# PHP Loose Comparison Pitfall
This repository demonstrates a common error in PHP related to unexpected behavior with loosely typed variables and implicit type coercion in comparisons.

## The Bug
The `bug.php` file contains code that uses a loose comparison (`==`) to check if a string value is equal to an integer. Due to PHP's loose typing and implicit type coercion, this comparison yields unexpected results.

## The Solution
The `bugSolution.php` file demonstrates the corrected approach, using strict comparison (`===`) to ensure that both the type and the value are compared.

## How to Reproduce
1. Clone the repository.
2. Run `bug.php` to observe the unexpected result.
3. Run `bugSolution.php` to observe the correct behavior.

## Lesson Learned
Always use strict comparison (`===`) when dealing with comparisons in PHP to avoid unintended consequences resulting from loose comparison of values.