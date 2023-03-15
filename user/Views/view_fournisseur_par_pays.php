<h3 class="titrePage"> Affichage des fournisseurs par Pays </h3>

<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th>Code fournisseur</th>
            <th>Raison Sociale</th>
            <th>Rue fournisseur</th>
            <th>Code postal</th>
            <th>Localité</th>
            <th>Pays</th>
            <th>Tel fournisseur</th>
            <th>Url fournisseur</th>
            <th>Email fournisseur</th>
            <th>Réseau social Fournisseur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pays as $p) : ?>
            <tr>
                <td> <?= $p->Code_fournisseur ?> </td>
                <td> <?= $p->Raison_sociale ?> </td>
                <td> <?= $p->Rue_fournisseur ?> </td>
                <td> <?= $p->Code_postal ?> </td>
                <td> <?= $p->Localite ?> </td>
                <td> <?= $p->Pays ?></td>
                <td> <?= $p->Tel_fournisseur ?></td>
                <td> <?= $p->Url_fournisseur ?> </td>
                <td> <?= $p->Email_fournisseur ?> </td>
                <td> <?= $p->Reseau_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>