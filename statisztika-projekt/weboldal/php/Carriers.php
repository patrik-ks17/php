<?
include_once('App.php');

class Carriers extends App {
	private $sql = array(
		'allCarriers' => 'SELECT c.name AS legitarsasag, c.id AS azon FROM carriers c',
		'TopFlights' => 'SELECT airports.code AS leg_kod, airports.name AS legitarsasag, SUM(flights.arr_flights) AS osszesjarat 					 FROM flights
							INNER JOIN airports_carrier ON flights.airport_carriers_id = airports_carrier.id
							INNER JOIN airports ON airports_carrier.airport_id = airports.id
							GROUP BY airports.code, airports.name
							ORDER BY osszesjarat DESC 
							LIMIT 3;',
		'LeastDelay' => 'SELECT carriers.name AS legitarsasag, SUM(flights.arr_delay) / SUM(flights.arr_flights) AS atlagkeses
							FROM airports_carrier
							INNER JOIN flights ON flights.airport_carriers_id = airports_carrier.id
							INNER JOIN carriers ON airports_carrier.carrier_id = carriers.id
							GROUP BY carriers.code, carriers.name
							ORDER BY atlagkeses
							LIMIT 3',
		'carrier' => "SELECT name, code, id FROM carriers WHERE id = {id}"
	);	

	public function __construct() {
		parent::__construct();
	}

	public function getCarriers() {
		$carriers = $this->getResultList($this->sql['allCarriers']);
		return $carriers;
	}

	public function getTopFlights() {
		$flights = $this->getResultList($this->sql['TopFlights']);
		return $flights;
	}

	public function getLeastDelay() {
		$delays = $this->getResultList($this->sql['LeastDelay']);
		return $delays;
	}


	public function getCarrierById($carrierId){
		if(!$this->isValid($carrierId)) {
			 return '';
		}
		$params = array("{id}" => $carrierId);
		$carrier = $this->getResultList(strtr($this->sql['carrier'], $params));
		return $carrier[0];
  }
}


?>