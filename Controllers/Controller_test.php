<?php

class Controller_login extends Controller
{
    //* L'action par défaut redirige vers l'action "home"
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("livre");
    }

    public function action_authentification()
    {
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // récupération des données du formulaire
            $email = $_POST['mail'];
            $password = $_POST['mdp'];

            // validation des données
            if (empty($email) || empty($password)) {
                $error = 'Veuillez remplir tous les champs.';
            } else {
                // vérification des identifiants
                $m = Model::get_model();
                $user = $m->get_user_by_email($email);

                if (!$user || !password_verify($password, $user['password'])) {
                    $error = 'Identifiants incorrects.';
                } else {
                    // authentification réussie, enregistrement de l'utilisateur dans la session
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['role'] = $user['role'];

                    // redirection vers la page d'accueil
                    header('Location: index.php');
                    exit;
                }
            }
        }

        // affichage de la vue d'authentification
        $this->render('authentification', ['error' => $error]);
    }

}