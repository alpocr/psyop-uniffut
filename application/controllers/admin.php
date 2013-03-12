<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Admin extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');

	}

	function login(){
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_check_login');
		$this->form_validation->set_rules('contrasena', 'contrasena', 'trim|required');

		if($this->form_validation->run()){

			//se ha validado el formulario
			if($this->user_model->login($this->input->post('email'), $this->input->post('contrasena'))){
				redirect('admin');
			}redirect('admin/login');

		}

		$this->load->view('login_form_view');
	}


	function logout(){
		$this->session->sess_destroy();
	}

	function index(){
		if($this->session->userdata('logged_id')){
			$session_data = $this->session->userdata('logged_in');
			$data['email'] = $session_data['email'];
			$this->load->view('admin_view', $data);
		}else{
			redirect('admin/login', 'refresh');
		}

		$this->load->view('admin_home_view');
	}

	function usuarios(){
		$crud = new grocery_CRUD();
		$crud->set_table('usuario');
		$crud->set_relation('rol_id', 'rol', 'nombre');
                $crud->field_type('id', 'hidden', null);
		$crud->field_type('contrasena', 'password');

		$output = $crud->render();

		$this->load->view('user_view', $output);
	}


	function roles(){
                $crud = new grocery_CRUD();
                $crud->set_table('rol');
                $crud->field_type('id', 'hidden', null);
		$crud->set_relation('idPermiso', 'permiso', 'descripcion');

                $output = $crud->render();

                $this->load->view('rols_view', $output);
	}

        function permisos(){
               $crud = new grocery_CRUD();
               $crud->set_table('permiso');
               $crud->field_type('id', 'hidden', null);

               $output = $crud->render();


               $this->load->view('permisos_view', $output);
        }



        function sponsors(){
                $crud = new grocery_CRUD();
                $crud->set_table('patrocinador');
                $crud->field_type('id', 'hidden', null);
  		$crud->set_relation('idMultimedia', 'multimedia', 'referencia');

		$crud->set_field_upload('imagen','assets/uploads/files');

	        $output = $crud->render();
                $this->load->view('sponsors_view', $output);
        }


        function news(){
               $crud = new grocery_CRUD();
               $crud->set_table('noticia');
               $crud->field_type('id', 'hidden', null);
		$crud->field_type('text', 'text', null);
               $crud->set_relation('usuario_id', 'usuario', 'nombre');

               $output = $crud->render();
               $this->load->view('news_view', $output);
        }



	function multimedia(){
                $crud = new grocery_CRUD();
                $crud->set_table('multimedia');
		$crud->set_relation('idTipo', 'tipo_multimedia', 'nombre');
                $output = $crud->render();

                $this->load->view('multimedia_view', $output);
	}


        function tipo_multimedia(){
               $crud = new grocery_CRUD();
               $crud->set_table('tipo_multimedia');
               $output = $crud->render();

               $this->load->view('multimedia_tipo', $output);
        }



	function team(){
                $crud = new grocery_CRUD();
                $crud->set_table('equipo');

                $crud->set_relation('idDivision', 'division', 'nombre');
                $crud->field_type('id', 'hidden', null);

                $output = $crud->render();
                $this->load->view('team_view', $output);
	}


	function division(){
                $crud = new grocery_CRUD();
                $crud->set_table('division');
                $crud->set_relation('idTorneo', 'torneo', 'anno');
                $crud->field_type('id', 'hidden', '');

		$output = $crud->render();

                $this->load->view('division_view', $output);
	}


	function torneo(){
                $crud = new grocery_CRUD();
                $crud->set_table('torneo');
		$crud->field_type('id', 'hidden', null);

                $output = $crud->render();

                $this->load->view('torneo_view', $output);
	}


        function players(){
                $crud = new grocery_CRUD();
                $crud->set_table('jugador');
		$crud->columns('nid','nombre', 'apellido1', 'apellido2',
				'nacimiento', 'posicion', 'estatura', 'pais',
				'capital', 'imagen', 'equipo_id', 'estado');
		$crud->set_relation('equipo_id', 'equipo', 'nombre');

		$crud->set_field_upload('imagen','assets/uploads/files');

		$crud->field_type('id', 'hidden', null);

               $output = $crud->render();
               $this->load->view('player_view', $output);
        }


}
