<?php

function connexionBDD()
{
	try
	{
            $bdd = new PDO('aud-bdd-geststage.mysql.database.azure.com;port=3306', 'audrey', 'Simplon2024!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
