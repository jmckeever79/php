<?php header('Content-type: text/html; charset=utf-8'); ?>

<!DOCTYPE HTML>
<html>
  <body>
    <h2>The following is the maximum random value on this platform.</h2>
    <div>
    <?php
      echo getrandmax();
    ?>
  </div>
  </body>
</html>
