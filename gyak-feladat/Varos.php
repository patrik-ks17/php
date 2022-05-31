<? 
include_once('Application.php');

class Varos extends Application {
	private $sql = array(
		'Varosok_Id' => 'SELECT varos.id, varos.vnev AS varosnev FROM varos
								WHERE varos.megyeid = {id};',
		'Varos_Infok' => 'SELECT varostipus.vtip AS tipus, 
										varos.vnev AS varosnev,
										varos.terulet AS terulet, 
										varos.nepesseg AS nepesseg, 
										varos.kisterseg AS kisterseg, 
										varos.jaras AS jaras FROM varos
								INNER JOIN varostipus ON varos.vtipid = varostipus.id
								WHERE varos.id = {id};'
	);
	
	public function __construct() {
		parent::__construct();
	}


	public function Varosok_Id($id) {
		if (!$this->isValidId($id)) {
			return array();
		}
		
		$params = array(
			'{id}' => $id
		);
		$varosok = $this->getResultList( strtr($this->sql['Varosok_Id'], $params));
		return $varosok;
	}


	public function Varos_Infok($id) {
		if (!$this->isValidId($id)) {
			return array();
		}
		
		$params = array(
			'{id}' => $id
		);
		$varos_info = $this->getSingleResult( strtr($this->sql['Varos_Infok'], $params));
		return $varos_info;
	}
}


?>