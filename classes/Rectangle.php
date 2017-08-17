<?php
require_once('Shape.php');
class Rectangle extends Shape{
	private $longueur;
	private $largeur;

	function __construct($nom,$X,$Y,$color,$longueur,$largeur){
		parent::__construct($nom,$X,$Y,$color);
		$this->_setLongueur($longueur);
		$this->_setLargeur($largeur);
		parent::_setAire($this->calculerAire());
	}
	function __toString(){
		if($this->_getLongueur()!=$this->_getLargeur()){
			return parent::__toString()."<br>Longueur: " .$this->_getLongueur()." px<br>Largeur: ".$this->_getLargeur()." px.</p>";
		}
		else{
			return parent::__toString()."<br>Côté: " .$this->_getLongueur()."px.";
		}
		
	}

	function _setLongueur($longueur){
		if(is_numeric($longueur)){
			$this->longueur=$longueur;
		}
	}

	function _setLargeur($largeur){
		if(is_numeric($largeur)){
			$this->largeur=$largeur;
		}
	}
	function _getLongueur(){
		return $this->longueur;
	}
	function _getLargeur(){
		return $this->largeur;
	}

	function afficher(){
		echo "<div class='carre' style='
			position: absolute;
			background-color:".$this->_getColor().";
			left:".$this->_getX()."px; 
			top:".$this->_getY()."px; 
			width:".$this->_getLongueur()."px; 
			height:".$this->_getLargeur()."px;
			line-height:".$this->_getLargeur()."px;
			text-align:center;'
			>".$this->_getNom()."</div>";
	}
	function calculerAire(){
		return $this->_getLongueur()*$this->_getLargeur();
	}
}

?>