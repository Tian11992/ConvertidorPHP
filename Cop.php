<?php

	require_once 'Conversion.php';

	class Cop extends Corversion
	{
	    public function convertir()
	    {
	        return $this->getNumero1() * 3365.07 . " pesos colombianos.";
	    }
	}

?>