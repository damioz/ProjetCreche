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

            <div class="row">
                <?php
                    if(isset($_SESSION['login'])) {                         //admin
                        if ($_SESSION['type'] == 'admin') {?>
                            <div class="col-lg-2">
                                <?php include('../php/navAdmin.php');?>
                            </div>
                            <div class="col-lg-offset-0 col-lg-10">
                                <?php include('../php/textAdmin.php');?>
                            </div>
                        <?php
                        } elseif ($_SESSION['type'] == 'puericultrice') {   //puericultrice
                            include('../php/navPuericultrice.php');
                        }
                    }
                    else {
                          include('../php/navGeneral.php');               //general
                    }
                ?>
            </div>
        </div>

    </body>
</html>
