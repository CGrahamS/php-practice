<?php
    $message_to_encode = $_GET["message"];
    $new_string = encode($message_to_encode);

    function encode($input_phrase)
    {
      $reversed_phrase = strrev($input_phrase);
      $capitalized_phrase = strtoupper($reversed_phrase);
      return $capitalized_phrase;
    }
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Encrypt a Message</title>
   </head>
   <body>
     <div class="container">
       <h1>Message Encrypted!</h1>
       <h2>Here you go: <?php echo $new_string ?></h2>
     </div>
   </body>
 </html>
