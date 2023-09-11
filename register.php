<?php
	session_start();
	
    // FORM DATA
    $fullname = $_SESSION['signup-data']['fullname'] ?? null;
    $email = $_SESSION['signup-data']['email'] ?? null;
	$password = $_SESSION['signup-data']['password'] ?? null;
	
	unset($_SESSION['signup-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css_style.css">
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
		<?php if(isset($_SESSION['signup'])): ?>
                    <div class="alert_message error">
                        <p>
                            <?=
                                $_SESSION['signup'];
                                unset($_SESSION['signup']);
                            ?>
                        </p>
                    </div>
                <?php endif ?>
			<form action="signup-logic.php" method="POST" class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input name="fullname" type="text" value="<?= $fullname ?>" class="login__input" placeholder="Full name">
                </div>
                <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input name="email" type="text" value="<?= $email ?>" class="login__input" placeholder="Username / Email">
                    </div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input name="password" type="password" value="<?= $password ?>" class="login__input" placeholder="Password">
                </div>
               
				<button class="button login__submit" name="submit">
					<span class="button__text">Sign Up Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
            </form>
            <br>
            <br>
			<div class="social-login">
                    <button><a href="login.php"><h3>SIGN IN</h3></a></h3></button>
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