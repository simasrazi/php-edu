<?php

// Array syntax, function array() and short
$with_function = array("PHP", "popcorn", 555.55);
$with_short = ["PHP", "popcorn", 555.55];

// Printing Arrays
$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];
$favorite_nums = [7, 201, 33, 88, 91];

// The built-in print_r() function outputs arrays in a human readable format.
print_r($favorite_nums);
// Print the elements in the array. The implode() function takes two arguments: a string to use between each element (the $glue), and the array to be joined together (the $pieces).
echo implode("!", $message);

// Accessing an Element in an  array
$round_one = ["X", "X", "first winner"];
$round_two = ["second winner", "X", "X", "X"];
$round_three = ["X", "X", "X", "X", "third winner"];

// The individual elements in an array can be accessed using the array variable’s name, and the location index surrounded by square brackets ([]).
// This process is sometimes referred to as indexing an array.
echo $round_one[1];

$winners = array($round_one[2], $round_two[0],$round_three[4]);
print_r($winners);

// Adding and Changing Elements in an Array
$change_me = [3, 6, 9];
$change_me[] = "added string";
$change_me[] = 1;
$change_me[1] = "tadpole";
print_r($change_me);

// More Array Methods: Pushing and Popping
$stack = ["wild success", "failure", "struggle"];
array_push($stack, "blocker", "impediment");
array_pop($stack);

// Shifting and Unshifting Arrays
$record_holders = [];
array_unshift($record_holders, "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
array_shift($record_holders);
array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
array_shift($record_holders);
array_unshift($record_holders, "Usain Bolt");

// Nested Arrays
