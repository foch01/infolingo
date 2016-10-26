<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>infolingo</title>
</head>
<body>
<header>
    <h1>infolingo</h1>
</header>

<form action="" method="post">
    <p>
        Traduction :
        <input type="text" name="translate" value="" />
        <input type="submit" name="submit" />
    </p>
</form>
<?php

session_start();

$name = $_POST['translate'];

/* ------------- ALGO 1 ------------ */

/*$rand = rand(0,2);

$TabEng = array ("Monday", "Tuesday", "Wednesday");
$TabFra = array ("Lundi", "Mardi", "Mercredi");

echo $TabEng[$rand];
$aleatoire = $TabFra[$rand];
echo $aleatoire;

if ($name == $aleatoire) {
    echo "<br> YES </br>";
}
else {
    echo "<br> NO </br>";
}


*/

/*------------------ ALGO 2 --------------------*/


if ( $name == $_SESSION['toto']){
    echo "<br> YES </br>";
}
else {
    echo "<br> NO </br>";
}

$rand = rand(0,6);
$count = count($JourSemaine);

$JourSemaine = array(
    "Monday" => "Lundi",
    "Tuesday" => "Mardi",
    "Wednesday" => "Mercredi",
    "Thursday" => "Jeudi",
    "Friday" => "Vendredi",
    "Saturday" => "Samedi",
    "Sunday" => "Dimanche"
);


/*for ($i = 0; $i < $count; $i++){
    echo $count[$i];
}*/

$key = array_keys($JourSemaine);
$value = array_values($JourSemaine);
echo $key[$rand];
$_SESSION['toto'] = $value[$rand];
/*echo $JourSemaine['Monday']*/

/*echo $value;*/

?>
<!--<form action="action.php" method="post">
    <p>
        Traduction :
        <input type="text" name="translate" />
        <input type="submit" name="submit" />
    </p>
</form>
<?php
/*$bdd = new PDO('mysql:host=localhost;dbname=infolingo;charset=utf8', 'root', '');
$words = $bdd->query('SELECT * FROM word ORDER BY RAND()');
foreach ($words as $word): */?>
    <article>
        <h3><?php /*echo $word['word'] */?></h3>
    </article>
--><?php /*endforeach */?>
</body>
</html>