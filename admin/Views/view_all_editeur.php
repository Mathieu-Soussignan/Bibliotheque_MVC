<main>
    <form action="admin/?controller=livre&action=livres_par_editeur" method="POST">
        <label for="Editeur"></label>
        <select name="Editeur" id="Editeur" class="form-select" aria-label="Default select example">
            <option selected class="text-center">----Choisir un Editeur----</option>
            <?php foreach ($editeurs as $editeur) : ?>
                <option value="<?= $editeur->Editeur ?>"><?= $editeur->Editeur ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Rechercher">
    </form>
</main>