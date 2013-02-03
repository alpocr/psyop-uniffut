/*
Es el modelo que representa a cada arbitro.
*/
class Referee_model extends CI_Model {

	var $id = "";
	var $name = "";
	var $lastname = "";
	var $birthday = "";
	var $city = "";
	var $country = "";


	/* Constructor */
	function __construct(){
		parent::__construct();
	}


}
