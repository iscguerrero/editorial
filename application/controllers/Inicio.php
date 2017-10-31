<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicio extends Base_Controller{

	# Constructor de la clase
	function __construct(){
		parent::__construct();
	}

	# Metodo para retornar la vista que carga el top5 de las publicaciones del cliente
	public function Inicio(){
		echo $this->templates->render('Inicio/inicio');
	}

}