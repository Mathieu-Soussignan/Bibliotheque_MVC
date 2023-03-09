<main>
    <form action="user/?controller=fournisseur&action=fournisseur_par_pays" method="POST">
        <label for="Pays"></label>
        <select name="Pays" id="Pays" class="form-select" aria-label="Default select example">
            <option selected class="text-center">----Choisir un Pays----</option>
            <?php foreach ($pays as $pays) : ?>
                <option value="<?= $pays->Pays ?>"><?= $pays->Pays ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Rechercher">
    </form>
</main>