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

    public function get_login_user()
    {
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $r = $this->bd->prepare("SELECT * FROM `user` WHERE mail=:mail AND mdp=:mdp");
        $r->bindParam(':mail', $mail);
        $r->bindParam(':mdp', $mdp);
        $r->execute();

        if ($r->rowCount() > 0) {
            $user = $r->fetch(PDO::FETCH_OBJ);
            return $user;
        }
    }
}   //* Fin de la Classe