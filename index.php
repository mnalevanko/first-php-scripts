<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Moja prvá PHP stránka</title>
  </head>
  <body>

    <!-- Základná navigácia -->

    <nav>
      <ul>
        <li><a href="index.php">Domov</a></li>
        <li><a href="index.php?page=kontakt">Kontakt</a></li>
        <li><a href="index.php?page=blog">Blog</a></li>
      </ul>
    </nav>

    <!-- END Základná navigácia -->


    <?php
      $page = !isset($_GET['page']) ? 'index.php' : $_GET['page'] . '.php';
      // echo $subpage;
      // echo "V premennej page je teraz $page.";
      if ($page != "index.php") {
        include $page;
      }

     ?>

     <div class="container">
       Toto je hlavná stránka
     </div>

  </body>
</html>
