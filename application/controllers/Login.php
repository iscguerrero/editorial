<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

	# Constructor del Controlador
	function __construct(){
		parent::__construct();
		# Cargamos la base de datos por defecto
			$this->load->database();
		# Cargamos Helpers basicos
			$this->load->helper(array('url','form'));
		# Cargamos la libreria para la validacion de los formularios
			$this->load->library(array('form_validation', 'session', 'encrypt'));
		# Cargamos el modelo del catalogo de usuarios
			$this->load->model('gl_cat_usuarios');
	}

	# Metodo para retornar la vista del login del sistema
	public function Inicio($errors = null){
		if ($this->session->userdata() && $this->session->userdata('logueado') == true) {
			redirect(site_url('Site/Inicio'));
		} else{
			$this->load->view('login', $errors);
		}
	}

	# Metodo para loguear el usuario dentro del sistema
	public function Acceder() {
		# Validamos la cambinacion de usuario y contraseña de inicio de sesion
		$this->form_validation->set_rules('cve_usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('contrasenia', 'Contraseña', 'required');
		if ($this->form_validation->run() == false) {
			exit(json_encode(array('bandera'=>false, 'msj'=>'Usuario y contraseña es información requerida')));
		} else {
			# Guardamos los parametros de la peticion en variables locales
			$cve_usuario = $this->input->post('cve_usuario');
			$contrasenia = $this->input->post('contrasenia');
			# En caso de que la combinacion sea correcta
			if ($this->gl_cat_usuarios->resolverLogin($cve_usuario, $contrasenia)) {
				$usuario = $this->gl_cat_usuarios->obtenerUsuario($cve_usuario);
				# Seteamos las variables de sesion
				$nickname = explode(' ', $usuario->nombre);
				$nickname = $nickname[0];
				$sesion = array(
					'cve_usuario' => $usuario->cve_usuario,
					'cve_perfil' => $usuario->cve_perfil,
					'nombre' => $usuario->nombre,
					'correo' => $usuario->correo,
					'nickname' => $nickname,
					'logueado' => true
				);
				$this->session->set_userdata($sesion);
				exit(json_encode(array('bandera'=>true)));
			} else {
				exit(json_encode(array('bandera'=>false, 'msj'=>'La combinación de usuario y contraseña es incorrecta, inténtalo nuevamente')));
			}
		}
	}

	# Metodo para destruir los variables de sesion del usuario logueado
	public function Salir() {
		if ($this->session->userdata() && $this->session->userdata('logueado') == true) {
			$sesion = array('logueado' => false);
			$this->session->set_userdata($sesion);
			redirect('/');
		} else {
			redirect('/');
		}
	}
}