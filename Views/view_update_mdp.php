<h1 class="titrePage">Modification du mot de passe</h1>

<main>
    <form action="?controller=login&action=update_mdp" method="POST">

        <input type="email" name="mail" placeholder="Adresse e-mail" style="margin-bottom: 20px;">
        <br><br>
        <input type="password" name="mdp" placeholder="Nouveau mot de passe" style="margin-bottom: 20px;">
        <br>
        <input type="submit" name="submit" value="Modifier le mot de passe">
        <!-- lien vers la page d'authentification -->
        <a href="?controller=home&action=home" style=" padding: 10px 20px; font-size:20px; font-weight: bold; text-decoration: none; color: black;">Annuler</a>
    </form>
</main>