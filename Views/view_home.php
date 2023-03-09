    <main>
    	<div>
    		<h1 class="titrePage">Page d'authentification</h1>
    	</div>
    	<!-- formulaire d'authentification -->
    	<form action="?controller=login&action=login" method="POST">

    		<label for="email">Adresse email :</label>
    		<input type="email" id="email" name="mail" required>

    		<label for="password">Mot de passe :</label>
    		<input type="password" id="password" name="mdp" required>
    		<br><br>
    		<input type="submit" id="login" name="login" value="Se connecter">
    	</form>
    </main>