<form method="POST" action="admin/?controller=livre&action=update_livre">

    <input type="hidden" name="id" value="<?= $livre->id ?>">

    <label for="ISBN">ISBN :</label>
    <input type="text" id="ISBN" name="ISBN" value="<?php echo $livre->ISBN; ?>"><br>

    <label for="Titre">Titre :</label>
    <input type="text" name="Titre" id="Titre" value="<?= $livre->Titre; ?>"><br>

    <label for="Theme">Theme :</label>
    <input type="text" id="Theme" name="Theme" value="<?php echo $livre->Theme; ?>"><br>

    <label for="Nb_pages">Nb_pages :</label>
    <input type="text" id="Nb_pages" name="Nb_pages" value="<?php echo $livre->Nb_pages; ?>"><br>

    <label for="Format">Format :</label>
    <input type="text" id="Format" name="Format" value="<?php echo $livre->Format; ?>"><br>

    <label for="Nom_auteur">Nom_auteur :</label>
    <input type="text" id="Nom_auteur" name="Nom_auteur" value="<?php echo $livre->Nom_auteur; ?>"><br>

    <label for="Prenom_auteur">Editeur :</label>
    <input type="text" name="Prenom_auteur" id="Prenom_auteur" value="<?= $livre->Prenom_auteur; ?>"><br>

    <label for="Editeur">Editeur :</label>
    <input type="text" name="Editeur" id="Editeur" value="<?= $livre->Editeur; ?>"><br>

    <label for="Annee_edition">Annee_edition :</label>
    <input type="text" id="Annee_edition" name="Annee_edition" value="<?php echo $livre->Annee_edition; ?>"><br>

    <label for="Prix">Prix :</label>
    <input type="text" id="Prix" name="Prix" value="<?php echo $livre->Prix; ?>"><br>

    <label for="Langue">Langue :</label>
    <input type="text" id="Langue" name="Langue" value="<?php echo $livre->Langue; ?>">
    <br><br>
    <input type="submit" name="submit" value="Modifier">
</form>