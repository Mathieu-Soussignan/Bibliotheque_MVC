<div class="form">
    <form action="?controller=sign_up&action=insert_user" method="POST">
        <h2 class="signUp">Inscription</h2>

        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" required />

        <label for="prenom">Prénom : </label>
        <input type="text" id="prenom" name="prenom" required />

        <label for="email">Adresse e-mail : </label>
        <input type="email" id="email" name="mail" required />

        <label for="password">Mot de Passe : </label>
        <input type="password" id="password" name="mdp" required />
        <br>
        <label for="role">Rôle :</label>
        <select id="role" name="role" class="form-select" aria-label="Default select example">
            <option value="1" selected class="text-center">Utilisateur</option>
            <option value="2" selected selected class="text-center">Admin</option>
        </select>
        <br><br>
        <input type="submit" id="submit" name="submit" value="S'inscrire" />
        <br>
        <a href="?controller=sign_up&action=home" style="display: block; text-align: center; font-size:20px; margin-top: 10px; text-decoration: none;">Se connecter</a>
        <br><br>
    </form>
</div>