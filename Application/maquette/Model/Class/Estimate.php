<?php

Class Estimate {
    private $_Id_Estimate;

    

    /**
     * Get the value of _Id_Estimate
     */ 
    public function getId_Estimate()
    {
        return $this->_Id_Estimate;
    }

    /**
     * Set the value of _Id_Estimate
     *
     * @return  self
     */ 
    public function setId_Estimate($Id_Estimate)
    {
        $this->_Id_Estimate = $Id_Estimate;

        return $this;
    }
}

?>