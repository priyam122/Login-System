<?php
require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                <hr class="signup-hr">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<div style="color: rgb(161, 0, 0);background-color: rgb(255, 202, 202);border-radius: 5px;margin: 0px 260px 25px 260px;font-size:medium;">Please fill in all fields!</div>';
                    }
                    elseif ($_GET['error'] == "invaliduidmail") {
                        echo '<div style="color: rgb(161, 0, 0);background-color: rgb(255, 202, 202);border-radius: 5px;margin: 0px 260px 25px 260px;font-size:medium;Invalid Username/E-mail</div>';
                    }
                    elseif ($_GET['error'] == "invaliduid") {
                        echo '<div style="color: rgb(161, 0, 0);background-color: rgb(255, 202, 202);border-radius: 5px;margin: 0px 260px 25px 260px;font-size:medium;">Invalid Username</div>';
                    }
                    elseif ($_GET['error'] == "invalidmail") {
                        echo '<div style="color: rgb(161, 0, 0);background-color: rgb(255, 202, 202);border-radius: 5px;margin: 0px 260px 25px 260px;font-size:medium;">Invalid E-mail</div>';
                    }
                    elseif ($_GET['error'] == "passwordcheck") {
                        echo '<div style="color: rgb(161, 0, 0);background-color: rgb(255, 202, 202);border-radius: 5px;margin: 0px 260px 25px 260px;font-size:medium;">Your passwords do not match</div>';
                    }
                    elseif ($_GET['error'] == "usertaken") {
                        echo '<div style="color: rgb(161, 0, 0);background-color: rgb(255, 202, 202);border-radius: 5px;margin: 0px 260px 25px 260px;font-size:medium;">Username taken</div>';
                    }
                }
                elseif ($_GET['signup'] == "success") {
                    echo '<div style="color: rgb(45, 160, 0);background-color: rgb(219, 255, 202);border-radius: 5px;margin: 0px 260px 25px 260px;font-size:medium;">Signup Successful!</div>';
                }
                ?>
                <form class="form-group " action="includes/signup.inc.php" method="post">
                <input class="form-control form-control-sm signup-form" type="text" name="uid" placeholder="Username">
                <input class="form-control form-control-sm signup-form" type="text" name="mail" placeholder="E-mail">
                <input class="form-control form-control-sm signup-form" type="password" name="pwd" placeholder="Password">
                <input class="form-control form-control-sm signup-form" type="password" name="pwd-repeat" placeholder="Repeat password">
                <br>
                <button class="signup-btn btn btn-secondary" type="submit" name="signup-submit">Sign Up</button>
                </form>
            </section>
        </div>
    </main>

    <?php
require "footer.php";
?>