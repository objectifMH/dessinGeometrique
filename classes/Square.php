<?php
require_once('Rectangle.php');
class Square extends Rectangle{

	function __construct($nom,$X,$Y,$color,$longueur){
		parent::__construct($nom,$X,$Y,$color,$longueur,$longueur);
		parent::_setAire($this->calculerAire());
	}

	function __toString(){
		return parent::__toString();
	}

	function calculerAire(){
		return $this->_getLongueur()*$this->_getLongueur();
	}
}
?>