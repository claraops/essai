
<?php 


function update_module_profil($name,$nouvelle_affiche)
	{
		$bd = new ConnectDB();
		$q = $bd->bdd->prepare("UPDATE comptes_user_admin SET 
													
														
															photoCpte= :photoCpte 
															
															WHERE loginCpte = '".$name."' ");

		     
				$q->bindValue(':photoCpte', $nouvelle_affiche);

				if ($q->execute())
				{
					return true;					
				}else{
					return false;				
				}
	}
	
	
?>