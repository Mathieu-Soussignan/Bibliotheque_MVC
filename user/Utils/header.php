<header>
	<div style="display: flex; align-items: center; justify-content: space-between;">
		<p id="started" style="margin: 0; font-size: 25px; font-weight: bold; margin: 0 0 0 20px;">
			<?php
			$nom = $_SESSION['nom'];
			$prenom = $_SESSION['prenom'];
			echo $nom . "&nbsp;" . $prenom;
			?>
		</p>
		<a id="logout" href="./?controller=home&action=destroy" onclick="return confirm('Êtes-vous sûr de vouloir vous déconnecter ?');">Déconnexion</a>

	</div>
	<nav id="navbar">
		<ul>
			<li><a href="user/?controller=home&action=home">Accueil</a></li>
			<li>
				<p>Livres</p>
				<div class="options">
					<ul>
						<li><a href="user/?controller=livre&action=all_livres">Afficher les livres</a></li>
						<li><a href="user/?controller=livre&action=all_auteur">Afficher livres par auteur</a></li>
						<li><a href="user/?controller=livre&action=all_titre">Afficher livres par Titre</a></li>
						<li><a href="user/?controller=livre&action=all_editeur">Affichage Livres par Editeur</a></li>
					</ul>
				</div>
			<li>
				<p>Fournisseurs</p>
				<div class="options">
					<ul>
						<li><a href="user/?controller=fournisseur&action=all_fournisseur">Afficher les fournisseurs</a></li>
						<li><a href="user/?controller=fournisseur&action=all_raison">Afficher fournisseur par Raison sociale</a></li>
						<li><a href="user/?controller=fournisseur&action=all_pays">Afficher fournisseur par pays</a></li>
						<li><a href="user/?controller=fournisseur&action=all_localite">Afficher fournisseur par localité</a></li>
					</ul>
				</div>
			</li>
			<li>
				<p>Commandes</p>
				<div class="options">
					<ul>
						<li><a href="user/?controller=commande&action=all_commande">Toutes les commandes</a></li>
						<li><a href="user/?controller=commande&action=all_titre_livre">Par titre de livre</a></li>
						<li><a href="user/?controller=commande&action=all_nom_fournisseur">Par fournisseur</a></li>
						<li><a href="user/?controller=commande&action=all_date">Par date</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
	</div>
</header>