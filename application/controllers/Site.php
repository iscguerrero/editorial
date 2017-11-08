<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends Base_Controller{

	# Constructor de la clase
	function __construct(){
		parent::__construct();
	}

	# Metodo para retornar la pagina princial del sitio
	public function Inicio(){
		echo $this->templates->render('inicio');
	}

	public function Ventas(){
		if($_SESSION['cve_perfil'] == '001') {
			echo $this->templates->render('ventas');
		} else {
			show_404();
		}
	}

	public function Info(){
		echo $this->templates->render('info');
	}

}