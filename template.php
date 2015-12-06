<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>instoogle</title>
  </head>
  <body>
  <form action="/REST/index.php" method="get">
    <input type="text" name="location"/>
    <button type="submit">Submit</button>
  </form>
    <br/>
   <?php

    require 'insta.php';

   ?>
  </body>
</html>
