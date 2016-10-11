 <?php $GLOBALS['lang'] = 'fr';      // On affecte temporairement la variable globale 'lang' à fr (futurement importée de la bdd)

/*  Liste des variables php à définir avant d'inclure template.php :
    $page_title : le nom de la page invoquée
    $category :   la catégorie de la page
    (à setup en constantes en haut de page via la génération de pages si on a le temps d'en faire une)
*/
$page_title = 'Ma super page';
$category = 'travail';

/*      /!\ Cet appel à la base de donnée renvoie integer(0) quelle que soit la requête effectuée. /!\
------------------------------------------------------------------------------------------------------------------------
try {
    $db = new PDO('mysql:host=localhost;dbname=haras_de_la_metamorphose', 'root', 'toto');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$request = $db->exec('SELECT * FROM articles');
var_dump($request);
while($donnee = $request->fetch()){
    for($i=0; $i < count($donnee)/2; $i++)
        echo $key.":\t".$value.'<br/>';
--------------------------------------------------------------------------------------------------------------------- */

echo '<html lang='.$GLOBALS["lang"].'>'     // On écrit <html lang=[valeur de la variable lang]>
    .'<head>'
        .'<meta charset="UTF-8">'
        .'<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">'
        .'<meta http-equiv="X-UA-Compatible" content="ie=edge">'
        .'<link rel="stylesheet" href="style/style.css">'
        .'<title><?php echo $page_title?></title>'
    .'</head>'
    .'<body>'
        .'<div id="'.$category.'">'
            .'<header id="_template_header">';
                include 'header.php';
            echo '</header>';
 ?>

            <!--  Éléments entre le header et les articles (HTML zone!)  -->

            <?php
            $articles = [
                array(
                    'id' => 1,
                    'title' => 'Blackberry 10 will do that!',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam blanditiis corporis earum et facere fugiat, fugit ipsam iusto laboriosam maiores molestias necessitatibus nulla repellat voluptate. Ab id officiis voluptates?",
                    'image' => 'http://i.stack.imgur.com/rTZKA.png',
                    'image_alt' => 'Image trop choupinoupinette de poneys et de licornes'
                ),
                array(
                    'id' => 2,
                    'title' => 'We made a lot of articles!',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam blanditiis corporis earum et facere fugiat, fugit ipsam iusto laboriosam maiores molestias necessitatibus nulla repellat voluptate. Ab id officiis voluptates?",
                    'image' => 'http://i.stack.imgur.com/rTZKA.png',
                    'image_alt' => 'Image trop choupinoupinette de poneys et de licornes'
                ),
                array(
                    'id' => 3,
                    'title' => 'USDA ignores Organic Standards Board\'s recommendation to prohibit nanoparticles in organic food',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam blanditiis corporis earum et facere fugiat, fugit ipsam iusto laboriosam maiores molestias necessitatibus nulla repellat voluptate. Ab id officiis voluptates?",
                    'image' => 'http://i.stack.imgur.com/rTZKA.png',
                    'image_alt' => 'Image trop choupinoupinette de poneys et de licornes'
                )
            ];
            /*$raw_articles = [];  // Récupère les données articles associées à la table dans la base de donnée
            while($article = $raw_articles->fetch())*/
            echo '<div id="_template">';
                foreach($articles as $article)
                {
                    // $article
                    echo '<section class="article"" id="article-'.$article['id'].'">'
                        .'<div class="elements">'
                            .'<div class="article-text">'
                                .'<h4>'.$article['title'].'</h4>'
                                .'<p>'.$article['content'].'</p>'
                            .'</div>'   // Ferme la div 'article-text'
                            .'<aside class="article-image"><img src="'.$article['image'].'" alt="'.$article['image_alt'].'"/></aside>'
                        .'</div>'     // Ferme la div '.elements'
                    .'</section>';  // Ferme la section '.article #article-$article['id']'
                }

            echo '</div>';     // Ferme la div '#_template'
            ?>

            <!--  Éléments entre les articles et le footer (HTML zone!)  -->
            <footer id="_template_footer">
                <?php include 'footer.php';?>
            </footer>
        echo '</div>'       // Ferme la div '#$category'
    .'</body>'
.'</html>';
?>