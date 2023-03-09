<form action="admin/?controller=commande&action=list_nom_fournisseur" method="POST">
    <label for="nom_fournisseur"></label>
    <select name="nom_fournisseur" id="nom_fournisseur" class="form-select" aria-label="Default select example">
        <option selected class="text-center">----Choisir un Fournisseur----</option>
        <?php
        foreach ($nom_fournisseur as $nf) : ?>
            <option value="<?= $nf->id_fournisseur ?>"><?= $nf->Raison_sociale ?></option>
        <?php endforeach ?>
    </select>
    <br><br>
    <input type="submit" value="Rechercher">
</form>