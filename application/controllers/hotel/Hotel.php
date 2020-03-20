<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->datos = array();

		$this->vista = "principal";
		$this->menu  = "menu";

		$modelos = array('Conf_model');
		$this->load->model($modelos);

		$this->load->helper('gsis_helper');

		$this->datos['scripts'][] = (object) array('ruta' => 'ventas/assets/js/gscripts.js', 'print' => true);
	}
	
	public function lista_usuario() {
		$dato = new Conf_model();
		$usuario = $dato->verUsuario();

		$this->datos['usuarios'] = $usuario;
		$this->datos['vista']    = 'hotel/cuerpo';

		$this->load->view($this->vista, $this->datos);
	}

	public function formUsuario() {
		$this->datos['action']   = base_url('index.php/hotel/hotel/guardarUsuario');
		$this->datos['vista']    = "hotel/cuerpo";
		$this->load->view($this->vista, $this->datos);
	}

	public function guardarUsuario()
	{
		$datos = new Conf_model();

		$xdatos['mensaje'] = "";
		if ($datos->guardarUsuario($_POST)) {
			$xdatos['mensaje'] = "Se guardo con exito.";
		} else {
			$xdatos['mensaje'] = "No se guardo.";
		}
		
		enviarJson($xdatos);
	}

	public function listas()
	{		
		$dato = new Conf_model();
		$this->datos['listaUsuario'] = $dato->verUsuario();
		$this->load->view("hotel/lista", $this->datos);
	}
}
?>