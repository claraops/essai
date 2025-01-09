
<?php 

	function delete_facture($id)
	{
		$bd = new ConnectDB();
		$p = $bd->bdd->exec("DELETE FROM  factures WHERE file_fct = '".$id."' ");

				if ($p)
				{
					return true;
				}else{
					return false;
				}
	}
	

	
	
?>