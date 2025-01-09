
<?php 

	function delete_commande($id)
	{
		$bd = new ConnectDB();
		$p = $bd->bdd->exec("DELETE FROM  commandes WHERE file_cmd = '".$id."' ");

				if ($p)
				{
					return true;
				}else{
					return false;
				}
	}
	

	
	
?>