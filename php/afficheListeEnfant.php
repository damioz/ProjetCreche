<?php define('__ROOT__', dirname(dirname(__FILE__)));
spl_autoload_extensions(".class.php,.php");
spl_autoload_register(function ($class) {
    require_once(__ROOT__.'/classe/'. $class .'.class.php');
});
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link href="../html/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            .bs-example{
                margin: 20px;
            }
        </style>
        <link rel="stylesheet" href="../html/style.css" type="text/css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Liste des enfants</title>
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

        <div class="row col-lg-12">
            <div class="col-lg-offset-0 col-lg-2">
                <?php include('../php/navAdmin.php');?>
            </div>

            <div class=" col-lg-offset-0 col-lg-10">
                <?php
                $enfantManager=new enfantManager();
                $lesEnfants=$enfantManager->getList();
                ?>
                <div class="bs-example">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>DATE DE NAISSANCE</th>
                                <th>SEXE</th>
                                <th>ADRESSE</th>
                                <th>CODE POSTAL</th>
                                <th>TELEPHONE 1</th>
                                <th>TELEPHONE 2</th>
                                <th>TELEPHONE 3</th>
                                <th>REMARQUE</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($lesEnfants as $enfant){?>
                            <tr>
                                <td><?php echo $enfant->getIdEnfant();?><br></td>
                                <td><?php echo $enfant->getNom();?><br></td>
                                <td><?php echo $enfant->getPrenom();?><br></td>
                                <td><?php echo $enfant->getDateNaissance();?><br></td>
                                <td><?php echo $enfant->getSexe();?><br></td>
                                <td><?php echo $enfant->getAdresse();?><br></td>
                                <td><?php echo $enfant->getCodePostal();?><br></td>
                                <td><?php echo $enfant->getTel1();?><br></td>
                                <td><?php echo $enfant->getTel2();?><br></td>
                                <td><?php echo $enfant->getTel3();?><br></td>
                                <td><?php echo $enfant->getRemarque();?><br></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
             </div>
    </body>
</html>                                		