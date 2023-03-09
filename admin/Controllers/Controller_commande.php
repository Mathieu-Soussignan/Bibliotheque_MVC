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


    // public function action_add_commande()
    // {
    //     if (isset($_POST['submit'])) {
    //         $m = Model::get_model();
    //         $m->get_add_commande();
    //         $data = ["commandes" => $m->get_add_commande()];
    //         $this->render("all_commande", $data);
    //     } else {
    //         $this->render("add_commande");
    //     }
    // }

    // public function action_add_commande()
    // {
    //     // Récupérer les données du formulaire
    //     $id_livre = $_POST['livre'];
    //     $id_fournisseur = $_POST['fournisseur'];
    //     $date_achat = $_POST['date_achat'];
    //     $prix_achat = $_POST['prix_achat'];
    //     $nb_exemplaire = $_POST['nb_exemplaire'];

    //     $m = new Model();
    //     $m->add_all_commande($id_livre, $id_fournisseur, $date_achat, $prix_achat, $nb_exemplaire);

    //     header('Location: ?controller=commande&action=all_commande');
    // }

    public function action_add_commande()
    {
        $m = Model::get_model();
        $data = ['livres' => $m->get_livres(), 'fournisseurs' => $m->get_fournisseurs()];
        $this->render("add_commande", $data);
    }

    public function action_traitement_add_commande()
    {
        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_traitement_add_commande();
            header('Location: ?controller=commande&action=all_commande');
        }
    }
}
