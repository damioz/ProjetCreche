<?php

spl_autoload_register();
class enfantManager {

    private $_db;

    public function __construct() {
        $this->_db = connexionSingleton::getInstance()->getDbh();
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getList() {
        $requete = $this->_db->prepare('select * from enfant order by nom');
        $requete->execute();

        $result = $requete->fetchAll(PDO::FETCH_ASSOC);
        $lesEnfants = array();
        foreach($result as $donnee) {
            $lesEnfants[] = new Enfant($donnee);
        }
        return $lesEnfants;
    }

    public function getByIdEnfant($idEnfant) {
        $requete = $this->_db->prepare('select * from enfant where idEnfant=:idEnfant order by nom');
        $requete->bindValue(':idEnfant', $idEnfant);
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_BOTH);
        $enfant = new Enfant($result);
        return $enfant;
    }

    public function add($enfant) {
        $requete = $this->_db->prepare('select ajoutEnfant(:nom, :prenom, :dateNaissance, :sexe, :adresse, :codePostal, :tel1, :tel2, :tel3, :remarque)');
        $requete->bindValue('nom', $enfant->getNom());
        $requete->bindValue('prenom', $enfant->getPrenom());
        $requete->bindValue('dateNaissance', $enfant->getDateNaissance());
        $requete->bindValue('sexe', $enfant->getSexe());
        $requete->bindValue('adresse', $enfant->getAdresse());
        $requete->bindValue('codePostal', $enfant->getCodePostal());
        $requete->bindValue('tel1', $enfant->getTel1());
        $requete->bindValue('tel2', $enfant->getTel2());
        $requete->bindValue('tel3', $enfant->getTel3());
        $requete->bindValue('remarque', $enfant->getRemarque());


        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_BOTH);

        return $result[0];
    }
}