<?php

class Model
{   //* Début de la Classe

    private $bd;

    private static $instance = null;

    /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
    public function __construct()
    {  //* Fonction qui sert à faire le lien avec la BDD

        $dsn = "mysql:host=localhost;dbname=bdp7";   //* Coordonnées de la BDD
        $login = "root";   //* Identifiant d'accès à la BDD
        $mdp = ""; //* Mot de passe d'accès à la BDD
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->query("SET NAMES 'utf8'");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    //* get_model()

    public static function get_model()
    {
        //* Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    /**
     *Récupère tous les livres de la base de données @return array Tableau d'objets contenant les informations de tous les livres
     **/
    public function get_all_livres()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par Titre
        $r = $this->bd->prepare("SELECT * FROM livre order by Titre");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livre($id)
    {
        $r = $this->bd->prepare("SELECT * FROM livre WHERE id = :id");
        $r->bindParam(':id', $id);
        $r->execute();

        return $r->fetch(PDO::FETCH_OBJ);
    }

    public function get_all_auteur()
    {
        // Préparer la requête SQL pour sélectionner tous les livres par Auteur
        $r = $this->bd->prepare("SELECT DISTINCT Nom_auteur FROM livre");
        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livres_par_auteur()
    {
        $auteur = $_POST['Nom_auteur'];
        // Préparer la requête SQL pour sélectionner les livres par Titre
        $r = $this->bd->prepare("SELECT * FROM livre WHERE Nom_auteur=:auteur");

        $r->bindParam(':auteur', $auteur);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_titre()
    {
        // Préparer la requête SQL pour sélectionner tous les livres par Titre
        $r = $this->bd->prepare("SELECT DISTINCT Titre FROM livre");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livres_par_titre()
    {
        $titre = $_POST['Titre'];
        // Préparer la requête SQL pour sélectionner les livres par Titre
        $r = $this->bd->prepare("SELECT * FROM livre WHERE Titre= :titre");

        $r->bindParam(':titre', $titre);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_editeur()
    {
        // Préparer la requête SQL pour sélectionner tous les livres par Titre
        $r = $this->bd->prepare("SELECT DISTINCT Editeur FROM livre");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livres_par_editeur()
    {
        $editeur = $_POST['Editeur'];
        // Préparer la requête SQL pour sélectionner tous les livres par Titre
        $r = $this->bd->prepare("SELECT * FROM livre WHERE Editeur='$editeur'");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_fournisseur()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par Titre
        $r = $this->bd->prepare("SELECT * FROM fournisseur order by Code_fournisseur");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_raison()
    {
        // Préparer la requête SQL pour sélectionner tous les livres par Auteur
        $r = $this->bd->prepare("SELECT DISTINCT Raison_sociale FROM fournisseur");
        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseur_par_raison()
    {
        $raison = $_POST['Raison_sociale'];
        // Préparer la requête SQL pour sélectionner tous les livres par Titre
        $r = $this->bd->prepare("SELECT * FROM fournisseur WHERE Raison_sociale='$raison'");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_localite()
    {
        // Préparer la requête SQL pour sélectionner tous les livres par Auteur
        $r = $this->bd->prepare("SELECT DISTINCT Localite FROM fournisseur");
        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseur_par_localite()
    {
        $localite = $_POST['Localite'];
        // Préparer la requête SQL pour sélectionner tous les livres par Titre
        $r = $this->bd->prepare("SELECT * FROM fournisseur WHERE Localite='$localite'");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_pays()
    {
        // Préparer la requête SQL pour sélectionner tous les livres par Auteur
        $r = $this->bd->prepare("SELECT DISTINCT Pays FROM fournisseur");
        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseur_par_pays()
    {
        $pays = $_POST['Pays'];
        // Préparer la requête SQL pour sélectionner tous les livres par Titre
        $r = $this->bd->prepare("SELECT * FROM fournisseur WHERE Pays='$pays'");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_commande()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par Titre
        $r = $this->bd->prepare("SELECT * FROM commande c INNER JOIN livre l ON c.id_livre = l.id
        order by date_achat");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_titre_livre()
    {
        $r = $this->bd->prepare("SELECT c.id_livre, l.Titre
        FROM commande c
        INNER JOIN livre l ON c.id_livre = l.id;");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_list_all_titre_livre($id)
    {
        // Préparer la requête SQL pour sélectionner toutes les commandes pour un éditeur donné
        $r = $this->bd->prepare("SELECT * FROM commande c
        INNER join livre l ON c.id_livre = l.id 
        INNER JOIN fournisseur f ON c.id_fournisseur = f.Id_fournisseur WHERE c.id_livre = $id ");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_nom_fournisseur()
    {
        $r = $this->bd->prepare("SELECT c.id_fournisseur, f.Raison_sociale
        FROM commande c
        INNER JOIN fournisseur f ON c.id_fournisseur = f.Id_fournisseur;");

        // Exécuter la requête
        $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_list_nom_fournisseur($id)
    {
        $r = $this->bd->prepare("SELECT c.prix_achat,c.date_achat,c.numero_commande,c.nb_exemplaire,f.Raison_sociale,l.Titre,l.Nom_auteur,l.ISBN FROM commande c
        INNER join livre l ON c.id_livre = l.id 
        INNER JOIN fournisseur f ON c.id_fournisseur = f.Id_fournisseur WHERE c.id_fournisseur = $id ");

        // Exécuter la requête
        $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_date()
    {
        $r = $this->bd->prepare("SELECT * FROM commande c INNER JOIN livre l ON c.id_livre = l.id
        INNER JOIN fournisseur f ON c.id_fournisseur = f.Id_fournisseur ORDER BY c.date_achat");

        // Exécuter la requête
        $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }
}   //* Fin de la Classe