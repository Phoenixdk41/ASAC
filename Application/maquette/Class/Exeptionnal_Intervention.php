<?php

Class Exeptionnal_Intervention {
    private $_Id_EI;
    private $_Duration;
    private $_Rate;

    /**
     * Get the value of _Id_EI
     */ 
    public function getId_EI()
    {
        return $this->_Id_EI;
    }

    /**
     * Set the value of _Id_EI
     *
     * @return  self
     */ 
    public function setId_EI($Id_EI)
    {
        $this->_Id_EI = $Id_EI;

        return $this;
    }

    /**
     * Get the value of _Duration
     */ 
    public function getDuration()
    {
        return $this->_Duration;
    }

    /**
     * Set the value of _Duration
     *
     * @return  self
     */ 
    public function setDuration($Duration)
    {
        $this->_Duration = $Duration;

        return $this;
    }

    /**
     * Get the value of _Rate
     */ 
    public function getRate()
    {
        return $this->_Rate;
    }

    /**
     * Set the value of _Rate
     *
     * @return  self
     */ 
    public function setRate($Rate)
    {
        $this->_Rate = $Rate;

        return $this;
    }
}



?>