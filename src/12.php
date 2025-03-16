<?php
// Function to generate a random number between 1 and 6
function getRandomNumber() {
    return rand(1, 6);
}

// Function to get a random dice roll result
function getDiceRollResult($numberOfDice) {
    $result = "";
    for ($i = 0; $i < $numberOfDice; $i++) {
        $result .= getRandomNumber() . " ";
    }
    return $result;
}

// Example usage of the functions
echo getDiceRollResult(1); // Output: 4
echo getDiceRollResult(3); // Output: 2 5 6
?>