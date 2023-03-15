<h3 class="titrePage"> Affichage des livres par éditeur </h3>

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
        <?php foreach ($editeur as $e) : ?>
            <tr>
                <td> <?= $e->ISBN ?> </td>
                <td> <?= $e->Titre ?> </td>
                <td> <?= $e->Theme ?> </td>
                <td> <?= $e->Nb_pages ?> </td>
                <td> <?= $e->Format ?> </td>
                <td> <?= $e->Nom_auteur ?></td>
                <td><?= $e->Prenom_auteur ?></td>
                <td> <?= $e->Editeur ?> </td>
                <td> <?= $e->Annee_edition ?> </td>
                <td> <?= $e->Prix ?> </td>
                <td> <?= $e->Langue ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>