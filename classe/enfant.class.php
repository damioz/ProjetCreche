<?php


class Enfant {
    private $_idEnfant;
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_sexe;
    private $_adresse;
    private $_codePostal;
    private $_tel1;
    private $_tel2;
    private $_tel3;
    private $_remarque;


    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @return mixed
     */
    public function getIdEnfant()
    {
        return $this->_idEnfant;
    }

    /**
     * @param mixed $idEnfant
     */
    public function setIdEnfant($idEnfant)
    {
        $this->_idEnfant = $idEnfant;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->_sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->_sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->_codePostal;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->_codePostal = $codePostal;
    }

    /**
     * @return mixed
     */
    public function getTel1()
    {
        return $this->_tel1;
    }

    /**
     * @param mixed $tel1
     */
    public function setTel1($tel1)
    {
        $this->_tel1 = $tel1;
    }

    /**
     * @return mixed
     */
    public function getTel2()
    {
        return $this->_tel2;
    }

    /**
     * @param mixed $tel2
     */
    public function setTel2($tel2)
    {
        $this->_tel2 = $tel2;
    }

    /**
     * @return mixed
     */
    public function getTel3()
    {
        return $this->_tel3;
    }

    /**
     * @param mixed $tel3
     */
    public function setTel3($tel3)
    {
        $this->_tel3 = $tel3;
    }

    /**
     * @return mixed
     */
    public function getRemarque()
    {
        return $this->_remarque;
    }

    /**
     * @param mixed $remarque
     */
    public function setRemarque($remarque)
    {
        $this->_remarque = $remarque;
    }



    function hydrate(array $donnees)
    {
        foreach($donnees as $key => $value)
        {
            $setter = 'set'.ucfirst($key);
            if(method_exists($this, $setter))
                $this->$setter($value);
        }
    }
}