
<?php 


function update_compte_admin($id,$login,$pwd)
	{
		$bd = new ConnectDB();
		$q = $bd->bdd->prepare("UPDATE administrateur SET 
													
														    num_ad = :num_ad,
														    login_ad= :login_ad,
														    pwd_ad= :pwd_ad
															
															WHERE num_ad = '".$id."' ");

		        $q->bindValue(':num_ad', $id);			
				$q->bindValue(':login_ad', $login);
				$q->bindValue(':pwd_ad', $pwd);

				if ($q->execute())
				{
					return true;					
				}else{
					return false;				
				}
	}
	
	
?>