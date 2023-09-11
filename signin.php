<?php
    require '../config/constraints.php';

    // FORM DATA
    $credetials = $_SESSION['signin-data']['credetials'] ?? null;
    $password = $_SESSION['signin-data']['password'] ?? null;

    unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META LINKS -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- PAGE TITLE -->
        <title>Login</title>

        <!-- CUSTOM STYLESHEET -->
        <link rel="stylesheet" href="<?= ROOT_URL ?>css/form.css">

        <!-- BOXICON CSS LINK -->
        <link href='<?= ROOT_URL ?>css/boxicons/css/boxicons.min.css' rel='stylesheet'>

    </head>

    <body>
        <section class="form_section">
            <div class="container form_section-container">
                <h1 class="alert_message">GW<span class="alert_message success" style="background: none; padding: 0;">SC</span></h1>
                <?php if(isset($_SESSION['signup-success'])): ?>
                    <div class="alert_message success">
                        <p>
                            <?=
                                $_SESSION['signup-success'];
                                unset($_SESSION['signup-success']);
                            ?>
                        </p>
                    </div>
                <?php elseif(isset($_SESSION['signin'])): ?>
                    <div class="alert_message error">
                        <p>
                            <?=
                                $_SESSION['signin'];
                                unset($_SESSION['signin']);
                            ?>
                        </p>
                    </div>
                <?php endif ?>
                <form action="<?= ROOT_URL ?>logics/signin-logic.php" name="form" method="POST">
                    <div class="input-div one">
                        <div class="i">
                            <i class='bx bxs-user'></i>
                        </div>
                        <div>
                            <input type="text" name="credetials" placeholder="Username or Email" value="<?= $credetials ?>" class="input">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class='bx bxs-lock'></i>
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Password" value="<?= $password ?>" class="input">
                        </div>
                    </div>
                        <?php if(isset($_SESSION['attempts'])): ?>
                            <?=
                                isset($_SESSION['locked']);
                                unset($_SESSION['locked']);
                            ?>
                        <?php else: ?>
                            <button type="submit" name="submit" class="btn" style="width: 100%;">Sign In</button>
                        <?php endif ?>
                </form>
                    <br><br>
                <small>
                    Don't have an account? <a href="<?= ROOT_URL ?>forms/signup.php">Sign Up</a>
                </small>
                    <br><br>
                <small>
                    Learn more about <a href="<?= ROOT_URL ?>about.php">Global Wild Swimming and Camping</a> or visit our <a href="<?= ROOT_URL ?>">Home Page</a>
                </small>
            </div>
        </section>
        <script type="text/javascript" src="<?= ROOT_URL ?>js/form.js"></script>
    </body>