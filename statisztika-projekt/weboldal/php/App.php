<?
include_once('debug.php');

class App {
	private $dbParams = array(
		'servername' => 'localhost',
		'username' => 'root',
		'password' => 'Passw123',
		'dbname' => 'flight_stat'
	);
	private $connection;
	private $connectionLive = false;

	public function __construct() {
		$this->connectDb();
	}

	private function connectDb(){
		$this->connection = new mysqli($this->dbParams['servername'], $this->dbParams['username'],$this->dbParams['password'],$this->dbParams['dbname']);
		if ($this->connection->connect_error){
			die('Connection failed: '. $this->connection->connect_error);
		}
		$this->connectionLive = true;
	}

	protected function isDbConnectionLive() {
		return $this->connectionLive;
	}

	protected function getResultList($sql) {
		$resultList = array();
		$result = $this->connection->query($sql);
			while($row = $result->fetch_assoc()){
				$resultList[] = $row;
			}		
		return $resultList;
	}

}

?>