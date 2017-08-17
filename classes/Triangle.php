<?php
require_once('Shape.php');
class Triangle extends Shape{
	private $hauteur;
	private $base;
	private $orientation;

	function __construct($nom,$X,$Y,$color,$hauteur,$base,$orientation){
		parent::__construct($nom,$X,$Y,$color);
		$this->_setHauteur($hauteur);
		$this->_setBase($base);
		$this->_setOrientation($orientation);
		parent::_setAire($this->calculerAire());
	}

	function __toString(){
			return parent::__toString()."<br>Hauteur: " .$this->_getHauteur()." px<br>Base: ".$this->_getBase()." px<br>Orientation: ".$this->_getOrientation()."</p>";			
	}

	function _setHauteur($hauteur){
		if(is_numeric($hauteur)){
			$this->hauteur=$hauteur;
		}
	}
	function _setBase($base){
		if(is_numeric($base)){
			$this->base=$base;
		}
	}
	function _setOrientation($orientation){
		if(is_numeric($orientation) AND $orientation<=360 AND $orientation>=0){
			$this->orientation=$orientation;
		}
	}
	function _getHauteur(){
		return $this->hauteur;
	}
	function _getBase(){
		return $this->base;
	}
	function _getOrientation(){
		return $this->orientation;
	}
	function calculerAire(){
		return $this->_getHauteur()*$this->_getBase()/2;
	}
	function afficher(){
		echo "<div class='triangle' style='
			position: absolute;
			left:".$this->_getX()."px; 
			top:".$this->_getY()."px; 
			width:0px; 
			height:0px;
			border-left: ".$this->hauteur."px solid transparent;
			border-right: ".$this->hauteur."px solid transparent;
			border-bottom:".$this->base."px solid ".$this->_getColor().";
			line-height:".$this->_getHauteur()."px;
			text-align:center;
			transform: rotate(".$this->orientation."deg);'
			>".$this->_getNom()."</div>";
	}
}
?>