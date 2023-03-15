<?php

class Controller_livre extends Controller
{
    //* L'action par défaut redirige vers l'action "home"
    public function action_default()
    {
        $this->action_home();
    }

    //* L'action "home" affiche la vue "livre"
    public function action_home()
    {
        $this->render("livre");
    }

    //* L'action "all_livres" récupère tous les livres via le modèle et les passe à la vue "all_livres"
    public function action_all_livres()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_all_livres(), "message" => "Affichage des livres"];
        $this->render("all_livres", $data);
    }

    public function action_add_livre()
    {
        if (
            'POST' === $_SERVER['REQUEST_METHOD']
        ) {

            //on vérifie si les inputs sont vides
            if (
                empty($ISBN) || empty($Titre) || empty($Nom_auteur) || empty($Prenom_auteur)
            ) {
                echo 'Certains champs sont vides';

                exit;
            }

            // extraire les données pour les utiliser
            $ISBN = trim(filter_input(INPUT_POST, 'ISBN', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Titre = trim(filter_input(INPUT_POST, 'Titre', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Theme = trim(filter_input(INPUT_POST, 'Theme', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Nb_pages = trim(filter_input(INPUT_POST, 'Nb_pages', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Format = trim(filter_input(INPUT_POST, 'Format', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Nom_auteur = trim(filter_input(INPUT_POST, 'Nom_auteur', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Prenom_auteur = trim(filter_input(INPUT_POST, 'Prenom_auteur', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Editeur = trim(filter_input(INPUT_POST, 'Editeur', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Annee_edition = trim(filter_input(INPUT_POST, 'Annee_edition', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Prix = trim(filter_input(INPUT_POST, 'Prix', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $Langue = trim(filter_input(INPUT_POST, 'Langue', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

            // s'assurer que les données sont safe
            $ISBN = trim(htmlspecialchars($ISBN));
            $Titre = trim(htmlspecialchars($Titre));
            $Theme = trim(htmlspecialchars($Theme));
            $Nb_pages = trim(htmlspecialchars($Nb_pages));
            $Format = trim(htmlspecialchars($Format));
            $Nom_auteur = trim(htmlspecialchars($Nom_auteur));
            $Prenom_auteur = trim(htmlspecialchars($Prenom_auteur));
            $Editeur = trim(htmlspecialchars($Editeur));
            $Annee_edition = trim(htmlspecialchars($Annee_edition));
            $Prix = trim(htmlspecialchars($Prix));
            $Langue = trim(htmlspecialchars($Langue));

            $m = Model::get_model();
            $m->get_add_livre();
            $data = ["livres" => $m->get_all_livres(), "message" => "Affichage des livres"];
            $this->render("all_livres", $data);
        } else {
            $this->render("add_livre");
        }
    }

    public function action_update_livre()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m = Model::get_model();

            // on récupère le livre par son id
            $data = ['livre' => $m->get_livre($id)];
            $this->render("update_livre", $data);
        }
        if (isset($_POST["submit"])) {
            //instanciation du model
            $m = Model::get_model();

            // appel de la méthode get_update_livre()
            $m->get_update_livre();

            // récupération de la liste des livres mise à jour
            $livres = $m->get_all_livres();

            // render view "all_livres" en lui passant la liste des livres mise à jour
            $data = ['livres' => $livres, "message" => "Affichage des livres"];
            $this->render("all_livres", $data);
        }
    }

    public function action_delete_livre()
    {
        $id = $_GET['id'];
        $m = Model::get_model();

        $m->get_delete_livre($id);

        $livres = $m->get_all_livres();

        // render view "all_livres" en lui passant la liste des livres mise à jour
        $data = ['livres' => $livres, "message" => "Affichage des livres"];
        $this->render("all_livres", $data);
    }

    public function action_all_auteur()
    {
        $m = Model::get_model();
        $data = ['auteurs' => $m->get_all_auteur()];
        $this->render("all_auteur", $data);
    }

    public function action_livres_par_auteur()
    {
        $m = Model::get_model();
        $data = ['auteurs' => $m->get_livres_par_auteur()];
        $this->render("livres_par_auteur", $data);
    }

    public function action_all_titre()
    {
        $m = Model::get_model();
        $data = ['titres' => $m->get_all_titre()];
        $this->render("all_titre", $data);
    }

    public function action_livres_par_titre()
    {
        $m = Model::get_model();
        $data = ['titre' => $m->get_livres_par_titre()];
        $this->render("livres_par_titre", $data);
    }

    public function action_all_editeur()
    {
        $m = Model::get_model();
        $data = ['editeurs' => $m->get_all_editeur()];
        $this->render("all_editeur", $data);
    }

    public function action_livres_par_editeur()
    {
        $m = Model::get_model();
        $data = ['editeur' => $m->get_livres_par_editeur()];
        $this->render("livres_par_editeur", $data);
    }
}
