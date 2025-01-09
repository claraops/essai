
<?php 

	function delete_contrat($id)
	{
		$bd = new ConnectDB();
		$p = $bd->bdd->exec("DELETE FROM contrat WHERE file_ct = '".$id."' ");

				if ($p)
				{
					return true;
				}else{
					return false;
				}
	}
	

	
	
?>