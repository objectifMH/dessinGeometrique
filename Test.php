<?php
require_once('classes/Circle.php');
require_once('classes/Square.php');
require_once('classes/Triangle.php');

function randomColor() { 
    $str = '#'; 
    for($i = 0 ; $i < 6 ; $i++) { 
        $randNum = rand(0 , 15); 
        switch ($randNum) { 
            case 10: $randNum = 'A'; break; 
            case 11: $randNum = 'B'; break; 
            case 12: $randNum = 'C'; break; 
            case 13: $randNum = 'D'; break; 
            case 14: $randNum = 'E'; break; 
            case 15: $randNum = 'F'; break; 
        } 
        $str .= $randNum; 
    } 
    return $str; 
} 

function pickName(){
	global $MesPrenom;
	$name=$MesPrenom[rand(0,count($MesPrenom)-1)];
	foreach ($MesPrenom as $key => $value) {
		if($name==$value){
			unset($MesPrenom[$key]);
			$MesPrenom=array_values($MesPrenom);
		}
	}
	return $name;
}

function ObjetAleatoire(){
	$form=rand(0,3);
	
	$name=pickName();
	switch ($form) {
		case 0:
			$name = new Rectangle($name,rand(150,1800),rand(0,900),randomColor(),rand(50,250),rand(25,250));
			break;
		case 1:
			$name = new Square($name,rand(150,1800),rand(0,900),randomColor(),rand(50,150));
			break;
		case 2:
			$name = new Circle($name,rand(150,1800),rand(0,900),randomColor(),rand(70,150));
			break;
		case 3:
			$name = new Triangle($name,rand(150,1800),rand(0,900),randomColor(),rand(50,150),rand(75,150),rand(0,360));
			break;
	}
	$name->afficher();
	echo $name;
}
function NombreAleatoire(){
	$nombreObjet=rand(1,10);
	for ($i=0; $i <$nombreObjet ; $i++) { 
		ObjetAleatoire();
	}
}

$MesPrenom=array('Rimbaud','Mozart','Amandine','Arno','Mickael','Jordi','Masha','Matthias','Guillaume','Hermione','Julie','Thomas','Greg','Simon','Thimothe','Medhi','Anthony','Yassim','Pikachu','Stannis');
NombreAleatoire();
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8">
</head>
<body>
</body>
</html>