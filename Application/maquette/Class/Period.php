<?php

Class Period {
    private $_Id_Period;
    private $_K_Year;
    private $_K_Month;

    /**
     * Get the value of _Id_Period
     */ 
    public function getId_Period()
    {
        return $this->_Id_Period;
    }

    /**
     * Set the value of _Id_Period
     *
     * @return  self
     */ 
    public function setId_Period($Id_Period)
    {
        $this->_Id_Period = $Id_Period;

        return $this;
    }

    /**
     * Get the value of _K_Year
     */ 
    public function get_K_Year()
    {
        return $this->_K_Year;
    }

    /**
     * Set the value of _K_Year
     *
     * @return  self
     */ 
    public function setK_Year($K_Year)
    {
        $this->_K_Year = $K_Year;

        return $this;
    }

    /**
     * Get the value of _K_Month
     */ 
    public function getK_Month()
    {
        return $this->_K_Month;
    }

    /**
     * Set the value of _K_Month
     *
     * @return  self
     */ 
    public function setK_Month($K_Month)
    {
        $this->_K_Month = $K_Month;

        return $this;
    }
}

?>