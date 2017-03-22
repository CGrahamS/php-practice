<?php
    $guess = $_GET["user_guess"];
    $favorite_number = 10;
    $guessIsLegit = true;

    $message = checkGuess($guess, $favorite_number, $guessIsLegit);

    function checkGuess($guessed_number, $winning_number) {
      global $guessIsLegit;
      if ($guessed_number < 1 || $guessed_number > 20) {
        $guessIsLegit = false;
        //prints the users illegit guess, a mesage and the poop emoji
        return $guessed_number . " is not between 1 and 20! <br><br> Try again! &#128169;";
      } elseif($guessed_number == $winning_number) {
        return "Nailed it! 🤙";
      } elseif ($guessed_number < $winning_number) {
        return "Too low!";
      } elseif ($guessed_number > $winning_number) {
        return "Too high!";
      }
    }
 ?>

 <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Guess My Number</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <h3><?php if($guessIsLegit) {
          echo "You guessed: " . $guess . "<br>";
          echo "The right answer was: " . $favorite_number;
        } ?> </h3>
    </div>
</body>
</html>
