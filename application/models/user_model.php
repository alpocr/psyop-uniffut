/*
Esta es la clase del modelo de cualquier persona que necesite
privilegios para acceder al sistema mediante usuario y password.

Es probable que que un User sean los administradores de la plataforma,
los actualizadores de contenido, etc.
*/
class User_model extends CI_Model {

	var $id = "";
	var $email = "";
	var $contrasena = "";
	var $nombre = "";
	var $apellido1 = "";
	var $apellido2 = "";
	var $estado = "";

	private var $table = "usuario";


	/*
	Constructor de la clase
	*/
	function __construct(){
		parent::__construct();
	}

        /*
        Este metodo obtiene todos los Users.
        */
        function get_all(){
                $query = $this->db->get($this->table);
                return $query->result();
        }


	/*Obtiene por id*/
	function get_by_id($id){
		$this->db->where('id', $id);
		return $this->db->get($this->table);
	}

	function delete_all(){
		
		$data = array(
			'estado' => '0'
		);

		$this->db->where('estado', 1);
		$this->db->update($this->table, $data);
	}

	function delete_by_id($id){

		$data = array(
			'estado' => '0'
		);

		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}


	function insert($nombre, $contrasena, $apellido1, $apellido2, $rol_id,
			$email, $estado){

		$data = array(
			'nombre' => $nombre,
			'cotrasena' => MD5($contrasena),
			'apellido1' => $apellido1,
			'apellido2' => $apellido2,
			'rol_id' => $rol_id,
			'email' => $email,
			'estado' => '1'
		);

		$this->db->insert($this->table, $data);
	}


	function auth($email, $contrasena){
		return true;

	}


}
