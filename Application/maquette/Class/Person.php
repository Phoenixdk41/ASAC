<?php

Class Person {
    private $_Id_User;
    private $_Last_Name;
    private $_First_Name;
    private $_Login;
    private $_Password;
    private $_Mail;
    private $_Active;
    private $_ifConnect = false;

    public function hydrate(array $donneesBdd)
    {
        if (isset($donneesBdd['Id_User']))
        {
            $this->setId_User($donneesBdd['Id_User']);
        }

        if (isset($donneesBdd['Last_Name']))
        {
            $this->setLast_Name($donneesBdd['Last_Name']);
        }

        if (isset($donneesBdd['First_Name']))
        {
            $this->setFirst_Name($donneesBdd['First_Name']);
        }

        if (isset($donneesBdd['Login']))
        {
            $this->setLogin($donneesBdd['Login']);
        }

        if (isset($donneesBdd['Password']))
        {
            $this->setPassword($donneesBdd['Password']);
        }

        if (isset($donneesBdd['Mail']))
        {
            $this->setMail($donneesBdd['Mail']);
        }

        if (isset($donneesBdd['Active']))
        {
            $this->setActive($donneesBdd['Active']);
        }

    }

    //setters et getters
    public function getId_User()
    {
        return $this->_Id_User;
    }

    public function setId_User($Id_User)
    {
        $Id_User = (int) $Id_User;
        
        if ($Id_User >= 0)
        {
            $this->_Id_User = $Id_User;
        }
    }

    public function getLast_Name()
    {
        return $this->_Last_Name;
    }

    public function setLast_Name($Last_Name)
    {
        if (is_string($Last_Name))
        {
            $this->_Last_Name = $Last_Name;
        }
    }

    public function getFirst_Name()
    {
        return $this->_First_Name;
    }

    public function setFirst_Name($First_Name)
    {
        if (is_string($First_Name))
        {
            $this->_First_Name = $First_Name;
        }

    }

    public function getLogin()
    {
        return $this->_Login;
    }

    public function setLogin($Login)
    {
        if (is_string($Login))
        {
            $this->_Login= $Login;
        }
    }

    public function getPassword()
    {
        return $this->_Password;
    }

    public function setPassword($Password)
    {
        $this->_Password = $Password;
    }

    public function getMail()
    {
        return $this->_Mail;
    }

    public function setMail($Mail)
    {
        if (is_string($Mail))
        {
            $this->_Mail= $Mail;
        }
    }

    public function getActive()
    {
        return $this->_Active;
    }

    public function setActive($Active)
    {
        $this->_Active = $Active;
    }

    public function getIfConnect()
    {
        return $this->_ifConnect;
    }

    public function setIfConnect($ifConnect)
    {
        if (is_bool($ifConnect))
        {
            $this->_ifConnect= $ifConnect;
        }
    }
}
?>