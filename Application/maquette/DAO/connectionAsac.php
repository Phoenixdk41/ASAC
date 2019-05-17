<?php

class ConnexionBdd{
        private $_host = '127.0.0.1';
        private $dbname = 'applicationasac';
        private $_userToBdd = 'root';
        private $_passwordToBase = 'ASAC';


        public function __construct()
        {
                try
                {
                $asac = new PDO ('mysql:host=127.0.0.1;dbname=applicationasac','root','ASAC',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
                }
                catch (Exception $e)
                {
                        die('Erreur : ' . $e->getMessage());
                }
        }


}


?>



