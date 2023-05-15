<h3 class="titrePage"> <?= $message ?> </h3>

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
        <?php foreach ($commande as $c) : ?>
            <tr>
                <td> <?= $c->id_commande ?> </td>
                <td> <?= $c->ISBN ?> </td>
                <td> <?= $c->Nom_auteur ?> </td>
                <td> <?= $c->Titre ?> </td>
                <td> <?= $c->Editeur ?></td>
                <td><?= $c->date_achat ?></td>
                <td> <?= $c->prix_achat ?> </td>
                <td> <?= $c->nb_exemplaire ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>