<form action="admin/?controller=commande&action=traitement_add_commande" method="POST">
    <label for="livre">Livre :</label>
    <select name="livre" id="livre" class="form-select" aria-label="Default select example">
        <option selected class="text-center">----Choisir un Livre----</option>
        <?php foreach ($livres as $livre) { ?>
            <option value="<?= $livre->id ?>"><?= $livre->Titre ?></option>
        <?php } ?>
    </select>
    <label for="fournisseur">Fournisseur :</label>
    <select name="fournisseur" id="fournisseur" class="form-select" aria-label="Default select example">
        <option selected class="text-center">----Choisir un Fournisseur----</option>
        <?php foreach ($fournisseurs as $fournisseur) { ?>
            <option value="<?= $fournisseur->Id_fournisseur ?>"><?= $fournisseur->Raison_sociale ?></option>
        <?php } ?>
    </select>
    <label for="date_achat">Date d'achat :</label>
    <input type="date" name="date_achat" id="date_achat">
    <br>
    <label for="prix_achat">Prix d'achat :</label>
    <input type="number" name="prix_achat" id="prix_achat">
    <br>
    <label for="nb_exemplaire">Nombre d'exemplaires :</label>
    <input type="number" name="nb_exemplaire" id="nb_exemplaire">
    <br><br>
    <input type="submit" name="submit" value="Ajouter la commande">
</form>