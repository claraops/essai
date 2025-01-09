
<?php 

	function delete_comptes_clients($id)
	{
		$bd = new ConnectDB();
		$p = $bd->bdd->exec("DELETE FROM  client WHERE email_cli = '".$id."' ");

				if ($p)
				{
					return true;
				}else{
					return false;
				}
	}
	

	
	
?>