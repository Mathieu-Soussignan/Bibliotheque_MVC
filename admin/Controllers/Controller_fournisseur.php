<?php

class Controller_fournisseur extends Controller
{
    //* L'action par défaut redirige vers l'action "home"
    public function action_default()
    {
        $this->action_home();
    }

    //* L'action "home" affiche la vue "fournisseur"
    public function action_home()
    {
        $this->render("fournisseur");
    }

    //* L'action "all_fournisseur" récupère tous les fournisseurs via le modèle et les passe à la vue "all_fournisseur"
    public function action_all_fournisseur()
    {
        $m = Model::get_model();
        $data = ["fournisseur" => $m->get_all_fournisseur()];
        $this->render("all_fournisseur", $data);
    }

    public function action_add_fournisseur()
    {
        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_add_fournisseur();
            $data = ["fournisseur" => $m->get_all_fournisseur()];
            $this->render("all_fournisseur", $data);
        } else {
            $this->render("add_fournisseur");
        }
    }

    public function action_all_raison()
    {
        $m = Model::get_model();
        $data = ["raisons" => $m->get_all_raison()];
        $this->render("all_raison", $data);
    }

    public function action_fournisseur_par_raison()
    {
        $m = Model::get_model();
        $data = ['raisons' => $m->get_fournisseur_par_raison()];
        $this->render("fournisseur_par_raison", $data);
    }

    public function action_all_localite()
    {
        $m = Model::get_model();
        $data = ["localites" => $m->get_all_localite()];
        $this->render("all_localite", $data);
    }

    public function action_fournisseur_par_localite()
    {
        $m = Model::get_model();
        $data = ['localites' => $m->get_fournisseur_par_localite()];
        $this->render("fournisseur_par_localite", $data);
    }

    public function action_all_pays()
    {
        $m = Model::get_model();
        $data = ["pays" => $m->get_all_pays()];
        $this->render("all_pays", $data);
    }

    public function action_fournisseur_par_pays()
    {
        $m = Model::get_model();
        $data = ['pays' => $m->get_fournisseur_par_pays()];
        $this->render("fournisseur_par_pays", $data);
    }
}
