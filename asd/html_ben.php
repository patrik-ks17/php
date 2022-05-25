<? 
    include_once('szoveg.php');
    $kedvenc='Pici'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP HTML-ben</h1>
    
    <?
       echo getBooksList($books);
    ?>


    <h2>Ciklus használata</h2>
    <ul>
    <? 
        for($i=0; $i < 10; $i++) { ?>
          <li>Az i értéke most: <?= $i ?></li>  
    <? }

    ?>
    </ul>











    
</body>
</html>