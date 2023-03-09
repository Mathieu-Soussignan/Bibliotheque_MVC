<main>
    <form action="admin/?controller=livre&action=livres_par_auteur" method="POST">
        <label for="Nom_auteur"></label>
        <select name="Nom_auteur" id="Nom_auteur" class="form-select" aria-label="Default select example">
            <option selected class="text-center">----Choisir un Auteur----</option>
            <?php foreach ($auteurs as $auteur) : ?>
                <option value="<?= $auteur->Nom_auteur ?>"><?= $auteur->Nom_auteur ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Rechercher">
    </form>
</main>