<h3 class="titrePage"> Affichage des livres par auteur </h3>

<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th scope="col" class="text-center">ISBN</th>
            <th scope="col" class="text-center">Titre</th>
            <th scope="col" class="text-center">Thème</th>
            <th scope="col" class="text-center">Nombre de page</th>
            <th scope="col" class="text-center">Format</th>
            <th scope="col" class="text-center">Nom auteur</th>
            <th scope="col" class="text-center">Prenom auteur</th>
            <th scope="col" class="text-center">Editeur</th>
            <th scope="col" class="text-center">Année d'édition</th>
            <th scope="col" class="text-center">Prix</th>
            <th scope="col" class="text-center">Langue</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($auteurs as $a) : ?>
            <tr>
                <td> <?= $a->ISBN ?> </td>
                <td> <?= $a->Titre ?> </td>
                <td> <?= $a->Theme ?> </td>
                <td> <?= $a->Nb_pages ?> </td>
                <td> <?= $a->Format ?> </td>
                <td> <?= $a->Nom_auteur ?></td>
                <td><?= $a->Prenom_auteur ?></td>
                <td> <?= $a->Editeur ?> </td>
                <td> <?= $a->Annee_edition ?> </td>
                <td> <?= $a->Prix ?> </td>
                <td> <?= $a->Langue ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>