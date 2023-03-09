<form action="user/?controller=commande&action=list_all_titre_livre" method="POST">
    <label for="titre_livre"></label>
    <select name="titre_livre" id="titre_livre" class="form-select" aria-label="Default select example">
        <option selected class="text-center">----Choisir un Titre----</option>
        <?php
        foreach ($titre_livre as $t) : ?>
            <option value="<?= $t->id_livre ?>"><?= $t->Titre ?></option>
        <?php endforeach ?>
    </select>
    <br><br>
    <input type="submit" value="Rechercher">
</form>