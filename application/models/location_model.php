/*
Este modelo administrara las diferentes locaciones en que un evento
sea efectuado. Por ejemplo, el Estadio Nacional, Estadio Saprissa, etc.
*/
class Location_model extends CI_Model {

	var $id = "";
	var $date_founded = "";
	var $name = "";
	var $capacity = "";
	var $city = "";
	var $address = "";
	var $country = "";
	var $active = "";


	/*
	Constructor de la clase
	*/
	function __construct(){
		parent::__construct();
	}



}
