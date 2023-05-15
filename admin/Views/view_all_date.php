<h3 class="titrePage"> Affichage des commandes par date </h3>

<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th scope="col" class="text-center">Numero de commande</th>
            <th scope="col" class="text-center">ISBN</th>
            <th scope="col" class="text-center">Auteur livre</th>
            <th scope="col" class="text-center">Titre du livre</th>
            <th scope="col" class="text-center">Raison Sociale fournisseur</th>
            <th scope="col" class="text-center">Date d'achat</th>
            <th scope="col" class="text-center">Prix d'achat</th>
            <th scope="col" class="text-center">Nombres d'exemplaires</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_date as $a) : ?>
            <tr>
                <td> <?= $a->id_commande ?> </td>
                <td> <?= $a->ISBN ?> </td>
                <td> <?= $a->Nom_auteur ?> </td>
                <td> <?= $a->Titre ?> </td>
                <td> <?= $a->Editeur ?></td>
                <td><?= $a->date_achat ?></td>
                <td> <?= $a->prix_achat ?> </td>
                <td> <?= $a->nb_exemplaire ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>