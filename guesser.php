<?php
  $play_count=0;
  $correct_guesses=0;
  $guess_high=0;
  $guess_low=0;

  echo "Hello, Player.\n";
  echo "I have chosen a number.\n";
  echo "Can you guess my number?\n";
  echo "I will tell you how times you are high, how many times you are low, and how many times you are correct. Begin!\n";

  function guessNumber() {
    global $play_count, $correct_guesses, $guess_high, $guess_low;

    $play_count++;

    $r = rand(1, 10);

    echo "\n";
    echo "Guess the number, Player.\n";

    $guess = readline(">> ");
    if (!is_numeric($guess)) {
      echo "That's not a number, Player - try again.\n";
      return;
    }
    echo "\n";
    $guess_int = intval($guess);
    if ($guess_int < 1 || $guess_int > 10) {
      echo "That's very naughty, Player - try again.\n";
      return;
    }

    echo "Round ".$play_count."\n";
    echo "You guessed ".$guess_int.".\n";
    echo "The number is ".$r.".\n";
    if ($r==$guess_int) {
      echo "You guessed correctly!";
      $correct_guesses++;
    } elseif ($r<$guess_int) {
      echo "You guessed high.";
      $guess_high++;
    } else {
      echo "You guessed low.";
      $guess_low++;
    }
    echo "\n\n";
  }

  for ($i = 0; $i < 10; $i++) {
    guessNumber();
  }

  echo "Tallying results ...\n";
  sleep(4);
  echo "Your success rate was ".$correct_guesses*100/$play_count."%.\n";
  if ($guess_low>$guess_high) {
    echo "You were awfully low, Player.\n";
  } elseif ($guess_low<$guess_high) {
    echo "You tend to be on the high side, Player.\n";
  } else {
    echo "You were all over the place, Player.\n";
  }
?>
