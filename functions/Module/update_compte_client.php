
<?php 


function update_compte_client($login,$pwd)
	{
		$bd = new ConnectDB();
		$q = $bd->bdd->prepare("UPDATE client SET 
													
														    email_cli= :email_cli,
														    pwd_cli= :pwd_cli
															
															WHERE email_cli = '".$login."' ");
		
				$q->bindValue(':email_cli', $login);
				$q->bindValue(':pwd_cli', $pwd);

				if ($q->execute())
				{
					return true;					
				}else{
					return false;				
				}
	}
	
	
?>