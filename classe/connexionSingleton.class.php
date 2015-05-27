<?php

class ConnexionSingleton {
    //Connexion à une base de données ODBC en invoquant un driver
    private $_dsn = 'mysql:dbname=creche;host=127.0.0.1';
    private $_user = 'root';
    private $_password = '';
    private $_dbh;
    private static $_instance=null;

    private function __construct() {
        try {
            $this->_dbh = new PDO($this->_dsn, $this->_user, $this->_password);
        }
        catch (PDOException $e) {
            echo 'Echec de la connexion : ' . $e->getMessage();
        }
    }
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new ConnexionSingleton();
        }
        return self::$_instance;
    }
    public function getDbh() {
        return $this->_dbh;
    }

}