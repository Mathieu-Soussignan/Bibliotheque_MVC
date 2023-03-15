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
            } catch (PDOException $e) {
                echo "Problème lors de la tentative de connexion";
            }
            var_dump($user);

            if (!$user) {
                header('Location: ?controller=home&action=home');
                exit();
            } else {
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
                } elseif ($_SESSION['role'] === 1) {
                    header('Location: user/');
                    exit();
                }
            }
        }
        // $this->render("home");
    }

    public function action_update_mdp()
    {
        if (isset($_POST['submit'])) {

            //instanciation du model
            $m = Model::get_model();

            // appel de la méthode get_update_mdp()
            $m->get_update_mdp();

            // render view 
            $this->render("home");
        } else {
            $this->render("update_mdp");
        }
    }
}
