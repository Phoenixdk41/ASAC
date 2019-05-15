<?php

Class Person {
    private $_nom = "";
    private $_prenom = "";
    private $_login = "";
    private $_password ="";
    private $_mail = "";
    private $_active = false;

    public function __construct()
    {

        try
        {
            $asac = new PDO ('mysql:host=127.0.0.1;dbname=applicationasac','root','ASAC',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        }

        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
           // $this->setNom($nom);
           // $this->setPrenom($prenom);
          //  $this->setLogin($login);
          //  $this->setPassword($password);
           // $this->setMail($mail);
           // $this->setActive($active);

    }

    // public function connexionBase()
    //         {
    //             try
    //             {
    //                 $asac = new PDO ('mysql:host=127.0.0.1;dbname=applicationasac','root','ASAC',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    //             }
    
    //             catch (Exception $e)
    //             {
    //                 die('Erreur : ' . $e->getMessage());
    //             }
    //         }

    //setters et getters

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getLogin()
    {
        return $this->_login;
    }

    public function setLogin($login)
    {
        $this->_login = $login;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
    }

    public function getMail()
    {
        return $this->_mail;
    }

    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

    public function getActive()
    {
        return $this->_active;
    }

    public function setActive($active)
    {
        $this->_active = $active;
    }
}

?>