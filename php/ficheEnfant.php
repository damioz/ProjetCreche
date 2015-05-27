<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="../html/style.css" type="text/css"/>
        <link href="../html/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <title>INITIA ASBL</title>

    </head>

    <body class="fond">

        <div id="container col-lg-12">
            <div class="row">
                <header>
                    <?php
                    include_once('../html/Entete.html');
                    ?>
                </header>
            </div>

            <div class="row ">

                <div class="col-lg-2">
                    <?php include('../php/navAdmin.php');?>
                </div>

                <div class="col-lg-offset-2 col-lg-2">
                    <a href="formAjoutEnfant.php"><img src="../html/images/legovert.jpg" width="200" height="250"></a>
                </div>
                <div class="col-lg-offset-2 col-lg-2">
                    <a href="#"><img src="../html/images/legorouge.jpg" width="200" height="250"></a>
                </div>
                <div class="col-lg-offset-2 col-lg-2">
                    <a href="formModifEnfant.php"><img src="../html/images/legojaune.jpg" width="200" height="250"></a>
                </div>
                <div class="col-lg-offset-2 col-lg-2">
                    <a href="afficheListeEnfant.php"><img src="../html/images/legobleu.jpg" width="200" height="250"></a>
                </div>
            </div>
        </div>

    </body>
</html>
