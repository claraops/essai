
<?php 

	function delete_recep_contrat($id)
	{
		$bd = new ConnectDB();
		$p = $bd->bdd->exec("DELETE FROM  contratv WHERE file_cv = '".$id."' ");

				if ($p)
				{
					return true;
				}else{
					return false;
				}
	}
	

	
	
?>