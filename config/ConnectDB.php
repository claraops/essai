<?php
class ConnectDB {

    public $bdd;

	function __construct(){
	    try {
	        $this->bdd = new PDO('mysql:host=localhost;dbname=bdmarket;charset=utf8', 'root', '');
	        $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.
	    } catch (Exception $e) {
	        die('Erreur : ' . $e->getMessage());
	    }
	}
}



<?php
   try {
    $pdo = new PDO('mysql:dbname=bdmarket; host=localhost', 'root', '');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

   } catch (Exception $e) {
       echo '<script>alert(" Erreur sur la bd ")</script>';
       $e->getMessage();
   }
?>