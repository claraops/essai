
<?php

function save_comptes($login, $pwd, $fct, $tel, $email, $date, $nouvelle_photo)
{
	$bd = new ConnectDB();
	$q = $bd->bdd->prepare(" INSERT INTO administrateur SET 
																		login_ad= :login_ad, 
																		pwd_ad= :pwd_ad, 
																		fctCpte_ad= :fctCpte, 
																		tel_ad= :tel_ad , 
																		email_ad= :email_ad ,
																		datecreation_ad	= :datecreation_ad , 
																		profil= :profil ")
		or die(mysql_error());

	$q->bindValue(':login_ad', $login);
	$q->bindValue(':pwd_ad', $pwd);
	$q->bindValue(':fctCpte', $fct);
	$q->bindValue(':tel_ad', $tel);
	$q->bindValue(':email_ad', $email);
	$q->bindValue(':datecreation_ad', $date);
	$q->bindValue(':profil', $nouvelle_photo);

	if ($q->execute()) {
		return true;
	} else {
		return false;
	}
}



?>