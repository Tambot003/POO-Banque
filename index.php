<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Banque</title>
</head>
<body>
<h3>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs.</h3>
<hr>
<?php
require "Compte.php";
require "holder.php";
spl_autoload_register(function ($class_banque) {
    
    require_once $class_name . '.php';
});


$titulaire1 = new Titulaire("hali", "Tamim", "1998", "abatabat");

$compte1 = new Compte("Compte courant", 100, "$", $titulaire1);
$compte2 = new Compte("Livret A", 50, "$", $titulaire1);

echo "<br>" . $titulaire1->__toString() . "&nbsp";


echo "<br>" . " Ville :" . "   " .  $titulaire1->get_ville() . "&nbsp" ."<br>";
echo "<br>" . $titulaire1->afficherComptes() . "&nbsp";

$compte1->crediter(10);
$compte1->debiter(0);

$compte2->virement(0, $compte1);
$compte1->crediter(10);
$compte1->debiter(0);

$compte1->virement(10, $compte2);


?>

</body>

</html>