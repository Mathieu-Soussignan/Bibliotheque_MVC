<?php

class Controller_home extends Controller
{
	//* L'action par défaut redirige vers l'action "home"
	public function action_default()
	{
		$this->action_home();
	}

	//* L'action "home" affiche la vue "home"
	public function action_home()
	{
		$this->render("home");
	}

	public function action_sign_up()
	{
		$this->render("sign_up");
	}

	// public function action_destroy()
	// {
	// 	session_start();

	// 	// Destruction de la session
	// 	session_destroy();
	// }
}
