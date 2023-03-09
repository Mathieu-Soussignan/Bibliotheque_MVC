<header>
	<div>
		<div class="row">
			<div class="col-12 text-center" id="titre">
				<h1 class="titrePage">Bienvenue sur la page d'accueil</h1>
			</div>
		</div>
		<nav id="navbar">
			<ul>
				<li><a href="admin/?controller=home&action=home">Accueil</a></li>
				<li>
					<p>Livres</p>
					<div class="options">
						<ul>
							<li><a href="admin/?controller=livre&action=all_livres">Afficher les livres</a></li>
							<li><a href="admin/?controller=livre&action=add_livre">Ajouter un livre</a></li>
							<li><a href="admin/?controller=livre&action=all_auteur">Afficher livres par auteur</a></li>
							<li><a href="admin/?controller=livre&action=all_titre">Afficher livres par Titre</a></li>
							<li><a href="admin/?controller=livre&action=all_editeur">Affichage Livres par Editeur</a></li>
						</ul>
					</div>
				<li>
					<p>Fournisseurs</p>
					<div class="options">
						<ul>
							<li><a href="admin/?controller=fournisseur&action=all_fournisseur">Afficher les fournisseurs</a></li>
							<li><a href="admin/?controller=fournisseur&action=add_fournisseur">Ajouter un fournisseur</a></li>
							<li><a href="admin/?controller=fournisseur&action=all_raison">Afficher fournisseur par Raison sociale</a></li>
							<li><a href="admin/?controller=fournisseur&action=all_pays">Afficher fournisseur par pays</a></li>
							<li><a href="admin/?controller=fournisseur&action=all_localite">Afficher fournisseur par localité</a></li>
						</ul>
					</div>
				</li>
				<li>
					<p>Commandes</p>
					<div class="options">
						<ul>
							<li><a href="admin/?controller=commande&action=all_commande">Toutes les commandes</a></li>
							<li><a href="admin/?controller=commande&action=add_commande">Ajouter une commande</a></li>
							<li><a href="admin/?controller=commande&action=all_titre_livre">Par titre de livre</a></li>
							<li><a href="admin/?controller=commande&action=all_nom_fournisseur">Par fournisseur</a></li>
							<li><a href="admin/?controller=commande&action=all_date">Par date</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</nav>
		<div class="logout">
			<a href="./?controller=home&action=home"><button>Deconnexion</button></a>
		</div>
	</div>
</header>