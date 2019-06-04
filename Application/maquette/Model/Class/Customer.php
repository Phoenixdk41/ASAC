<?php

Class Customer {
    private $_Id_Customer;
    private $_Customer_Name;




    
    //Getters and setters
    public function getId_Customer()
    {
        return $this->_Id_Customer;
    }


    public function setCustomer_Name($Customer_Name)
    {
        $this->_Customer_Name = $Customer_Name;

        return $this;
    }
}

?>