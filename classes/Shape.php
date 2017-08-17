<?php
abstract class Shape{
	private $abscisseX;
	private $ordonneY;
	private $color;
	private $aire;
	private $nom;

	function __construct($nom,$X,$Y,$color){
		$this->_setX($X);
		$this->_setY($Y);
		$this->_setColor($color);
		$this->_setNom($nom);
	}

	function __toString(){
		return "<p><span style='font-weight:bolder;'>".$this->_getNom()."</span><br>Abcsisse X: " .$this->_getX()."<br> Ordonne Y: ".$this->_getY()." <br> Aire: ".$this->_getAire()." px².";
	}

	function _setNom($nom){
		$this->nom=$nom;	
	}

	function _setX($X){
		if(is_numeric($X)){
			$this->abscisseX=$X;
		}
	}

	function _setY($Y){
		if(is_numeric($Y)){
			$this->ordonneY=$Y;
		}
	}
	function _setColor($color){
		$this->color=$color;
	}
	function _getNom(){
		return $this->nom;
	}
	function _getX(){
		return $this->abscisseX;
	}
	function _getY(){
		return $this->ordonneY;
	}
	function _getColor(){
		return $this->color;
	}

	function _setAire($aire){
		if(is_numeric($aire)){
			//$this->aire=calculerAir();
			$this->aire=$aire;
		}
	}

	function _getAire(){
		return $this->aire;
	}
}
?>