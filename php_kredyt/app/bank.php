<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/kalkulator.php" method="post">
	<label for="id_kwota">Kwota kredytu: </label>
	<input id="id_kwota" type="number" name="kwota"  value="<?php if(isset($kwota)) print($kwota); ?>" /><br />
	<label for="id_lat">Na ile lat: </label>
	<input id="id_lat" type="number" name="lat"  value="<?php if(isset($lat)) print($lat); ?>" /><br />
	<label for="id_opr">Oprocentowanie: </label>
	<input id="id_opr" type="number" name="opr"  value="<?php if(isset($opr)) print($opr); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>