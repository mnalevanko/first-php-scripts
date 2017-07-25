<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Moja prvá PHP stránka</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="home.php">Domov</a></li>
        <li><a href="#">Kontakt</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>

    <?php

      echo var_dump($_GET);

     ?>
  </body>
</html>
