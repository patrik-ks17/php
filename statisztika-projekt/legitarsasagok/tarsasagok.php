<?  
	include_once('../weboldal/php/Carriers.php');
	$carriers = new Carriers();
	$legitars = $carriers->getCarriers();
    $rekord = $carriers->getCarrierById(intval($_GET['id']));
	
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Légitársaság</title>
</head>
<body>
    <header>
        <h1><b>Légitársaság</b></h1>
    </header>

    <main>
        <p>
            <a href="../../weboldal/fooldal.html">Főoldal</a> 
            > 
            <a href="../weboldal/legitarsasagok.php">Légitársaságok listája</a>
            >
            <a href="../endeavor/tarsasagok.php"><?= $rekord['name'] ?></a>
        </p>

        <h3><?= $rekord['name'] ?></h3>
        <div class="row">
            <div id="logo">
                <img src="repterkepek/<?= $rekord['id'] ?>.jpg" alt="logó">
            </div>
            <div id="adat" class="col-4">
                <p>Az összes járat:</p>
                <span>1299</span>
                <p>A látogatott repterek száma:</p>
                <span>1173</span>
                <p>A törölt járatok aránya:</p>
                <span>10%</span>
                <p>Az átlagos járat késés:</p>
                <span>572</span>
                <p>A legforgalmasabb reptér:</p>
                <span>9E</span>
            </div>
        </div>
    </main>
</body>
</html>