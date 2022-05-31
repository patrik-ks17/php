<? 
include_once('Application.php');

class Megyek extends Application {
	private $sql = array(
		'Ossz_Megye' => 'SELECT megye.id, megye.mnev AS megyenev FROM megye;'
	);

	public function __construct() {
		parent::__construct();
	}
	

	public function Minden_megye() {
		$osszes_megye = $this->getResultList($this->sql['Ossz_Megye']);
		return $osszes_megye;
	}

}


?>