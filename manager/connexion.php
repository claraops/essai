<?php
session_start();
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
            // die("La connexion à la base de données a échoué : " . $this->connexion->connect_error);
        }else{
        return $this->connexion;

        }
    }

    // Méthode pour ajouter un élément à la base de données
    public function inscription($firstname, $lastname, $telephone, $email, $password) {
        $sql = "INSERT INTO compte (NOM_FAC, PRENOM , TELEPHONE, EMAIL, PASSWORDS) VALUES ('$firstname','$lastname', '$telephone','$email', '$password')";
       // echo $firstname, $lastname, $telephone, $email, $password;
        if ($this->connexion->query($sql) === TRUE) {
            header("Location: ../login.php ");
            exit;
        } else {
            echo "Erreur lors de l'ajout de l'enregistrement : " . $this->connexion->error;
        }
    }

    public function ajouter_produit($nom_prod, $prix, $quantite, $disponibilite, $photo){
        $sql = "INSERT INTO produit (NOM_PROD, PRIX, quantite, DISPONIBILITE, PHOTO) VALUES ('$nom_prod','$prix', '$quantite','$disponibilite', '$photo')";
        // echo $firstname, $lastname, $telephone, $email, $password;
         if ($this->connexion->query($sql) === TRUE) {
             echo'succes';
            /* header("Location: ../login.php ");
             exit;*/
         } else {
             echo "Erreur lors de l'ajout de l'enregistrement : " . $this->connexion->error;
         } 
    }

    public function supprimer($idproduit){
        $sql = "DELETE FROM produit WHERE IDPRODUIT= $idproduit";
        // echo $firstname, $lastname, $telephone, $email, $password;
         if ($this->connexion->query($sql) === TRUE) {
             echo'succes';
             /*header("Location: ../login.php ");
             exit;*/
         } else {
             echo "Erreur lors de la suppression de l'enregistrement : " . $this->connexion->error;
         } 
    }

    public function supprimer_panier($idpanier){
        $sql = "DELETE FROM panier WHERE IDPANIER= $idpanier";
        // echo $firstname, $lastname, $telephone, $email, $password;
         if ($this->connexion->query($sql) === TRUE) {
             echo'succes';
             /*header("Location: ../login.php ");
             exit;*/
         } else {
             echo "Erreur lors de la suppression de l'enregistrement : " . $this->connexion->error;
         } 
    }

    public function modifier ($idproduit,$nom_prod, $prix, $quantite,$photo){
        $sql = "UPDATE produit SET NOM_PROD = '$nom_prod', PRIX = $prix, quantite =$quantite, PHOTO = '$photo'  WHERE IDPRODUIT= $idproduit";
        $result = $this->connexion->query($sql);
        if ($result === TRUE) {
            // echo'succes';
            /*header("Location: ../login.php ");
            exit;*/
            $last_id = $this->connexion->insert_id;
            return  $last_id;
        } else {
            // echo "Erreur lors de la modification de l'enregistrement : " . $this->connexion->error;
        } 
    
    }

    
    public function modifier_quantite ($idproduit, $quantity){
        $sql = "UPDATE contenir SET  quantite = $quantity WHERE IDPRODUIT= $idproduit";
        $result = $this->connexion->query($sql);
        if ($result === TRUE) {
            // echo'succes';
            /*header("Location: ../login.php ");
            exit;*/
            $last_id = $this->connexion->insert_id;
            return  $last_id;
        } else {
            // echo "Erreur lors de la modification de l'enregistrement : " . $this->connexion->error;
        } 
    
    }

    public function supprimer_produit ($idproduit){
        $sql = "DELETE FROM contenir WHERE IDPRODUIT= $idproduit";
        $result = $this->connexion->query($sql);
        if ($result === TRUE) {
            // echo'succes';
            /*header("Location: ../login.php ");
            exit;*/
            $last_id = $this->connexion->insert_id;
            return  $last_id;
        } else {
            echo "Erreur lors de la modification de l'enregistrement : " . $this->connexion->error;
        } 
    
    }


    public function afficher_produit(){
        $sql = "SELECT * FROM produit";
        $result=$this->connexion->query($sql);
        $row = $result ->fetch_assoc();
        return $row;
         
    }


    public function contenir($idpanier,$idproduit,$quantity){
        $sql = "INSERT INTO contenir (IDPRODUIT,IDPANIER,quantite) values ('$idproduit','$idpanier','$quantity')";
        if ($this->connexion->query($sql) === TRUE) {
            echo'succes';
           /* header("Location: ../login.php ");
            exit;*/
        } else {
            echo "Erreur lors de l'ajout de l'enregistrement : " . $this->connexion->error;
        } 
    }

    public function create_panier($idcompte,$nom){
        $sql = "INSERT INTO panier (IDCOMPTE,NOM_PANIER) values ('$idcompte','$nom')";
        $result = $this->connexion->query($sql);
        if ($result === TRUE) {
            echo'succes';
            $donne = $result;
            echo $this->connexion->insert_id;
            return $this->connexion->insert_id;
           /* header("Location: ../login.php ");
            exit;*/
        } else {
            echo "Erreur lors de l'ajout de l'enregistrement : " . $this->connexion->error;
        } 
    }

    public function afficher_panier($idcompte){
        $sql = "SELECT * FROM panier WHERE IDCOMPTE = '$idcompte'";
        $result=$this->connexion->query($sql);
        $row = $result ->fetch_assoc();
        return $row;
         
    }
    public function rechercher($nom){
        $sql = $sql = "SELECT * FROM produit Where NOM_PROD LIKE '%$searchquery%'";
        $result=$this->connexion->query($sql);
        $row = $result ->fetch_assoc();
        return $row;
         
    }




   /* public function prepare($email, $password) {
        $sql = "INSERT INTO compte (EMAIL, PASSWORDS) VALUES ('$email', '$password')";
       // echo $firstname, $lastname, $telephone, $email, $password;
        if ($this->connexion->query($sql) === TRUE) {
           header("Location: ../login.php ");
            exit;
        } else {
            echo "Erreur lors de l'ajout de l'enregistrement : " . $this->connexion->error;
        }
    }
*/
    // Méthode pour fermer la connexion à la base de données
    public function deconnecter() {
        $this->connexion->close();
    }
}
        $database = new Database("localhost", "root", "", "bdventes");



        //  pour le login
    

        








	
?>