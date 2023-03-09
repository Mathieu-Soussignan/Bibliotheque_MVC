<main>
    <form action="user/?controller=livre&action=livres_par_titre" method="POST">
        <label for="Titre"></label>
        <select name="Titre" id="Titre" class="form-select" aria-label="Default select example">
            <option selected class="text-center">----Choisir un Pays----</option>
            <?php foreach ($titres as $titre) : ?>
                <option value="<?= $titre->Titre ?>"><?= $titre->Titre ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Rechercher">
    </form>
</main>