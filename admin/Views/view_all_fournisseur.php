<h3 class="titrePage"> <?= $message ?> </h3>

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
        <?php foreach ($fournisseur as $f) : ?>
            <tr>
                <td> <?= $f->Code_fournisseur ?> </td>
                <td> <?= $f->Raison_sociale ?> </td>
                <td> <?= $f->Rue_fournisseur ?> </td>
                <td> <?= $f->Code_postal ?> </td>
                <td> <?= $f->Localite ?> </td>
                <td> <?= $f->Pays ?></td>
                <td> <?= $f->Tel_fournisseur ?></td>
                <td> <?= $f->Url_fournisseur ?> </td>
                <td> <?= $f->Email_fournisseur ?> </td>
                <td> <?= $f->Reseau_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>