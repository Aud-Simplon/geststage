<?php

function connexionBDD()
{
	try
	{
            $bdd = new PDO('mysql:host=aud-geststage.mysql.database.azure.com;port=3306;dbname=bdd_geststages;charset=utf8', 'audrey@aud-geststage', 'Simplon2024!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
