/* Representa a cada director tecnico que puede ser asignado
a un club o a una seleccion */

class Coach_model extends CI_Model {

	var $id = "";
	var $name = "";
	var $lastname = "";
	var $birthday = "";
	var $city = "";
	var $country = "";


	/* Constructor*/
	function __construct(){
		parent::__construct();
	}


}
