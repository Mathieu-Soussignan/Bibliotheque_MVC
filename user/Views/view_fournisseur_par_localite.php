<h3 class="titrePage"> Affichage des fournisseurs par localité </h3>

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
        <?php foreach ($localites as $l) : ?>
            <tr>
                <td> <?= $l->Code_fournisseur ?> </td>
                <td> <?= $l->Raison_sociale ?> </td>
                <td> <?= $l->Rue_fournisseur ?> </td>
                <td> <?= $l->Code_postal ?> </td>
                <td> <?= $l->Localite ?> </td>
                <td> <?= $l->Pays ?></td>
                <td> <?= $l->Tel_fournisseur ?></td>
                <td> <?= $l->Url_fournisseur ?> </td>
                <td> <?= $l->Email_fournisseur ?> </td>
                <td> <?= $l->Reseau_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>