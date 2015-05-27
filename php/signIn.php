<html>
    <head>
        <link rel="stylesheet" href="../html/style.css" type="text/css"/>
        <link href="../html/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="fond">
        <div id="container col-lg-12">

            <div class="row">

                <header>
                    <?php
                    include_once('../html/Entete.html');
                    ?>

                    <title>INITIA ASBL - IDENTIFICATION</title>

                </header>
            </div>
            <?php include('../php/navGeneral.php');?>

            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-2">
                    <div class="account-wall">
                        <img class="profile-img" src="../html/images/logo.jpg"
                             alt="">
                        <form class="form-signin" action="validerLogin.php" method=post>
                            <input type="text" class="form-control" placeholder="login" name="login" required autofocus>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            <label class="checkbox pull-left">
                                <input type="checkbox" value="remember-me">
                                Remember me
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>