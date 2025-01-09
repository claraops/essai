<?php
class Database {
    private $serveur;
    private $utilisateur;
    private $mot_de_passe;
    private $base_de_donnees;
    private $connexion;

    // Constructeur
    public function __construct($serveur, $utilisateur, $mot_de_passe, $base_de_donnees) {
        $this->serveur = $serveur;
        $this->utilisateur = $utilisateur;
        $this->mot_de_passe = $mot_de_passe;
        $this->base_de_donnees = $base_de_donnees;
    }

    // Méthode pour se connecter à la base de données
    public function connect() {
        $this->connexion = new mysqli($this->serveur, $this->utilisateur, $this->mot_de_passe, $this->base_de_donnees);

        // Vérifier la connexion
        if ($this->connexion->connect_error) {
            die("La connexion à la base de données a échoué : " . $this->connexion->connect_error);
        }
    }

    // Méthode pour ajouter un élément à la base de données
    public function ajouterElement($nom, $email) {
        $sql = "INSERT INTO utilisateurs (nom, email) VALUES ('$nom', '$email')";

        if ($this->connexion->query($sql) === TRUE) {
            echo "Nouvel enregistrement ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout de l'enregistrement : " . $this->connexion->error;
        }
    }

    // Méthode pour fermer la connexion à la base de données
    public function deconnecter() {
        $this->connexion->close();
    }
}
        $database = new Database("localhost", "root", "", "bdventes");








	/****************************************class ConnectDB{
		public $db;
		function __construct(){
    try
    {
        $db=new PDO('mysql:host=localhost;dbname=bdventes;charset=utf8','root','xx');
		echo 'bd connecte avec success';
    }catch( Exception $ex){
     die("erreur:".$ex->getMessage());

    }
		}
}


/*class ConnectDB {

    public $bdd;

	function __construct(){
	    try {
	        $this->bdd = new PDO('mysql:host=localhost; dbname = bdvente; charset=utf8', 'root', '');
			//$count = $this->exec('INSERT INTO commande SET idprod= "10", nomprod ="huile",prix="500" ' );
			// var_dump($count);

	        $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.
	    } catch (Exception $e) {
	        die('Erreur : ' . $e->getMessage());
	    }
	}
}*/

?>