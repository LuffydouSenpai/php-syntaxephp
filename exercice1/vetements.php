<h1>Detail article</h1>

<?php

echo "Article: ".$_GET["article"];
echo "<br></br>";
echo "Couleur: ".$_GET["couleur"];
echo "<br></br>";
echo "Prix: ".$_GET["prix"];
echo "<br></br>";
?>

<p>Article: <?php $_GET["article"] ?></p>
<p>Couleur: <?php $_GET["couleur"] ?></p>
<p>Prix: <?php $_GET["prix"] ?></p>

<a href="index.php">back home</a>