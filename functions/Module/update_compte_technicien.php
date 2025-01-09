
<?php 


function update_compte_technicien($id,$login,$pwd)
	{
		$bd = new ConnectDB();
		$q = $bd->bdd->prepare("UPDATE  technicien SET 
													
														    num_tech = :num_tech,
														    login_tech= :login_tech,
														    pwd_tech= :pwd_tech
															
															WHERE num_tech = '".$id."' ");

		        $q->bindValue(':num_tech', $id);			
				$q->bindValue(':login_tech', $login);
				$q->bindValue(':pwd_tech', $pwd);

				if ($q->execute())
				{
					return true;					
				}else{
					return false;				
				}
	}
	
	
?>