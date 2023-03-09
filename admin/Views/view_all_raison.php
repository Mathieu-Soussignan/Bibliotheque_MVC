<main>
    <form action="admin/?controller=fournisseur&action=fournisseur_par_raison" method="POST">
        <label for="Raison_sociale"></label>
        <select name="Raison_sociale" id="Raison_sociale" class="form-select" aria-label="Default select example">
            <option selected class="text-center">----Choisir une raison sociale----</option>
            <?php foreach ($raisons as $raison) : ?>
                <option value="<?= $raison->Raison_sociale ?>"><?= $raison->Raison_sociale ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Rechercher">
    </form>
</main>