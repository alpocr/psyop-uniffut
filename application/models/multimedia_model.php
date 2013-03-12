/*
Relaciona los archivos multimedia que se cargaran al servidor.
*/

class Multimedia_model extends CI_Model {


	var $id = "";
	var $referencia = "";
	var $idTipo = "";
	var $estado = "";


	private var $table = "multimedia";

	/* Constructor */
	function __construct(){
		parent::__construct();
	}

	function get_all(){
		$query = $this->db->get($this->table);
		return $query->result();
	}

	function get_by_id($id){
		$this->db->where('idmultimedia', $id);
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

		$this->where('idmultimedia', $id);
		$this->db->update($this->table, $data);

	}



}
