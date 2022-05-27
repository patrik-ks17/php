<?
	include_once('php/Carriers.php');

	$carriers = new Carriers();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stilus.css">
    <link rel="stylesheet" href="css/legitarsasagok.css">
    <title>Légitársaságok listája</title>
</head>
<body>
    <header>
        <h1><b>Légitársaságok listája</b></h1>
    </header>

    <main>
        <p>
            <a href="fooldal.html">Főoldal</a> 
            > 
            <a href="">Légitársaságok listája</a>
        </p>
        <ul>
        <? foreach ($carriers->getCarriers() as $key => $legitars) {?>
            <? 
            if (!strpos($legitars['legitarsasag'], 'LLC')) {
                $tarsasag = explode(' ',$legitars['legitarsasag']);
                $tars_nev = strtolower($tarsasag[0]);
            } else {
                $tarsasag = explode(' ',$legitars['legitarsasag']);
                $tars_nev = strtolower($tarsasag[0] . '_llc');
            }
            ?>
            <li>
                 <a href="../legitarsasagok/<?= $tars_nev ?>/<?= $tars_nev ?>.php?id=<?= $legitars['azon'] ?>"><?= $legitars['legitarsasag'] ?></a> 
            </li>    
        <? } ?>
            
        </ul>
    </main>
    <footer>
        
    </footer>
</body>
</html>