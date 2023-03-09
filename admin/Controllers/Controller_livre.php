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
        $data = ["livres" => $m->get_all_livres()];
        $this->render("all_livres", $data);
    }

    public function action_add_livre()
    {
        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_add_livre();
            $data = ["livres" => $m->get_all_livres()];
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
            $data = ['livres' => $livres];
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
        $data = ['livres' => $livres];
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
