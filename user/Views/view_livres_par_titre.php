Résultat de votre recherche :
<br />

<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th>ISBN</th>
            <th>Titre</th>
            <th>Thème</th>
            <th>Nombre de page</th>
            <th>Format</th>
            <th>Nom auteur</th>
            <th>Prenom auteur</th>
            <th>Editeur</th>
            <th>Année d'édition</th>
            <th>Prix</th>
            <th>Langue</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($titre as $t) : ?>
            <tr>
                <td> <?= $t->ISBN ?> </td>
                <td> <?= $t->Titre ?> </td>
                <td> <?= $t->Theme ?> </td>
                <td> <?= $t->Nb_pages ?> </td>
                <td> <?= $t->Format ?> </td>
                <td> <?= $t->Nom_auteur ?></td>
                <td><?= $t->Prenom_auteur ?></td>
                <td> <?= $t->Editeur ?> </td>
                <td> <?= $t->Annee_edition ?> </td>
                <td> <?= $t->Prix ?> </td>
                <td> <?= $t->Langue ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>