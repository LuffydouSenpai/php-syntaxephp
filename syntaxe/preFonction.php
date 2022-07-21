<?php

function separation(){
    echo "<br><br>";
} 

// empty()     isset()

$variable=null;
$variable2=12;

var_dump(empty($variable));
var_dump(empty($variable2));
var_dump(isset($variable));
var_dump(isset($variable2));


$var = false;
var_dump(empty($var));

//////
$email = "souhila@gmail.com";
echo strpos($email, '@');
separation();

// taille d'une cheine d'un string
echo strlen($email);
separation();

$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
In vitae mauris hendrerit, efficitur purus vitae, volutpat felis. 
Vestibulum lobortis libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
In vitae mauris hendrerit, efficitur purus vitae, volutpat felis. Vestibulum lobortis libero.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae mauris hendrerit, 
efficitur purus vitae, volutpat felis. Vestibulum lobortis libero.Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. In vitae mauris hendrerit, efficitur purus vitae, volutpat felis. 
Vestibulum lobortis libero.";

echo substr($lorem,0,20)."....";
separation();

echo str_replace("ipsum","souhila",$lorem);
separation();
echo $lorem;
separation();

//la fonction sur php =>mettre le texte en maj et un autre en min

$mot = "maison"; // => maj
$mot2 = "INTRODUCTION"; // => min

echo strtoupper($mot);
separation();
echo strtolower($mot2);
separation();

//calculer la taille du lorem sans espace

$lorem2 ="Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Fuga optio ab voluptate dignissimos nemo hic aperiam est consequuntur
 dolore architecto veritatis facere provident libero inventore,
  voluptas mollitia harum laboriosam. Voluptate!";

strlen($lorem2);
substr_count($lorem2," ");

$len = strlen($lorem2)- substr_count($lorem2," ");
echo $len;
separation();

/// strip_tag

$info = "<p>information</p>";
echo $info;
var_dump($info);
strip_tags ($info);
var_dump(strip_tags($info));

// htmlentities

var_dump(htmlentities($info));