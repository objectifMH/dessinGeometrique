<?php
require_once('Shape.php');
class Circle extends Shape{
	private $rayon;

	function __construct($nom,$X,$Y,$color,$rayon){
		parent::__construct($nom,$X,$Y,$color);
		$this->_setRayon($rayon);
		parent::_setAire($this->calculerAire());
	}

	function __toString(){
		return parent::__toString()."<br>Rayon: " .$this->_getRayon().".</p>";
	}

	function _setRayon($rayon){
		if(is_numeric($rayon)){
			$this->rayon=$rayon;
		}
	}


	function _getRayon(){
		return $this->rayon;
	}

	function afficher(){
		echo "<div class='cercle' style='
			position: absolute;
			line-height:".$this->_getRayon()."px;
			text-align:center;
			background-color:".$this->_getColor().";
			left:".$this->_getX()."px; 
			top:".$this->_getY()."px; 
			width:".$this->_getRayon()."px;
			height:".$this->_getRayon()."px;
			border-radius:50%;'
			>".$this->_getNom()."</div>";
	}
	function calculerAire(){
		return $this->_getRayon()*$this->_getRayon()*3.14159;
	}
}
?>