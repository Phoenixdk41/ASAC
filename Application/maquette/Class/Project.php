<?php

Class Project {
    private $_Id_Project;
    private $_Project_Name;
    private $_PTF;
    private $_MACO;
    private $_BDC;
    private $_State;
    private $_Start_Date;
    private $_End_Date;

    public function hydrateProject()
    {

    }


    // Getters and Setters
    public function getId_Project()
    {
        return $this->_Id_Project;
    }

    public function setId_Project($Id_Project)
    {
        $Id_Project = (int) $Id_Project;
        
        if ($Id_Project >= 0)
        {
            $this->_Id_Project = $Id_Project;
        }
    }

    public function getProject_Name()
    {
        return $this->_Project_Name;
    }

    public function setProject_Name($Project_Name)
    {
        if (is_string($Project_Name))
        {
            $this->_Project_Name = $Project_Name;
        }
    }

    public function getPTF()
    {
        return $this->_PTF;
    }

    public function setPTF($PTF)
    {
        if (is_string($PTF))
        {
            $this->_PTF = $PTF;
        }
    }

    public function getMACO()
    {
        return $this->_MACO;
    }

    public function setMACO($MACO)
    {
        if (is_string($MACO))
        {
            $this->_MACO = $MACO;
        }
    }

    public function getBDC()
    {
        return $this->_BDC;
    }

    public function setBDC($BDC)
    {
        if (is_string($BDC))
        {
            $this->_BDC = $BDC;
        }
    }

    public function getState()
    {
        return $this->_State;
    }

    public function setState($State)
    {
        $this->_State = $State;
    }

    public function getStart_Date()
    {
        return $this->_Start_Date;
    }

    public function setStart_Date($Start_Date)
    {
        $this->_Start_Date = $Start_Date;
    }

    public function getEnd_Date()
    {
        $this->_End_Date;
    }

    public function setEnd_Date($End_Date)
    {
        $this->_End_Date = $End_Date;
    }
}

?>