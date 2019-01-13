<?php
if (!empty($_GET['page']) && is_file('section/' . $_GET['page'] . '.php'))
	$page = $_GET['page'];
else
	$page = 'accueil';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
		<div id="menu_admin">
			<ul>
				<li><a href="?page=accueil"><?= ($page == 'accueil' ? '<strong>Accueil</strong>' : 'Accueil') ?></a></li>
			</ul>
		</div>
		<div id="content_admin">
			<?php require_once $page . '.php'; ?>
		</div>
    </body>
</html>
