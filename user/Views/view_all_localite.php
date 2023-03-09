<main>
    <form action="user/?controller=fournisseur&action=fournisseur_par_localite" method="POST">
        <label for="Localite"></label>
        <select name="Localite" id="Localite" class="form-select" aria-label="Default select example">
            <option selected class="text-center">----Choisir un Pays----</option>
            <?php foreach ($localites as $localite) : ?>
                <option value="<?= $localite->Localite ?>"><?= $localite->Localite ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Rechercher">
    </form>
</main>