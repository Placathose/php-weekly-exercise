<?php
// Use Toronto timezone
date_default_timezone_set('America/Toronto');

// Current time
$currentTime = date("H:i");

// Use hours to compare
$currentHour = (int)date("H");

// Determine the meal based on the current time
if ($currentHour >= 5 && $currentHour < 9) {
    $mealTime = "Breakfast";
    $food = "Bananas, Apples, and Oats";
} elseif ($currentHour >= 12 && $currentHour < 14) {
    $mealTime = "Lunch";
    $food = "Fish, Chicken, and Vegetables";
} elseif ($currentHour >= 19 && $currentHour < 21) {
    $mealTime = "Dinner";
    $food = "Steak, Carrots, and Broccoli";
} else {
    $mealTime = "";
    $food = "No food";
}

// Output 
echo '<p>Current Time: '.$currentTime.'</p>';
echo '<p>Meal: '.$mealTime.'</p>';
echo '<p>On the menu now: '.$food.'</p>';
?>