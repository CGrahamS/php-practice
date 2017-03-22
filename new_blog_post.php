<?php
    $title = $_GET["title"];
    $body = $_GET["body"];
    date_default_timezone_set("America/Los_Angeles");
    $time = "Posted on " . date("l") . " the " . date("jS") . " of " . date("F, Y") . " at " . date("g:i A");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css" media="screen" title="no title" charset="utf-8">
    <title>Blog Post</title>
  </head>
  <body>
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="post-header"><?php echo $title ?></h1>
        <p>
          <?php echo $body ?>
        </p>
        <p>
          <?php echo $time ?>
        </p>
      </div>
    </div>
  </body>
</html>
