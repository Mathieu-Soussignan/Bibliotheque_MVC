Résultat de votre recherche :
<br />

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
        <?php foreach ($list_nom_fournisseur as $l) : ?>
            <tr>
                <td> <?= $l->numero_commande ?> </td>
                <td> <?= $l->ISBN ?> </td>
                <td> <?= $l->Nom_auteur ?> </td>
                <td> <?= $l->Titre ?> </td>
                <td> <?= $l->Raison_sociale ?></td>
                <td><?= $l->date_achat ?></td>
                <td> <?= $l->prix_achat ?> </td>
                <td> <?= $l->nb_exemplaire ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>