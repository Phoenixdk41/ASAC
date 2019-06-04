<?php

Class Average_Daily_Rate {
    private $_Id_ADR;
    private $_Start_Date;
    private $_End_Date;



    public function getId_ADR()
    {
        return $this->_Id_ADR;
    }


    public function setId_ADR($Id_ADR)
    {
        $this->_Id_ADR = $Id_ADR;

        return $this;
    }

    
    public function getStart_Date()
    {
        return $this->_Start_Date;
    }

 
    public function setStart_Date($Start_Date)
    {
        $this->_Start_Date = $Start_Date;

        return $this;
    }


    public function getEnd_Date()
    {
        return $this->_End_Date;
    }


    public function setEnd_Date($End_Date)
    {
        $this->_End_Date = $End_Date;

        return $this;
    }
}

?>