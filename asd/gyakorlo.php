<?php

// $nap = 'kedd';
// switch($nap){
//     case 'hétfő': echo 'Ez itt a hétfő! <br>';
//     case 'kedd': echo 'A hét elején vagyunk!'; break;
//     case 'szerda': echo 'A hét közepén vagyunk!'; break;
//     case 'csütörtök': echo 'A hét vége felé vagyunk!'; break;
//     case 'péntek': echo 'A hét végén vagyunk!'; break;
//     default: echo 'A hét vége van!';
// }

//$szam = 10;

// do {
//     echo $szam . ', ';
//     $szam++;
// }while($szam < 10)

// for($i=10; $i > 0; $i--){
//     echo $i . ', ';
// }

// $szinek = array('piros', 'kék', 'zöld', 'sárga');

// foreach($szinek as $szin){
//     echo $szin . '<br>';
// }

// $tomb_assoc = array('szin' => 'piros', 'név' => 'alma', 'kategória' => 'gyümölcs');

// foreach($tomb_assoc as $kulcs => $ertek){
//     echo $kulcs . ': ' . $ertek .'<br>';
// }

$tomb_2d_assoc = array(
    'kosár' => array('szin' => 'piros', 'név' => 'alma', 'kategória' => 'gyümölcs'),
    'láda' => array('szin' => 'zöld', 'név' => 'körte', 'kategória' => 'gyümölcs')
);

foreach($tomb_2d_assoc as $key => $tomb) {
    // if ($key == 'kosár') {
    //     continue;
    // }
    echo '<b>' . $key . '</b><br>';
    foreach($tomb as $kulcs => $ertek) {
        echo $kulcs . ': ' . $ertek .'<br>'; 
        break;
    }
}

?>