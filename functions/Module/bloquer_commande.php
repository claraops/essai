
<?php 

	function bloc_commande($id)
	{
		$bd = new ConnectDB();
		$p = $bd->bdd->exec("DELETE FROM  commandes WHERE email_cli = '".$id."' ");

				if ($p)
				{
					return true;
				}else{
					return false;
				}
	}
	

	
	
?>