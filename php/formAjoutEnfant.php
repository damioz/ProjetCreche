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
        <div class="col-lg-2">
            <?php include('../php/navAdmin.php');?>
        </div>

        <div class="col-lg-offset-4 form-style-3">
            <form action="ajoutEnfant.php" method=post>
                <fieldset><legend>Coordonnées de l'enfant</legend>
                    <label for="field1"><span>Nom <span class="required">*</span></span><input type="text" class="form-control" name="nom" value="" /></label>
                    <label for="field2"><span>Prenom <span class="required">*</span></span><input type="text" class="form-control" name="prenom" value="" /></label>
                    <label for="field3"><span>Date de naissance <span class="required">*</span></span><input type="date" class="form-control" name="dateNaissance" value="" /></label>
                    <label for="field4"><span>Sexe<span class="required">*</span></span><br>
                        <input type="radio" name="sexe" value="M">&nbsp;M&nbsp;&nbsp; <input type="radio" name="sexe" value="F" checked>&nbsp;F
                    <label for="field5"><span>Adresse <span class="required">*</span></span><input type="text" class="form-control" name="adresse" value="" /></label>
                    <label for="field6"><span>Code postal <span class="required">*</span></span><input type="text" class="form-control" name="codePostal" value="" /></label>
                    <label for="field7"><span>Téléphone 1 <span class="required">*</span></span><input type="text" class="form-control" name="tel1" value="" /></label>
                    <label for="field8"><span>Téléphone 2<span class="required">*</span></span><input type="text" class="form-control" name="tel2" value="" /></label>
                    <label for="field9"><span>Téléphone 3 <span class="required">*</span></span><input type="text" class="form-control" name="tel3" value="" /></label>
                    <label for="field10"><span>Remarque <span class="required">*</span></span><input type="text" class="form-control" name="remarque" value="" /></label>
                    <button type="submit" class="col-lg-offset-0 btn btn-primary">Envoyer</button>
                </fieldset>
            </form>
        </div>

    </div>
</div>

</body>
</html>
