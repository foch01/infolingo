<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>infolingo</title>
</head>
<body>
<header>
    <h1>infolingo</h1>
</header>
<form action="action.php" method="post">
    <p>
        Traduction :
        <input type="text" name="traduction" />
        <input type="submit" name="valider" />
    </p>
</form>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=infolingo;charset=utf8', 'root', '');
$words = $bdd->query('SELECT * FROM word ORDER BY RAND()');
foreach ($words as $word): ?>
    <article>
        <h3><?php echo $word['word'] ?></h3>
    </article>
<?php endforeach ?>
</body>
</html>