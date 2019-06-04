<?php

                try
                {
                $asac = new PDO ('mysql:host=127.0.0.1;dbname=asac','root','ASAC',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
                }
                catch (Exception $e)
                {
                        die('Erreur : ' . $e->getMessage());
                }
        



?>



