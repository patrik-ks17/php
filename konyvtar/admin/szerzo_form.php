<?
    include_once('../php/Authors.php');

    $authors = new Authors();
    if (isset($_POST['name'])) {
        $res = $authors->saveAuthor($_POST['name']);
        echo $res ? 'Sikeres' : 'Sikertelen';
    }
    if (isset($_GET['author'])) {
        $author = $authors->getAuthorById(intval($_GET['author']));
    }

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvtár program</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <main class="col-6 form-panel">
        <header>
            <h1>Új szerző rögzítése / módosítása</h1>
            <span class="f-right"><a href="../index.php"><img src="../img/logout.png" alt="kilépés" title="kilépés"></a></span>
        </header>
        <form id="form-inside" method="post" enctype="multipart/form-data">
            <label class="col-3" for="name">Név</label>
            <input class="col-6" type="text" name="name" value='<?= isset($author['name']) ? $author['name'] : "" ?>'>            
            <div class="col-12">
                <input type="submit" value="Ment">
                <button type="button" onclick="location.href='index.php'">Bezárás</button>
            </div>
        </form>
    </main>
</body>
</html>