<?php define('__ROOT__', dirname(dirname(__FILE__)));
spl_autoload_extensions(".class.php,.php");
spl_autoload_register(function ($class) {
    require_once(__ROOT__.'/classe/'. $class .'.class.php');
});
?>

<html>
    <head>
        <link href="../html/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js"></script>
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

        <div class="row">
            <div class="col-lg-offset-0 col-lg-2">
                <?php include('../php/navAdmin.php');?>
            </div>

            <div class="col-lg-offset-0 col-lg-2">
                <span class="marge"><input type="search" class="form-control light-table-filter" data-table="order-table" placeholder="Entrez le nom de l'enfant recherché"></span>
            </div>

                <div class=" col-lg-offset-0 col-lg-10">
                    <?php
                    $enfantManager=new enfantManager();
                    $lesEnfants=$enfantManager->getList();
                    ?>
                    <div class="bs-example">
                        <table class="order-table table">
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

                        <script>
                            (function(document) {
                                'use strict';

                                var LightTableFilter = (function(Arr) {

                                    var _input;

                                    function _onInputEvent(e) {
                                        _input = e.target;
                                        var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                                        Arr.forEach.call(tables, function(table) {
                                            Arr.forEach.call(table.tBodies, function(tbody) {
                                                Arr.forEach.call(tbody.rows, _filter);
                                            });
                                        });
                                    }

                                    function _filter(row) {
                                        var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                                        row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                                    }

                                    return {
                                        init: function() {
                                            var inputs = document.getElementsByClassName('light-table-filter');
                                            Arr.forEach.call(inputs, function(input) {
                                                input.oninput = _onInputEvent;
                                            });
                                        }
                                    };
                                })(Array.prototype);

                                document.addEventListener('readystatechange', function() {
                                    if (document.readyState === 'complete') {
                                        LightTableFilter.init();
                                    }
                                });

                            })(document);
                        </script>
                    </div>
                 </div>
            </div>
    </body>
</html>                                		