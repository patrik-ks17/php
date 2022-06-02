<?

include_once('Application.php');

class Categories extends Application {
    private $sql = array(
        'allCategories' => 'SELECT * FROM categories c;'
    );
    public function __construct()
    {
        parent::__construct();
        // if($this->isDbConnectionLive()){
        //     echo "db kapcsolat él";
        // }else{
        //     echo "db kapcsolat nem él";
        // }
        // debug($this->getResultList("select * from books"));
    }
    
    public function getCategories() {
        $categories = $this->getResultList($this->sql['allCategories']);
        return $categories;
    }

    public function delete($id) {
		if(!$this->isValidId($id)) {
			return false;
		}
		$res = $this->deleteRecordById("categories", $id);
		return $res;
	}
}


?>