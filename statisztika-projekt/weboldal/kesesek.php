<?
    include_once('php/Carriers.php');

    $carriers = new Carriers();
    $leastDelay = $carriers->getLeastDelay();
    
?>

<!DOCTYPE HTML>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stilus.css">
    <link rel="stylesheet" href="css/kesesek.css">
    <title>Késések</title>
</head>
<body>
    <header>
        <h1><b>Késések</b></h1>
    </header>

    <main>
        <p>
            <a href="fooldal.html">Főoldal</a> 
            >
            <a href="">Késések</a>
        </p>
        <h2>3 Legkisebb átlagos késés</h2>
    <div class="row">
        <div id="repter" class="col-3">
            <div id="cup">
                <img src="../img/kupa/gold-cup.png" alt="arany kupa">
                <h5 class="n-m">- <?= $leastDelay[0]['legitarsasag'] ?></h5>
            </div>
            <p>Átlagos késés:</p>
            <span><?= $leastDelay[0]['atlagkeses'] ?> perc</span>
        </div>

        <div id="repter" class="col-3">
            <div id="cup">
                <img src="../img/kupa/silver-cup.png" alt="ezüst kupa">
                <h5 class="n-m">- <?= $leastDelay[1]['legitarsasag'] ?></h5>
            </div>
            <p>Átlagos késés:</p>
            <span><?= $leastDelay[1]['atlagkeses'] ?> perc</span>
        </div>

        <div id="repter" class="col-3">
            <div id="cup">
                <img src="../img/kupa/bronz-cup.png" alt="bronz kupa">
                <h5 class="n-m">- <?= $leastDelay[2]['legitarsasag'] ?></h5>
            </div>
            <p>Átlagos késés:</p>
            <span><?= $leastDelay[2]['atlagkeses'] ?> perc</span>
        </div>
    </div>
    </main>
    <footer>

    </footer>
</body>
</html>