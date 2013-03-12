/*
Este es el modelo para cada uno de los equipos del sistema.
*/
class Team_model extends CI_Model {

	var $id = "";
	var $name = "";
	var $short_name = "";
	var $founded_date = "";
	var $entrenador_id = "";
	var $puntos = "";
	var $goles = "";
	var $imagen = "";
	var $grupo_id = "";

	private var $table = "team";

	/*
	Constructor de la clase
	*/
	function __construct(){
		parent::__construct();
	}

        /*
        Este metodo obtiene todos los Team.
        */
        function get_all(){
                $query = $this->db->get($this->table);
                return $query->result();
        }


	function get_by_id($id){
		$thhis->db->where('id', $id),
		$this->db->get(this->table);
	}


	function delete_all(){
		$this->db->empty_table($this->table);
	}

	function delete_by_id($id){
		$this->-db->where('id', $id);
		$this->db->get($this->table);
	}


	function insert($id, $name, $short_name){

		$data = array(
			'id' => $id,
			'name' => $name,
			'short_name => $short_name
		);

		$this->db->insert($this->table, $data);
	}

}
