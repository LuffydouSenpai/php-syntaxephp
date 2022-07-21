<?php
$nomVariable = 1;
echo gettype($nomVariable);

$age =14.5; // decimal
$nom="dupont"; // string
$vrai = true; //boolean
echo gettype($age);
echo "<br>";
echo gettype($nom);
echo "<br>";
echo gettype($vrai);
echo "<br>";

echo "je suis ".$nom.","." j'ai ".$age."ans";
echo "<br>";
// declarer 2 variable valeur (120) et valeur2(14) et afficher leur somme
// la somme des nombre est :

$variable1 =120;
$variable2 =14;

$sommmeVariable = $variable1 + $variable2;
echo "la somme des nombre est : ".$sommmeVariable;
echo "<br>";
echo "la somme des nombre est : ".($variable1 + $variable2);
echo "<br>";

//calculer et afficher la myenne des notes (maths=15, philo=12, anglais=20) // la moyenne general est
$maths  =15;
$philo = 12;
$anglais = 20;
$moyenne = ($maths + $philo + $anglais)/3;
echo "la moyenne general est : ".$moyenne;
echo "<br>";
?>

<?php
//calculer et afficher le prix TTC avec prix-ht =60, tva=20;
// prix ttc = prix ht +(prix ht *tva)/100

$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht+($prix_ht * $tva)/100;
echo "prix ttc = ".$prix_ttc."€";
echo "<br>";

//decalation de constante
define("CAPITALE", 'paris');
echo CAPITALE;
echo "<br>";
define("capitale",'new delhi');
echo capitale;

// declarer 3 variables couleur bleu blanc rouge

define("BLEU",'bleu');
define("BLANC",'blanc');
define("ROUGE",'Rouge');

?>
<style>
    *{
        margin: 0;
        padding: 0;
    }

    .drapeauFR{
        display: flex;
        margin: 0.5rem;
    }
    .bleu{
        background-color: blue;
        color: blue;
        width: 40px;
        padding: 4rem 1rem;
        text-align: center;
    }
    .blanc{
        background-color: white;
        color:  white;
        width: 40px;
        padding: 4rem 1rem;
        text-align: center;
    }
    .rouge{
        background-color: red;
        color: red;
        width: 40px;
        padding: 4rem 1rem;
        text-align: center;
    }
</style>
<?php

echo "<div class = drapeauFR><p class = bleu>".BLEU."</p>"."<p class = blanc>".BLANC."</p>"."<p class = rouge>".ROUGE."</p></div>";
echo "<br>";

$couleur ="bleu";
$couleur .= "rouge"; // => $couleur = $couleur."rouge"
$couleur .= "vert";

$a = 10;
$b = 15;

$a + $b;
$a - $b;
$a / $b;
$a % $b;

echo $a = $a + $b; $a = 10+15;
echo "<br>";
echo $a += $b;
echo "<br>";

$i=0;
$i = $i+1; $i+= 1; $i++;
$i = $i-1; $i-= 1; $i--;

//si a est sup a b alors j'affiche le message "a est plus grand que b sinon j'affiche l'inverse

if($a>$b){
    echo $a." est plus grand que ".$b;
    echo "<br>";
}else{
    echo $b." est plus grand que ".$a;
    echo "<br>";
}

// A superieur a B et A est inférieur a C j'affiche "condition 1 vérifiée sinon si A est inférieur a C+B alors j'affiche "condition 2 est vérifier sinon j'affiche "je suis dans le else

$a=10;
$b=15;
$c=2;

if($a>$b && $a<$c){
    echo "condition 1 vérifiée";
    echo "<br>";
}if($a<$b+$c){
    echo "condition 2 est vérifier";
    echo "<br>";
}else{
    echo "je suis dans le else";
}

//créer une condition qui affiche le message "Le code est bon" si le code ($code) est égale a 10 sinon "le code et erroné"

$code=10;

if($code==10){
    echo "Le code est bon";
    echo "<br>";
}
else{
    echo"le code et erroné";
    echo "<br>";
}

//créer une condition pour vérifier le nombre d'article si le nombre d'artiches est inférieur a 5 alors pas de promos sinon si le nombre d'article est supérieur a 5 et inférieur a 10 alors 30% sur le panier sinon 50% sur le panier
$article =10;

if($article<5){
    echo "pas de promo";
    echo "<br>";
}else if($article>5 && $article<10){
    echo "promo de 30%";
    echo "<br>";
}else{
    echo "promo de 50%";
    echo "<br>";
}

//personne majeur
$estMajeur=true;
// si la personne est majeur afficher age supérieur a 18ans

if($estMajeur==true){
    echo "plus de 18ans";
    echo "<br>";
}else{
    echo "moins de 18ans";
    echo "<br>";
}

// boucles

for($i=0;$i<10;$i++){
    echo $i;
    echo "<br>"; 
}
?>

<select>
    <option value="">France</option>
    <option value="">Allemagne</option>
</select>
<select name="" id="">
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
</select>

<select name="" id="">
    <?php
    for($i=0;$i<5;$i++){
        echo "<option value='$i'>".$i."</option>";
        echo "<br>";
    }
    ?>
</select>


<?php
// boucle while

$i = 0;
while($i<4){
    echo "le message :".$i;
    echo "<br>";
    $i++;
}

//Afficher un titre : <h1> Titre </h1> tant que la variable titre <5
$titre = 0;

while($titre<5){
    echo "<h1> Titre </h1>";
    echo "<br>";
    $titre++;
}

?>