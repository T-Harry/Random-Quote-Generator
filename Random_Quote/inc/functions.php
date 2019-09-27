<?php
// PHP - Random Quote Generator

$quotes = [
   ['quote' => 'Ruby is rubbish! PHP is phpantastic!',
   'source' => 'Nikita Popov',
     'type' => 'Tech'],
   ['quote' => 'Any fool can write code that a computer can understand. Good programmers write code that humans can understand.',
   'source' => 'Martin Fowler',
     'type' => 'Tech'],
   ['quote' => 'Your time is limited, so don\'t waste it living someone else\'s life. Don\'t be trapped by dogma -- which is living with the results of other people\'s thinking.',
   'source' => 'Steve Jobs',
     'type' => 'Tech'],
   ['quote' => 'The way to get started is to quit talking and begin doing.',
   'source' => 'Walt Disney',
     'type' => 'Motivational'],
   ['quote' => 'Tell me and I forget. Teach me and I remember. Involve me and I learn.',
   'source' => 'Benjamin Franklin',
     'type' => 'Motivational'],
   ['quote' => 'The future belongs to those who believe in the beauty of their dreams.',
   'source' => 'Eleanor Roosevelt',
     'type' => 'Motivational'],
   ['quote' => 'If we knew what it was we were doing, it would not be called research, would it?',
   'source' => 'Albert Einstein',
     'type' => Null],
   ['quote' => "Student: Dr. Einstein, Aren't these the same questions as last year's physics final exam?<br>\n Dr. Einstein: Yes; But this year the answers are different.",
   'source' => 'Albert Einstein',
     'type' => Null],
   ['quote' => 'If you set your goals ridiculously high and it\'s a failure, you will fail above everyone else\'s success.',
   'source' => 'James Cameron',
     'type' => Null],
];

$background_colors = array(
  //Blues : Type - Technology
  array('#4dc3ff','#0099e6','#4dc3ff','#33adff'),
  //Greens : Type - Motivational
  array('#33cc00','#39e600','#47d147','#70db70'),
  //Purples : No Type
  array('#c653c6','#bf40bf','#cc66cc','#ac39ac'),
);

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
  $string .= "<p class='source'>" . $quote['source'] . "</p>";
  echo $string;
  if ($quote['type'] == 'Tech') {
    //Generates a random number to be used for the index value of the array
    $background = $background_colors[0][rand(0,count($background_colors))];
    echo '<body style="background-color:' . $background . '">';
  } elseif ($quote['type'] == 'Motivational') {
    $background = $background_colors[1][rand(0,count($background_colors))];
    echo '<body style="background-color:' . $background . '">';
  } else {
    $background = $background_colors[2][rand(0,count($background_colors))];
    echo '<body style="background-color:' . $background . '">';
  }
}

?>
