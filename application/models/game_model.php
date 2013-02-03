/*
Esta clase representa cada encuentro o partido.
*/

class Game_model extends CI_Model {


	var $id = "";
	var $status = "";
	var $referee_central_id = "";
	var $referee_line1_id = "";
	var $referee_line2_id = "";
	var $referee_assistent_id = "";
	var $team_home = "";
	var $team_visit = "";

	/* Constructor */
	function __construct(){
		parent::__construct();
	}



}
