<?php

Class Consumed {
    private $_Id_Consumed;

    /**
     * Get the value of _Id_Consumed
     */ 
    public function getId_Consumed()
    {
        return $this->_Id_Consumed;
    }

    /**
     * Set the value of _Id_Consumed
     *
     * @return  self
     */ 
    public function setId_Consumed($Id_Consumed)
    {
        $this->_Id_Consumed = $Id_Consumed;

        return $this;
    }
}

?>