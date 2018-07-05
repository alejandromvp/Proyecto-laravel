<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de barberos</title>
</head>
<body>
	<h1> <?= e($titulo)?></h1>
	<?php foreach($usersview as $user): ?>
		<li><?= e($user) ?></li>
	<?php endforeach; ?>
</body>
</html>