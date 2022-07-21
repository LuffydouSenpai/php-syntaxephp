<?php
// separation du code dans des fonctions

// le mot clé function
function separation(){
    echo "<br><br>";
} 

function br(){
    echo "<br>";
}

function bonjour(){
    echo "Konnichiwa";
}

bonjour();
separation();

function addition($x, $y){
    echo $x+$y;
    separation();
}

addition(1,4);
addition(1,4);
addition(1,4);

// params

function bonjour2($x, $y){
    echo "bonjour ".$x." ".$y;
    separation();
}

bonjour2("fred","dupont");
bonjour2("sou","tot");
bonjour2("alex","maison");

//faire une fonction (moyenne qui calcule la moyenne de val1 et val2)

function moyenne($x,$y){
    echo "la moyenne de ".$x." + ".$y." = ".(($x+$y)/2);
    separation();
}

moyenne(5,9);

$chiffres = [2,5,8,9];

//claculer la moyenne du tableau
function moyenneTab($x){
$resultat=0;  
for($i=0;$i<sizeof($x);$i++){
    $resultat += $x[$i];   
}
echo ($resultat/sizeof($x)); 
separation()   ;
}

moyenneTab($chiffres);

$code =10;
function mdp($x){
    if($x == 10){
        echo "le code est bon";
        separation();
    }else{
        echo " le code est erroné";
        separation();
    }
}

mdp($code);


$article =10;

function promo($x){
 if($x<5){
    echo "pas de promo";
    separation();
}else if($x>5 && $x<10){
    echo "promo de 30%";
    separation();
}else{
    echo "promo de 50%";
    separation();
}   
}

promo($article);

?>
