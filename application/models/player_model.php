/*
Este es el modelo que contempla a cada jugador dentro del sistema.
Se reconoce un jugador y entrenador como un Player.
*/

class Player_model extends CI_Model {

	var $id = "";
	var $name = "";
	var $lastname = "";
	var $birthday = "";
	var $country = "";
	var $city = "";


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
		$query = $this->db->get('player');
		return $query->result();
	}


}
