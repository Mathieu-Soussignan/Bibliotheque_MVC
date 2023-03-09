<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th scope="col" class="text-center">ISBN</th>
			<th scope="col" class="text-center">Titre</th>
			<th scope="col" class="text-center">Thème</th>
			<th scope="col" class="text-center">Nb_pages</th>
			<th scope="col" class="text-center">Format</th>
			<th scope="col" class="text-center">Nom auteur</th>
			<th scope="col" class="text-center">Prénom auteur</th>
			<th scope="col" class="text-center">Editeur</th>
			<th scope="col" class="text-center">Année édition</th>
			<th scope="col" class="text-center">Prix</th>
			<th scope="col" class="text-center">Langue</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($livres as $l) : ?>
			<tr>
				<td> <?= $l->ISBN ?> </td>
				<td> <?= $l->Titre ?> </td>
				<td> <?= $l->Theme ?> </td>
				<td> <?= $l->Nb_pages ?> </td>
				<td> <?= $l->Format ?> </td>
				<td> <?= $l->Nom_auteur ?></td>
				<td> <?= $l->Prenom_auteur ?></td>
				<td> <?= $l->Editeur ?> </td>
				<td> <?= $l->Annee_edition ?> </td>
				<td> <?= $l->Prix ?> </td>
				<td> <?= $l->Langue ?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>