
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>

		<?php
		// $browser = get_browser(null, true);
		// if($browser['majorver']!=0 && $browser['majorver']< 46)
		// 	echo '<link rel="stylesheet" type="text/css" href="style/style_mobile_and_old_version.css">';
		// else
		// 	echo '<link rel="stylesheet" type="text/css" href="style/style.css">';
		?>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script
			src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
</head>
<body>

<?php
include("index_header.php");
?>
<div id="formulaire_avis">
	<span>
		<p>Nous acceptons toutes les remarques pour peu qu'elles soient constructives. Si vous avez des suggestions, des idées que vous souhaitez voir prendre vie ou encore des encouragements, c'est ici !</p>

		<form method='post' action='#'>
			<input type="text" name="firstname" placeholder="Pseudonyme" required autofocus><br>
			<textarea required name="avis" placeholder="Ecrivez ici votre avis"></textarea><br>
			<input type="submit" value="Envoyer">
		</form>
	</span>
</div>
<?php
include("#");
?>

	</body>
</html>