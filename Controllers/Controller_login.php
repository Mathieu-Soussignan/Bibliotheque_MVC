<?php

class Controller_login extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    public function action_login()
    {
        if (isset($_POST['login'])) {
            try {
                $m = Model::get_model();
                $user = $m->get_login_user();
                if (!$user) {
                    header('Location: ?controller=home&action=home');
                    exit();
                }
                $nom = $user->nom;
                $prenom = $user->prenom;
                $role = $user->role;
                if (session_status() != PHP_SESSION_ACTIVE) {
                    session_start();
                }
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['role'] = $role;
                if ($_SESSION['role'] === 2) {
                    header('Location: admin/');
                } else {
                    header('Location: user/');
                    exit();
                }
            } catch (PDOException $e) {
                echo "Problème lors de la tentative de connexion";
            }
        }
        $this->render("home");
    }
}
