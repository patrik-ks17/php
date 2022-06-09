<?

include_once('Application.php');

class Authors extends Application {
    private $sql = array(
        'allAuthors' => 'SELECT * FROM authors a;',
        'authorById' => 'SELECT * FROM authors a WHERE id = {id};'
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


    public function saveAuthor($name) {
        $sql = "INSERT INTO authors (name) VALUES('$name');";
        return $this->execute($sql);
    }


    public function getAuthorById($id) {
        if (!$this->isValidId($id)) {
			return array();
		}
		
		$params = array(
			'{id}' => $id
		);
		$author = $this->getSingleResult( strtr($this->sql['authorById'], $params));
		return $author;
    }
}


?>