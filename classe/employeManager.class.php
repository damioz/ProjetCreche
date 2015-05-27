<?php

spl_autoload_register();
class employeManager {

    private $_db;

    public function __construct() {
        $this->_db = connexionSingleton::getInstance()->getDbh();
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function getByLogin($login, $password) {
        $requete = $this->_db->prepare('select count(*) from employe where login like :login and password like :password');
        $requete->bindValue(':login', $login);
        $requete->bindValue(':password', $password);
        $requete->execute();

        $result = $requete->fetch();
        return $result[0];
    }
}