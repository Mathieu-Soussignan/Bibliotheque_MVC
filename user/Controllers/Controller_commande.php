<?php

class Controller_commande extends Controller
{
    //* L'action par défaut redirige vers l'action "home"
    public function action_default()
    {
        $this->action_home();
    }

    //* L'action "home" affiche la vue "commande"
    public function action_home()
    {
        $this->render("commande");
    }

    //* L'action "all_commande" récupère toutes les commandes via le modèle et les passe à la vue "all_commande"
    public function action_all_commande()
    {
        $m = Model::get_model();
        $data = ["commande" => $m->get_all_commande()];
        $this->render("all_commande", $data);
    }

    public function action_all_titre_livre()
    {
        $m = Model::get_model();
        $data = ["titre_livre" => $m->get_all_titre_livre()];
        $this->render("all_titre_livre", $data);
    }

    public function action_list_all_titre_livre()
    {
        $id = $_POST['titre_livre'];

        $m = Model::get_model();
        $data = ['titre_livre' => $m->get_list_all_titre_livre($id)];
        // var_dump($data);
        $this->render("list_all_titre_livre", $data);
    }

    public function action_all_nom_fournisseur()
    {
        $m = Model::get_model();
        $data = ["nom_fournisseur" => $m->get_all_nom_fournisseur()];
        $this->render("all_nom_fournisseur", $data);
    }

    public function action_list_nom_fournisseur()
    {
        $id = $_POST['nom_fournisseur'];

        if (isset($_POST['nom_fournisseur'])) {
            $m = Model::get_model();
            $data = ["list_nom_fournisseur" => $m->get_list_nom_fournisseur($id)];
            $this->render("list_nom_fournisseur", $data);
        }
    }
    
    public function action_all_date()
    {
        $m = Model::get_model();
        $data = ["all_date" => $m->get_all_date()];
        $this->render("all_date", $data);
    }
}
