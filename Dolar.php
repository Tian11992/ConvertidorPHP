<?php

	require_once 'Conversion.php';

	class Dolar extends Corversion
	{
	    public function convertir()
	    {
	        return $this->getNumero1() * 0.00030 . " dólares.";
	    }
	}

?>