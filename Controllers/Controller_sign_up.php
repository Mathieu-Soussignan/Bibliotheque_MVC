<?php

class Controller_sign_up extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    public function action_insert_user()
    {
        if (isset($_POST['submit'])) {

            //instanciation du model
            $m = Model::get_model();

            // appel de la méthode get_sign_up_user()
            $m->get_sign_up_user();

            // render view 
            $this->render("home");
        } else {
            $this->render("sign_up");
        }
    }
}
