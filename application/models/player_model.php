/*
Este es el modelo que contempla a cada jugador dentro del sistema.
Se reconoce un jugador y entrenador como un Player.
*/

class Player_model extends CI_Model {

	var $id = "";
	var $nid = "";  /*cedula*/
	var $tshirt = ""; /*numero de camisa*/
	var $name = "";
	var $lastname = "";
	var $birthday = "";
	var $country = "";
	var $city = "";

	//Es la tabla donde copia y lee.
	private var $table = "jugador";


	/*
	Constructor de la clase
	*/
	function __construct(){
		parent::__construct();
	}


	/*
	Este metodo obtiene todos los Players.
	*/
	function get_all(){
		$query = $this->db->get($this->$table);
		return $query->result();
	}

	/* Obtiene un jugador especifico */
	function get_by_id($id){
		$this->db->where('id', $id);
		return $this->db->get($this->table);
	}


	function delete_all(){
		$this->db->empty_table($this->table);
	}


	/* Borra un jugador */
	function delete_by_id($id){
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}


	function insert($nid, $tshirt, $name, $lastname, $birthday,
			$country, $city){

		$data = array(
			'nid' => $nid,
			'name' => $name,
			'lastname' => $lastname,
			'birthday' => $birthday,
			'country' => $country,
			'city' => $city
		);

		$this->db->insert($this->table, $data);

	}



}
