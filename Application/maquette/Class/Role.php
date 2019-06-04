<?php

Class Role {
    private $_Id_Role;

    /**
     * Get the value of _Id_Role
     */ 
    public function getId_Role()
    {
        return $this->_Id_Role;
    }

    /**
     * Set the value of _Id_Role
     *
     * @return  self
     */ 
    public function setId_Role($Id_Role)
    {
        $this->_Id_Role = $Id_Role;

        return $this;
    }
}


?>