<?php
// PHP - Random Quote Generator

include 'inc/arrays.php';

function getRandomQuote($array) {
  //Generates a random number based on length of array passed and returns that number
  //Count function counts like a human - it starts at 1. -1 prevents showing a blank quote
  return $array[rand(0,count($array) - 1)];
}

function printQuote() {
  //Bring $arrays into scope
  global $quotes;
  global $background_colors;
  $quote = getRandomQuote($quotes);
  $string = "";

  //Assign and concatenate the string back to the $string variable
  $string .= "<p class='quote'>" . $quote['quote'] . "</p>";

  //Adds citaton & year if they exist within the array
  if ($quote['citation'] !== Null && $quote['year'] !== Null) {
    $string .= "<p class='source'>" . $quote['source'] . "<span class='citation'>" . $quote['citation'] . "</span>" . "<span class='year'>" . $quote['year'] . "</span>" . "</p>";
  }
  //Adds year if one exists within the array
  elseif ($quote['year'] !== Null) {
    $string .= "<p class='source'>" . $quote['source'] . "<span class='year'>" . $quote['year'] . "</span>" . "</p>";
  }
  //Adds citation if one exists within the array
  elseif ($quote['citation'] !== Null) {
    $string .= "<p class='source'>" . $quote['source'] . "<span class='citation'>" . $quote['citation'] . "</span>" . "</p>";
  }
  else {
    $string .= "<p class='source'>" . $quote['source'] . "</p>";
  }
  echo $string;

  //Changes background color depending on 'type' value
  if ($quote['type'] == 'Tech') {
    //Generates a random number to be used for the index value of the array
    $background = $background_colors[0][rand(0,count($background_colors))];
    echo '<body style="background-color:' . $background . '">';
  }
  elseif ($quote['type'] == 'Motivational') {
    $background = $background_colors[1][rand(0,count($background_colors))];
    echo '<body style="background-color:' . $background . '">';
  }
  else {
    $background = $background_colors[2][rand(0,count($background_colors))];
    echo '<body style="background-color:' . $background . '">';
  }
}

?>
