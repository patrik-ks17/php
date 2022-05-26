<?
include_once('App.php');

class Carriers extends App {
	private $sql = array(
		'allCarriers' => 'SELECT c.name AS legitarsasag FROM carriers c',
	);	

	public function __construct() {
		parent::__construct();
	}

	public function getCarriers() {
		$carriers = $this->getResultList($this->sql['allCarriers']);
		return $carriers;
	}

	public function getAllFlights() 
	{

	}
}


?>