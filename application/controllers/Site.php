<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends Base_Controller{

	# Constructor de la clase
	function __construct(){
		parent::__construct();
	}

	# Metodo para retornar la pagina princial del sitio
	public function Inicio(){
		$sitemap = '';
		if($this->session->userdata('perfil') == '001') {
			$sitemap = "
				<li><a href='index.html'>Home</a></li>
				<li><a href='generic.html'>Info de la Industria</a></li>
				<li><a href='elements.html'>Administracion</a></li>
				<li>
					<span class='opener'>Submenu</span>
					<ul>
						<li><a href='#'>Lorem Dolor</a></li>
						<li><a href='#'>Ipsum Adipiscing</a></li>
						<li><a href='#'>Tempus Magna</a></li>
						<li><a href='#'>Feugiat Veroeros</a></li>
					</ul>
				</li>
				<li><a href='#'>Recursos Humanos</a></li>
				<li><a href='#'>Logistica</a></li>
				<li>
					<span class='opener'>Another Submenu</span>
					<ul>
						<li><a href='#'>Lorem Dolor</a></li>
						<li><a href='#'>Ipsum Adipiscing</a></li>
						<li><a href='#'>Tempus Magna</a></li>
						<li><a href='#'>Feugiat Veroeros</a></li>
					</ul>
				</li>
				<li><a href='#'>Produccion</a></li>
				<li><a href='#'>Ventas</a></li>
				<li><a href='#'>Tesoreria</a></li>
				<li><a href='#'>Fianzas</a></li>
			";
		} else {
			$sitemap = "
				<li><a href='index.html'>Home</a></li>
				<li><a href='generic.html'>Info de la Industria</a></li>
				<li>
					<span class='opener'>Submenu</span>
					<ul>
						<li><a href='#'>Lorem Dolor</a></li>
						<li><a href='#'>Ipsum Adipiscing</a></li>
						<li><a href='#'>Tempus Magna</a></li>
						<li><a href='#'>Feugiat Veroeros</a></li>
					</ul>
				</li>
					<span class='opener'>Another Submenu</span>
					<ul>
						<li><a href='#'>Lorem Dolor</a></li>
						<li><a href='#'>Ipsum Adipiscing</a></li>
						<li><a href='#'>Tempus Magna</a></li>
						<li><a href='#'>Feugiat Veroeros</a></li>
					</ul>
				</li>
				<li><a href='#'>Fianzas</a></li>
			";
		}
		echo $this->templates->render('inicio', ['sitemap'=>$sitemap]);
	}

}