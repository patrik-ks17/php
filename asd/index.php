<?php
// $a = "valami";
// $b = "szöveg $a";

// echo $b;

// define("URL", "index.php");

// echo URL;

// class Constans {

//     const URL = "form.php";

//     public function getURL() {
//         return self::URL;
//     }
// }

// $c = new Constans();
// echo $c->getURL();

$tomb = array('piros', 'kék', 'zöld', 'sárga');

$tomb[] = 'lila';

echo $tomb[4].'<br>';

$tomb_assoc = array('szin' => 'piros', 'név' => 'alma', 'kategória' => 'gyümölcs');

$tomb_assoc['fajta'] = 'Idared';
$tomb_assoc['szin'] = 'sárga';

echo $tomb_assoc['fajta'].' '.$tomb_assoc['szin'].'<br>';

$tomb_2d = array(
    array('szin' => 'piros', 'név' => 'alma', 'kategória' => 'gyümölcs'),
    array('szin' => 'zöld', 'név' => 'körte', 'kategória' => 'gyümölcs')
);

echo $tomb_2d[0]['név'].'<br>';

$tomb_2d_assoc = array(
    'kosár' => array('szin' => 'piros', 'név' => 'alma', 'kategória' => 'gyümölcs'),
    'láda' => array('szin' => 'zöld', 'név' => 'körte', 'kategória' => 'gyümölcs')
);

echo $tomb_2d_assoc['kosár']['név'].'<br>';

var_dump($tomb_2d_assoc);

?>