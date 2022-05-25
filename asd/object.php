<?php

// function user($nev, $nem) {
//     $userData = array('név' => $nev, 'nem' => $nem);
//     return $userData;
// }

// $user1 = user('Timi', 'nő');
// $user2 = user('Nimród', 'férfi');

// var_dump($user1);
// echo '<br>';
// var_dump($user2);
// echo '<br>';
// echo '<br>';

class Creature {
    private $faj = '';
    function __construct($faj){
        $this -> faj = $faj;
    }
    
    protected function getFaj() {
        return $this->faj;
    }
}


class Person extends Creature {
    protected $nev = '';
    protected $nem = '';
    function __construct($nev, $nem){
        parent::__construct('ember');
        $this->nev = $nev;
        $this->nem = $nem;
    }
    
    public function getPersonData() {
        $userData = array('név' => $this->nev, 'nem' => $this->nem, 'faj' => $this->getFaj());
        return $userData;
    }

    public function setPersonName($nev) {
        if(strlen($nev) > 0) {
            $this->nev = $nev;
        }
    }

    public function getfaj() {
        return parent::getFaj() . 'i fajba tartozik.';
    }
}

$person1 = new Person('Timi', 'nő');
$person2 = new Person('Nimród', 'férfi');

var_dump($person1 -> getPersonData());
echo '<br>';
// echo $person1 -> nev;

// $person1 -> nev = 'Tomi';
// echo '<br>';
// echo $person1 -> nev;

$person1 -> setPersonName('Timcsi');
var_dump($person1 -> getPersonData());
?>