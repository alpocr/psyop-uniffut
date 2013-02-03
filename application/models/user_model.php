/*
Esta es la clase del modelo de cualquier persona que necesite
privilegios para acceder al sistema mediante usuario y password.

Es probable que que un User sean los administradores de la plataforma,
los actualizadores de contenido, etc.
*/
class User_model extends CI_Model {

	var $id = "";
	var $username = "";
	var $password = "";
	var $email = "";
	var $mobile = "";
	var $phone = "";
	var $name = "";
	var $lastname = "";
	var $lastip = "";


	/*
	Constructor de la clase
	*/
	function __construct(){
		parent::__construct();
	}

}
