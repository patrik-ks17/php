<?
	include_once('php/Carriers.php');

	$carriers = new Carriers();
    $top_flights = $carriers->getTopFlights();
    foreach ($carriers->getTopFlights() as $key => $flights)
        $top_fl_name[] = explode(':',$flights['legitarsasag'])[1]; 
?>

<!DOCTYPE HTML>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stilus.css">
    <link rel="stylesheet" href="css/repterek.css">
    <title>Repterek</title>
</head>
<body>
    <header>
        <h1><b>Repterek</b></h1>
    </header>

    <main>
        <p>
            <a href="fooldal.html">Főoldal</a> 
            >
            <a href="">Repterek</a>
        </p>
        <h2>3 Legforgalmasabb Reptér</h2>
    
        <div class="row">
        <div id="repter" class="col-3">
            <div id="cup">
                <img src="../img/kupa/gold-cup.png" alt="arany kupa">
                <h5 class="n-m">- <?= $top_fl_name[0] ?></h5>
            </div>
            <p>Az összes járat:</p>
            <span><?= $top_flights[0]['osszesjarat'] ?></span>
            <p>Kód:</p>
            <span><?= $top_flights[0]['leg_kod'] ?></span>
            <p>Koordináták:</p>
            <span>44.1193661197°N, -123.212118228°E</span>
        </div>
       

        <div id="repter" class="col-3">
            <div id="cup">
                <img src="../img/kupa/silver-cup.png" alt="ezüst kupa">
                <h5 class="n-m">- <?= $top_fl_name[1] ?></h5>
            </div>
            <p>Az összes járat:</p>
            <span><?= $top_flights[1]['osszesjarat'] ?></span>
            <p>Kód:</p>
            <span><?= $top_flights[1]['leg_kod'] ?></span>
            <p>Koordináták:</p>
            <span>18.4367716667°N, -66.0014277783°E</span>
        </div>

        <div id="repter" class="col-3">
            <div id="cup">
                <img src="../img/kupa/bronz-cup.png" alt="bronz kupa">
                <h5 class="n-m">- <?= $top_fl_name[2] ?></h5>
            </div>
            <p>Az összes járat:</p>
            <span><?= $top_flights[2]['osszesjarat'] ?></span>
            <p>Kód:</p>
            <span><?= $top_flights[2]['leg_kod'] ?></span>
            <p>Koordináták:</p>
            <span>32.9277196562°N, -97.0034683301°E</span>
        </div>
    </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>