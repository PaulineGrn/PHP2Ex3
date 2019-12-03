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
  <?php
  // Si c'est une femme alors c'est une développeuse
  if($gender=="femme")
  {
    echo'C\'est une développeuse !!!';
  }
  // Sinon c'est un développeur
  else
  {
    echo'C\'est un développeur !!!';
  }
  ?>
</body>
</html>
