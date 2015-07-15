<?php
	require_once 'app/start.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Facebook</title>
	    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<style>

	body{
		margin: 100px auto;
		width: 400px;
		text-align: center;
	}

	</style>
</head
<body>

<h2> PHP Facebook </h2>

<?php if (!isset($_SESSION['facebook'])): ?>
	<a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-primary">Iniciar sesion con Facebook!</a>
<?php else: ?>

	<p>
                Bienvenido, <?php echo $facebook_user->getName();
                echo '<br>';
                echo $facebook_user->getID();
                echo '<br>';
                echo $facebook_user->getBirthday();
                echo '<br>';
                echo $facebook_user->getLink();?>
            </p>

            <a href="app/logout.php" class="btn btn-danger">Cerrar sesión</a>
<?php endif; ?>
</body>
</html>