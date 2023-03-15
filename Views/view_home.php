    <main>
    	<div>
    		<h1 class="titrePage">Page d'authentification</h1>
    	</div>
    	<!-- formulaire d'authentification -->
    	<form action="?controller=login&action=login" method="POST">

    		<label for="email">Adresse email :</label>
    		<input type="email" id="email" name="mail" required>
    		<br>
    		<label for="password">Mot de passe :</label>
    		<input type="password" id="password" name="mdp" required>
    		<br><br>
    		<input type="submit" id="login" name="login" value="Se connecter">
    	</form>
    	<!-- lien vers la page d'inscription -->
    	<a class="inscription" href="?controller=home&action=sign_up" style="display: block; text-align: center; margin-top: 10px; font-size:20px; text-decoration: none;">Inscrivez-vous</a>
    	<br>
    	<!-- lien vers la page de modification du mot de passe -->
    	<a class="changement" href="#" style="display: block; text-align: center; margin-top: 10px; font-size:20px; text-decoration: none;">Mot de passe oublié</a>
    	<br><br>
    </main>


