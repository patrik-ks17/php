<? 
    $text = 'Ez itt egy külső fájlban van!';

    $connection = new mysqli('localhost', 'root', 'Passw123', 'library');

    if ($connection->connect_error) {
        die('Hiba a kapcsolatban: ' . $connection->connect_error);
    }

    function getBooks($connection){
        $resultList = array();
        $sql = "select * from books";
        $result = $connection->query($sql);
        while($row = $result->fetch_assoc()){
            $resultList[] = $row;
        }
        return $resultList;
    }

    function getBooksList($books){
        $str = "<ul>";
        foreach($books as $sor){
            $str .= '<li>';
            foreach($sor as $key=>$value){
                $str .= $key . ': ' . $value . '<br>'; 
            }
            $str .= '</li>';
        }
        $str .= "</ul>";
        return $str;
    }



    $books = getBooks($connection);    
?>