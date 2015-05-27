<?php define('__ROOT__', dirname(dirname(__FILE__)));
spl_autoload_extensions(".class.php,.php");
spl_autoload_register(function ($class) {
    require_once(__ROOT__.'/classe/'. $class .'.class.php');
});
?>
<html>
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="../html/style.css" type="text/css"/>
        <link href="../html/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js"></script>
    </head>

    <body class="fond">
        <div id="container col-lg-12">
            <div class="row">

                <?php
                include ('../html/Entete.html');
                ?>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <?php include('../php/navAdmin.php');?>
                </div>

                <div class="col-lg-offset-1">
                    <p>
                        <?php

                        $enfantManager=new enfantManager();
                        $enfant=new Enfant(array('nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'dateNaissance'=>$_POST['dateNaissance'],'sexe'=>$_POST['sexe'],'adresse'=>$_POST['adresse'],'codePostal'=>$_POST['codePostal'],'tel1'=>$_POST['tel1'],'tel2'=>$_POST['tel2'],'tel3'=>$_POST['tel3'],'remarque'=>$_POST['remarque'] ));
                        $result=$enfantManager->add($enfant);
                        if($result==-1)
                            echo " " . strtoupper($_POST['nom']). " " . strtoupper($_POST['prenom']). " ".  "EST DEJA EN TABLE !";
                        else
                            echo "PARTICIPANT NUMERO" . " " . $result . " " . strtoupper($_POST['nom']). " " . strtoupper($_POST['prenom']). " ". "AJOUTE";
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>