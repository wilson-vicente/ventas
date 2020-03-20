<?php

class Gramatica extends CI_Controller
{	
	function __construct() {
		parent::__construct();
		$this->vista = "principal";
		$this->menu  = "menu";
		$this->datos = array();
		$this->datos['scripts'][] = (object) array('ruta' => 'ventas/assets/js/gscripts.js', 'print' => true);
	}

	public function formGramatica()	{
		$this->datos["action"] = base_url("index.php/gramatica/gramatica/generarDerivacion");
 		$this->datos["vista"]  = "gramatica/cuerpo";
 		$this->datos["alerta"] = 0;
		$this->load->view($this->vista, $this->datos);
	}

	public function generarDerivacion() {
		
		//echo $this->input->post('oracion').'<br><br>';

		# Separa letras
		# $texto = str_split($this->input->post('oracion')); 
		
		# Separa palabras
		$texto 	  = explode(" ", strtolower($this->input->post('oracion')));
		$lenguaje = $this->input->post("lenguaje");

		#Formula gramatica
		$formula = 'I -> ASVP';

		if ($lenguaje == 1){ # Español

			$articulo   = array('el', 'los', 'la', 'las', 'un', 'unos', 'una', 'unas');
			$sujeto     = array('carro', 'casa', 'mueble', 'computadora', 'elefante', 'avion', 'celular', 'niños');
			$verbo      = array('es', 'esta');
			$predicado  = array('rojo', 'hermoso', 'hermosa', 'verde');

		} elseif($lenguaje == 2){ # Ingles

			$articulo   = array('the', 'a', 'an');
			$sujeto     = array('car', 'house', 'table ', 'computer ', 'elefant ', 'airplane ', 'mobile ', 'children');
			$verbo      = array('is', 'are');
			$predicado  = array('red', 'beautiful', 'green');

		}			
		
		$xdatos['mensaje'] = 'La oración ingresada no es correcto.';

		#Verifica Articulo
		$exist_articulo = 0;
		$xdatos['regla_articulo'] = "";
		foreach ($articulo as $key => $value) {
			if($texto[0] == $value) {
				$exist_articulo = 1;
				$regla_articulo = $texto[0];
			}		
		}

		if ($exist_articulo == 1) {
			$xdatos['mensaje_articulo'] = 'El articulo es correcto.';
			$xdatos['regla_articulo'] = "<b>2</b> ".$regla_articulo." -> ";
		} else {
			$xdatos['mensaje_articulo'] = 'No es un articulo correcto.';
		}

		# Verifica Sujeto
		$exist_sujeto = 0;
		$xdatos['regla_sujeto'] = "";
		foreach ($sujeto as $key => $value) {
			if ($texto[1] == $value) {
				$exist_sujeto = 1;
				$regla_sujeto = $texto[1];
			}
		}

		if ($exist_sujeto == 1) {
			$xdatos['mensaje_sujeto'] = 'El sujeto es correcto.';
			$xdatos['regla_sujeto'] = "<b>3</b> ".$regla_sujeto." -> ";
		} else {
			$xdatos['mensaje_sujeto'] = 'No es un sujeto valido.';
		}

		# Verifica Verbo
		$exist_verbo = 0;
		$xdatos['regla_verbo'] = "";
		foreach ($verbo as $key => $value) {
			if ($texto[2] == $value) {
				$exist_verbo = 1;
				$regla_verbo = $texto[2];
			}
		}

		if ($exist_verbo == 1) {
			$xdatos['mensaje_verbo'] = 'El verbo es correcto.';
			$xdatos['regla_verbo'] = "<b>4</b> ".$regla_verbo." -> "; 
		} else {
			$xdatos['mensaje_verbo'] = 'No es un verbo valido.';
		}


		# Verifica predicado
		$exist_predicado = 0;
		$xdatos['regla_predicado'] = "";
		foreach ($predicado as $key => $value) {
			if ($texto[3] == $value) {
				$exist_predicado = 1;
				$regla_predicado = $texto[3]; 
			}
		}

		if ($exist_predicado == 1) {
			$xdatos['mensaje_predicado'] = 'El predicado es correcto.';
			$xdatos['regla_predicado'] = "<b>5</b> ".$regla_predicado; 
		} else {
			$xdatos['mensaje_predicado'] = 'No es un predicado valido.';
		}

		$xdatos['gramatica_valida'] = 0;
		$xdatos['mensaje_gramatica'] = 'Gramatica no aceptada.';
		if ($exist_articulo == 1 && $exist_verbo == 1 && $exist_sujeto == 1 && $exist_predicado == 1) {
			$xdatos['gramatica_valida'] = 1;
			$xdatos['mensaje_gramatica'] = 'Gramatica aceptada.';
		}

		$xdatos['exist_articulo']  = $exist_articulo;
		$xdatos['exist_verbo'] 	   = $exist_verbo;
		$xdatos['exist_sujeto']    = $exist_sujeto;
		$xdatos['exist_predicado'] = $exist_predicado;

		$this->xdatos["alerta"] = 1;

		enviarJson($xdatos);
	}
}

?>