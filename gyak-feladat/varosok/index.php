<? 
	include_once('../Megyek.php');
	include_once('../Varos.php');

	$megyek = new Megyek();
	$varosok = new Varos();
	if (isset($_GET['varosid']))
		$varos_info = $varosok->Varos_Infok(intval($_GET['varosid']));
?>

<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Városok</title>
</head>
<body>
	<main>
		<header>
			<h1>Magyarország városai</h1>
		</header>
			<div class="row">
				<div class="megyek">
					<span>Megyék</span>
					<ul>
						<? foreach($megyek->Minden_megye() as $key => $megye) { ?>
						<tr>
							<li><a href="?megyeid=<?= $megye['id'] ?>"><?= $megye['megyenevek'] ?></a></li>
						</tr>
						<? } ?>
					</ul>
				</div>
				<div class="varosok">
					<span>Városok</span>
					<ul>
						<? if (isset($_GET['megyeid'])) foreach($varosok->Varosok_Id(intval($_GET['megyeid'])) as $key => $varos) { ?>
						<tr>
							<li><a href="?megyeid=<?= intval($_GET['megyeid']) ?>&varosid=<?= $varos['id'] ?>"><?= $varos['varosnevek'] ?></a></li>
						</tr>
						<? } ?>
					</ul>
				</div>
				<div class="varos_info">
					<? if (isset($_GET['varosid'])) {?>
					<span><?= $varos_info['varosnev'] ?> információk</span>
					<ul>
						<tr>
							<p>Típusa: <?= $varos_info['tipus'] ?></p>
							<p>Területe: <?= $varos_info['terulet'] ?></p>
							<p>Népessége: <?= $varos_info['nepesseg'] ?></p>
							<p>Kistérség: <?= $varos_info['kisterseg'] ?></p>
							<p>Járás: <?= $varos_info['jaras']; } ?></p>
						</tr>
					</ul>
				</div>
			</div>
			<footer></footer>
	</main>
</body>
</html>