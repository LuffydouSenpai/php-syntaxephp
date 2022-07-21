<?php

function br(){
    echo "<br>";
}

$tab=[1,2,8];
$tab=array(1,4,8);
echo gettype($tab);
echo "<br>";
//echo $tab; // ne marche pas echo => string
//echo "<br>";
var_dump($tab); // affiche données complexes + infos
print_r($tab); // affiche données complexes

echo $tab[0]; // donnée simple

echo "<pre>";
print_r($tab);
echo "</pre>";
//declarer un tableau vide et metttre les valeur 5,47,"nina" afficher le tableau

$tab = array();
echo "<pre>"; print_r($tab); echo "</pre>";

$tab[] = 5;
$tab[] = 47;
$tab[] = "nina";

var_dump($tab);

//declarer un tableau
//vide
//jour de semaine => affecter les jours de semaine => modifier le vendredi en lundi

$jourSemaine =[];
$jourSemaine[]= "Lundi";
$jourSemaine[]= "Mardi";
$jourSemaine[]= "Mercredi";
$jourSemaine[]= "Jeudi";
$jourSemaine[]= "Vendredi";
$jourSemaine[]= "Samedi";
$jourSemaine[]= "Dimanche";
var_dump($jourSemaine);

$jourSemaine[4] = "Lundi";
var_dump($jourSemaine);

//je veux savoir si la clé 20 existe dans le tableux (dumper le résultat)

var_dump(array_key_exists(20,$jourSemaine));

// si la clé 4 existe alors j'affiche le message "c'est le lundi" sinon j'affiche le message " pas de jour de semaine pour cette date"

if(array_key_exists(20,$jourSemaine)){
    echo "c'est le lundi";
    br();
}else{
    echo "pas de jour de semaine pour cette date";
    br();
}

//le in_array l'element est dans le tableau (valeur)
// vérifier si le lundi existe dans le tableau

if(in_array("Lundi", $jourSemaine)){
    echo "le Lundi existe";
    br();

}else{
    echo "le Lundi existe pas";
    br();
}

//si le samedi existe alors je le modifie pas le mardi sinon je ne fais rien

if(in_array("Samedi",$jourSemaine)){
    $jourSemaine[5]="Mardi";
}else{}

var_dump($jourSemaine);

//tableau associatif
$tabCouleur =["j"=>"jaune","b"=>"bleu","r"=>"rouge"];

var_dump($tabCouleur, $jourSemaine);
$jourSemaine=[0=>"lundi",1=>"mardi",2=>"mercredi",3=>"jeudi",4=>"vendredi",5=>"samedi",6=>"dimanche"];

var_dump($tabCouleur, $jourSemaine);

//afficher les valeurs jaune rouge et bleu avec un saut de ligne entre chaque valeur
echo $tabCouleur["j"];
br();
echo $tabCouleur["r"];
br();
echo $tabCouleur["b"];
br();
// ou
//echo $tabCouleur["j"]."<br>".$tabCouleur["r"]."<br>".$tabCouleur["b"]."<br>";

//declarer un tableau de nom, prenom, age, service et afficher le message "je suis dupont michele j'ai 31 ans et je travaille dans le service informatique
$tabPersonne=["nom"=>"dupont","prenom"=>"michele","age"=>31,"service"=>"informatique"];

echo "je suis ".$tabPersonne["nom"]." ".$tabPersonne["prenom"]." j'ai ".$tabPersonne["age"]." ans et je travaille dans le service ".$tabPersonne["service"];
br();
br();

foreach ($tabPersonne as $cle => $valeur){
    echo "la clé est ".$cle." la valuer est ".$valeur;
    br();
}

br();

foreach ($tabPersonne as $valeur){
    echo "la valuer est ".$valeur;
    br();
}

br();

$tabMulti = array("Personne1"=>["nom"=>"dupont","prenom"=>"michele","age"=>31,"service"=>"informatique"],
                  "Personne2"=>["nom"=>"dede","prenom"=>"nina","age"=>37,"service"=>"direction"]
                 );

var_dump($tabMulti);

// foreach pour écrire la phrase 2 fois

foreach ($tabMulti as $cle => $littleTab){
    echo $cle."<br>";
    echo "je suis ".$littleTab["nom"]." ".$littleTab["prenom"]." j'ai ".$littleTab["age"]." ans et je travaille dans le service ".$littleTab["service"];
    br();
    br(); 
}

br();

$mois = array(
    1=>'Janvier',
    2=>'Février',
    3=>'Mars',
    4=>'Avril',
    5=>'Mai',
    6=>'Juin',
    7=>'Juillet',
    8=>'Aout',
    9=>'Septembre',
    10=>'Octobre',
    11=>'Novembre',
    12=>'Decembre'
);

//afficher la phrase 'le mois (numero mois) = (mois)
// ex: le moi numero 1 est janvier

foreach($mois as $key => $value){
    echo "Le mois numero ".$key." est ".$value;
    br();
}

br();

$suite=[[3,6,8],
        [12,14,1],
        [7,8,9]
       ];

//la cle du chiffre 3 est le 0, la clé du chiffre 14 est le 1

foreach ($suite as $key => $value) {
    foreach ($value as $key => $value) {
        echo "la cle du chiffre ".$value." est ".$key;
        br();
    }
}


// aux boucle for and while 

$tab=[1,5,9];
$tailleTab = sizeof($tab);
var_dump($tailleTab);
echo "la taille de mon tableau est ".$tailleTab;
br();

$tailleTab2 = count($tab);
echo $tailleTab2;
br();
br();

// afficher les valeur 1 5 9 avec un saut de ligne (boucle for)

for ($i=0;$i<$tailleTab;$i++){
    echo $tab[$i];
    br();
}

br();

$jour=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];

for($i=1;$i<sizeof($jour)+1;$i++){
    echo "le jour ".$i." est ".$jour[$i-1];
    br();
}

br();

//while = for
$i=1;
while($i<sizeof($jour)+1){
    echo "le jour ".$i." est ".$jour[$i-1];
    br(); 
    $i++;
}