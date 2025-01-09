
<?php 

	function delete_clients($id)
	{
		$bd = new ConnectDB();
		$p = $bd->bdd->exec("DELETE FROM  client WHERE num_cli = '".$id."' ");

				if ($p)
				{
					return true;
				}else{
					return false;
				}
	}
	

	
	
?>