<?php
if (!empty($_GET['page']) && is_file($_GET['page'] . '.php'))
	$page = $_GET['page'];
else
	$page = 'accueil';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
		<title>Site web admin</title>
    </head>
    <body>
		<div id="menu_admin">
			<ul>
				<?php foreach (array('accueil', 'contact') as $value) { ?>
					<li><a href="?page=<?= $value ?>"><?= ($page == $value ? '<strong>' . ucfirst($value) . '</strong>' : ucfirst($value)) ?></a></li>
				<?php } ?>
			</ul>
		</div>
		<div id="content_admin">
			<?php require_once $page . '.php'; ?>
		</div>
    </body>
</html>
