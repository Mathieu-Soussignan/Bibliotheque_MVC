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

    public static function get_model()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    public function get_sign_up_user()
    {
        $nom = $_POST['name'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $role = $_POST['role'];
        $r = $this->bd->prepare("INSERT INTO user (nom, prenom, mail, mdp, role) VALUES (:nom,:prenom,:mail,:mdp,:role)");
        $r->bindParam(':nom', $nom);
        $r->bindParam(':prenom', $prenom);
        $r->bindParam(':mail', $mail);
        $r->bindParam(':mdp', $mdp);
        $r->bindParam(':role', $role);
        $r->execute();
    }

    public function get_login_user()
    {
        // $mail = filter_var(trim($_POST['mail'], FILTER_VALIDATE_EMAIL));
        // $mdp = filter_var(trim($_POST['mdp'], FILTER_SANITIZE_SPECIAL_CHARS));
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

        if (!$mail) {
            // si l'adresse e-mail n'est pas valide, renvoie un message d'erreur
            echo "<script>alert('L'adresse e-mail n'est pas valide');</script>";
            return;
        }

        $r = $this->bd->prepare("SELECT * FROM `user` WHERE mail=:mail AND mdp=:mdp");
        $r->bindParam(':mail', $mail);
        $r->bindParam(':mdp', $mdp);
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);

        if ($r->rowCount() > 0) {
            $user = $r->fetch(PDO::FETCH_OBJ);

            // Démarre la session pour stocker l'ID de l'utilisateur connecté
            session_start();

            return $user;
        } else {
            // Aucun utilisateur correspondant aux identifiants fournis n'a été trouvé
            return false;
        }
    }

    public function get_update_mdp()
    {
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

        $r = $this->bd->prepare("SELECT * FROM user WHERE mail=:mail");
        $r->bindParam(':mail', $mail);
        $r->execute();

        if ($r->rowCount() > 0) {
            $upR = $this->bd->prepare("UPDATE user SET mdp=:mdp WHERE mail=:mail");
            $upR->bindParam(':mdp', $mdp);
            $upR->bindParam(':mail', $mail);
            $upR->execute();
        }
    }
}   //* Fin de la Classe