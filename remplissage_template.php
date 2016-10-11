<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Contact</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
          
		<link rel="stylesheet" type="text/css" href="style/style.css">

		<script
			src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
	</head>
<body id="template">
	<header id="_template_header">
		<?php 
			include('index_header.php'); 
		?>
	</header>

	<div class="article">
		<div>
			<h1 class="title">Découverte de la forêt</h1>
		</div>
		<div class="bloc1">
			<table>
				<tr>
					<td>
						<h2>Sous-titre 1</h2>
						<p id="texte-gauche">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, veniam, eaque iusto nostrum excepturi deserunt? Vitae, neque, alias? Ea alias tenetur explicabo assumenda eos, doloremque modi aspernatur odio est distinctio.
						</p>
					</td>
					<td>
						<img id="image-droite" src="https://tse3.mm.bing.net/th?id=OIP.M647c41abdcea5ffe31e9ab3ec3621778H0&pid=Api" alt="image_template"/>
					</td>
				</tr>
			</table>
		</div>
   	 	<div class="parallax-container">
      		<div class="parallax">
      			<img src="https://tse3.mm.bing.net/th?id=OIP.M647c41abdcea5ffe31e9ab3ec3621778H0&pid=Api" alt="image_template">
      		</div>
    	</div>
		<div class="bloc1">
			<table>
				<tr>
					<td>
						<h2>Sous-titre 1</h2>
						<p id="texte-gauche">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, veniam, eaque iusto nostrum excepturi deserunt? Vitae, neque, alias? Ea alias tenetur explicabo assumenda eos, doloremque modi aspernatur odio est distinctio.
						</p>
					</td>
					<td>
						<img id="image-droite" src="https://tse3.mm.bing.net/th?id=OIP.M647c41abdcea5ffe31e9ab3ec3621778H0&pid=Api" alt="image_template"/>
					</td>
				</tr>
			</table>
		</div>
		<div class="bloc2">
			<table>
				<tr>
					<td>
						<h2>Sous-titre 2</h2>
						<img id="image-gauche" src="https://tse3.mm.bing.net/th?id=OIP.M647c41abdcea5ffe31e9ab3ec3621778H0&pid=Api" alt="image_template"/>
					</td>
					<td>
						<p id="texte-droite">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, veniam, eaque iusto nostrum excepturi deserunt? Vitae, neque, alias? Ea alias tenetur explicabo assumenda eos, doloremque modi aspernatur odio est distinctio.
						</p>	
					</td>
				</tr>
			</table>
		</div>
	</div>

	<?php include('template_footer.php');?> 

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

	<script>
		$(document).ready(function(){
	     	$('.parallax').parallax();
	    });
	</script>
</body>
</html>
