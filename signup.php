<?php

    // FORM DATA
    $fullname = $_SESSION['signup-data']['fullname'] ?? null;
    $email = $_SESSION['signup-data']['email'] ?? null;
    $password = $_SESSION['signup-data']['password'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META LINKS -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- PAGE TITLE -->
        <title>Register</title>

        <!-- CUSTOM STYLESHEET -->
        <link rel="stylesheet" href="<?= ROOT_URL ?>css/form.css">

        <!-- BOXICON CSS LINK -->
        <link href='<?= ROOT_URL ?>css/boxicons/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <section class="form_section">
            <div class="container form_section-container">
                <h2 class="alert_message">Get<span class="alert_message success" style="background: none; padding: 0;"> Started</span></h2>
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
                <form action="<?= ROOT_URL ?>logics/signup-logic.php" enctype="multipart/form-data" method="POST">
                    <div class="input-div">
                        <div class="i">
                            <i class='bx bx-group'></i>
                        </div>
                        <div>
                            <input type="text" name="firstname" placeholder="Enter Firstname" value="<?= $firstname ?>" class="input">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class='bx bxs-group'></i>
                        </div>
                        <div>
                            <input type="text" name="lastname" placeholder="Enter Lastname" value="<?= $lastname ?>" class="input">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class='bx bxs-user'></i>
                        </div>
                        <div>
                            <input type="text" name="username" placeholder="Create Username" value="<?= $username ?>" class="input">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class='bx bxs-credit-card'></i>
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Enter Email" value="<?= $email ?>" class="input">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class='bx bxs-lock-open'></i>
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Create Password" value="<?= $password ?>" class="input">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i class='bx bxs-lock'></i>
                        </div>
                        <div>
                            <input type="password" name="confirm" placeholder="Confirm Password" value="<?= $confirm ?>" class="input">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn" style="width: 100%;">Sign Up</button>
                </form>
                    <br><br>
                <small>
                    Already have an account? <a href="<?= ROOT_URL ?>forms/signin.php">Sign In</a>
                </small>
                    <br><br>
            </div>
        </section>
        <script type="text/javascript" src="<?= ROOT_URL ?>js/form.js"></script>
    </body>