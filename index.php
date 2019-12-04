<!-- Déclaration d'une variable gender -->
<?php
$gender='femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP2Ex3</title>
</head>
<body>
  <!-- Si c'est une femme alors c'est une développeuse -->
  <?php if($gender=='femme'){ ?>
    <p>C\'est une développeuse !!!</p>
    <?php} else{ ?>
      <p>C\'est un développeur !!!</p>
    <?php } ?>
  </body>
  </html>
