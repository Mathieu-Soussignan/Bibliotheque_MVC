Résultat de votre recherche :
<br />

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
        <?php foreach ($raisons as $r) : ?>
            <tr>
                <td> <?= $r->Code_fournisseur ?> </td>
                <td> <?= $r->Raison_sociale ?> </td>
                <td> <?= $r->Rue_fournisseur ?> </td>
                <td> <?= $r->Code_postal ?> </td>
                <td> <?= $r->Localite ?> </td>
                <td> <?= $r->Pays ?></td>
                <td> <?= $r->Tel_fournisseur ?></td>
                <td> <?= $r->Url_fournisseur ?> </td>
                <td> <?= $r->Email_fournisseur ?> </td>
                <td> <?= $r->Reseau_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>