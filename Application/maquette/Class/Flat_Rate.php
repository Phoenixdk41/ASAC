<?php

Class Flate_Rate {
    private $_Id_FR;
    private $_FR_Name;
    private $_Amount;

    

    /**
     * Get the value of _Id_FR
     */ 
    public function getId_FR()
    {
        return $this->_Id_FR;
    }

    /**
     * Set the value of _Id_FR
     *
     * @return  self
     */ 
    public function setId_FR($Id_FR)
    {
        $this->_Id_FR = $Id_FR;

        return $this;
    }

    /**
     * Get the value of _FR_Name
     */ 
    public function getFR_Name()
    {
        return $this->_FR_Name;
    }

    /**
     * Set the value of _FR_Name
     *
     * @return  self
     */ 
    public function setFR_Name($FR_Name)
    {
        $this->_FR_Name = $_FR_Name;

        return $this;
    }

    /**
     * Get the value of _Amount
     */ 
    public function get_Amount()
    {
        return $this->_Amount;
    }

    /**
     * Set the value of _Amount
     *
     * @return  self
     */ 
    public function setAmount($Amount)
    {
        $this->_Amount = $Amount;

        return $this;
    }
}


?>