<?php

$a = "kjdfhksfk";
$tomb = array('piros', 'kék', 'zöld', 'sárga');
echo 'A tömb elemszáma: ' . count($tomb) . '<br><br>';

echo 'Az utolsó elem: ' . end($tomb) . '<br><br>';
echo 'Az utolsó elem: ' . $tomb[count($tomb)-1]. '<br><br>';

var_dump(is_array($tomb));
echo  '<br><br>';

$szo = 'egeszseges';
echo substr($szo, 0, 6) . '<br><br>';

var_dump(in_array('lila', $tomb));
echo '<br><br>';

$string = 'brokkoli,répa,saláta,zeller';

var_dump(explode(',', $string));
echo '<br><br>';

echo implode(', ', $tomb) . '<br><br>';

echo str_replace(',', '-', $string) . '<br><br>';

echo 'Az alma szó hossza: ' . strlen('alma') . '<br><br>';

var_dump(array_merge($tomb, explode(',', $string)));
echo '<br><br>';

echo 'A keresett szó pozíciója: ' . strpos('egészség és fittség', 'és') . '<br><br>';

$str = '    felhasználó    név     ';
echo $str . ' -> ' . strlen($str) . '<br><br>';
echo trim($str) . ' -> ' . strlen(trim($str)) . '<br><br>';

$str = '&nbsp;&nbsp;&nbsp;&nbsp;  felhasználó    név     ';
echo $str . ' -> ' . strlen($str) . '<br><br>';
echo trim($str) . ' -> ' . strlen(trim($str)) . '<br><br>';

$tomb_assoc = array('szin' => 'piros', 'név' => 'alma', 'kategória' => 'gyümölcs');

var_dump(array_keys($tomb_assoc));
echo '<br><br>';

var_dump(array_key_exists('fajta', $tomb_assoc));
echo '<br><br>';

var_dump(array_values($tomb_assoc));
echo '<br><br>';

echo array_push($tomb, 'lila', 'narancssárga');
echo '<br><br>';
var_dump($tomb);
echo '<br><br>';

echo array_pop($tomb);
echo '<br><br>';
var_dump($tomb);
echo '<br><br>';

echo array_unshift($tomb, 'türkiz', 'neonzöld');
echo '<br><br>';
var_dump($tomb);
echo '<br><br>';

echo array_shift($tomb);
echo '<br><br>';
var_dump($tomb);
echo '<br><br>';

echo str_repeat('...és...', 10);
echo '<br><br>';

echo 'round: ' . round(0.654652) . '<br><br>';
echo 'round 2 tizedesjegyre: ' . round(0.654652, 2) . '<br><br>';

echo 'floor: ' . floor(0.654652) . '<br><br>';
echo 'ceil: ' . ceil(0.654652) . '<br><br>';

var_dump(sort($tomb));
echo '<br><br>';

var_dump($tomb);
echo '<br><br>';

$tomb_assoc = array('v' => 'cica', 'b' => 'vadmacska', 'c' => 'borz');

var_dump(sort($tomb_assoc));
echo '<br><br>';

var_dump($tomb_assoc);
echo '<br><br>';

$tomb_assoc = array('v' => 'cica', 'b' => 'vadmacska', 'c' => 'borz');

var_dump(asort($tomb_assoc));
echo '<br><br>';

var_dump($tomb_assoc);
echo '<br><br>';

$tomb_assoc = array('v' => 'cica', 'b' => 'vadmacska', 'c' => 'borz');

var_dump(ksort($tomb_assoc));
echo '<br><br>';

var_dump($tomb_assoc);
echo '<br><br>';


?>