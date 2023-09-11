<?php
	session_start();

	// FORM DATA
    $email = $_SESSION['signin-data']['email'] ?? null;
	$password = $_SESSION['signin-data']['password'] ?? null;
	
	unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN IN</title>
    <link rel="stylesheet" href="css_style.css">
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form method="POST" action="signin-logic.php" class="login">
		<?php if(isset($_SESSION['signin'])): ?>
                    <div class="alert_message error">
                        <p>
                            <?=
                                $_SESSION['signin'];
                                unset($_SESSION['signin']);
                            ?>
                        </p>
                    </div>
		<?php elseif(isset($_SESSION['signup-success'])): ?>
                    <div class="alert_message error">
                        <p>
                            <?=
                                $_SESSION['signup-success'];
                                unset($_SESSION['signup-success']);
                            ?>
                        </p>
                    </div>
                <?php endif ?>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input name="email" value="<?= $email ?>" type="text" class="login__input" placeholder="Username / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input name="password" value="<?= $password ?>" type="password" class="login__input" placeholder="Password">
				</div>
				<button class="button login__submit" name="submit">
					<span class="button__text">Sign In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<button><a href="register.php"><h3>SIGN UP</h3></a></h3></button>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div> 
</body>
</html>
