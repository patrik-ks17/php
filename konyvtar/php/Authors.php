<?

include_once('Application.php');

class Authors extends Application {
    private $sql = array(
        'allAuthors' => 'SELECT * FROM authors a;'
    );
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAuthors() {
        $authors = $this->getResultList($this->sql['allAuthors']);
        return $authors;
    }

	 public function delete($id) {
		if(!$this->isValidId($id)) {
			return false;
		}
		$res = $this->deleteRecordById("authors", $id);
		return $res;
	}
}


?>