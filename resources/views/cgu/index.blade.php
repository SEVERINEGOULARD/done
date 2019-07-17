{{--VIEW CGU--}}
@extends('layouts.master')

@section('scripts-header')

@if (Route::has('login'))
	<header>
		<div class=" container-fluid header">
			<div class=" container">
				<nav>
				@auth
					<a href="{{ url('/home') }}">Home</a>
					<a href="/main">Bullet journal</a>
				@else
					<a href="{{ route('login') }}">Connexion</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}">Inscription</a>
					@endif
				@endauth
				@endif
				</nav>
			</div>
		<div>
	</header>
@endsection
@section('content')
<section>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Conditions générales d'utilisation</h1>
<p>Les présentes Conditions Générales d’Utilisation déterminent les règles d’accès au Site www.done.fr 
En naviguant sur ce Site, vous reconnaissez, en votre qualité d’utilisateur, en connaître les termes, 
les accepter sans réserve et vous y conformer.</p>
<h2>Collecte et utilisation de vos données personnelles</h2>
<h3>Article 1 : Définition</h3>
<p>Site : désigne le site internet « www.done.fr » édité par la Team Web Force 3. Utilisateur : désigne l’ensemble des internautes, inscrits ou non, connecté sur le site. Utilisateur membre : désigne l’Utilisateur qui a crée son profil au sein de l’espace membre du Site. Cet espace lui permet d'utiliser le Site, de publier des articles sur le journal et de gérer son profil, ainsi que de créer ses pages en ligne et les modifer a souhait. Base de données : Conformément aux dispositions de la loi n° 98-536 du 1er juillet 1998 portant transposition dans le code de la propriété intellectuelle de la directive 96/9 CE du 11 mars 1996 concernant la protection juridique des bases de données, la Team WF3 est productrice et propriétaire de tout ou partie des bases de données composant le présent site. En accédant au présent site, vous reconnaissez que les données le composant sont légalement protégées, et, conformément aux dispositions de la loi du 01/07/98 précitée, il vous est interdit notamment d’extraire, réutiliser, stocker, reproduire, représenter ou conserver, directement ou indirectement, sur un support quelconque, par tout moyen et sous toute forme que ce soit, tout ou partie qualitativement ou quantitativement substantielle, du contenu des bases de données figurant au site auquel vous accédez ainsi que d’en faire l’extraction ou la réutilisation répétée et systématique de parties qualitativement et quantitativement non substantielles lorsque ces opérations excèdent manifestement les conditions d’utilisation normale.</p>
<h3>Article 2 : Champ d’application</h3>
<p>Les présentes Conditions Générales d’Utilisation (ci après dénommé « CGU ») régissent les relations contractuelles entre tout Utilisateur du Site accessible via l’adresse URL suivante : https://www.done.fr L’Utilisateur est invité à lire avec la plus grande attention le présent document et de renouveler sa lecture à chaque fois qu’il consulte le Site. En effet, l’utilisation du Site constitue son acceptation des dites conditions générales d’utilisations. A cet égard, pour toute question concernant le Site, vous pouvez contacter le webmaster à l’adresse suivante : Ces CGU sont les seules applicables et remplacent toutes autres conditions, sauf dérogation préalable, expressément acceptée par TEAM WF3. Afin de répondre à un impératif technique, un besoin d’organisation du service ou pour une évolution technologique, TEAM WF3 peut ponctuellement modifier certaines des dispositions des présentes CGU. Il est par conséquent nécessaire que les CGU soient relues et acceptées avant chaque action sur le Site. Ces modifications sont opposables à tout Utilisateur à compter de leurs mises en ligne et ne peuvent s’appliquer aux actions réalisées antérieurement.</p>
<h3>Article 3 : Services</h3>
<p>-Système d'agenda personnalisable -Acces à son espace personnel sécurisé -gestionnaire de taches hebdomadaires -Ajout édition, suppression de widgets (texte, images...)ludiques -planning modulable -Association objectifs/durée/résultat. Le Site propose toutes ces fonctionnalitées. Le Site DONE est un service d’assistance aux candidats et uniquement d’assistance ; en ce sens les Utilisateurs acceptent de ne pas attendre d’obligation de résultat concernant ce service. Le Site effectue un contrôle a priori du contenu dans son intégralité et vérifie sa légalité. Toutefois, si un Utilisateur voyait une information enfreignant la loi, il s’engage à le signaler au Site, qui fera au plus vite les contrôles et corrections nécessaires.</p>
<h3>Article 4 : Droits de la propriété intellectuelle</h3>
<p>La TEAM WF3 informe les Utilisateurs que la totalité du contenu composant le Site est protégée par la législation sur le droit d’auteur et le droit des marques : ce peut être notamment le logo du Site, celui de ses partenaires, les textes diffusés, des photographies, des dessins, des séquences, des phonogrammes, des vidéoclips, des symboles, etc. Les droits relatifs à ces éléments sont réservés. En conséquence, toute reproduction, représentation, utilisation, adaptation, modification, incorporation, traduction, commercialisation, partielles ou intégrales par quelque procédé et sur quelque support que ce soit (papier, numérique,…) sont interdites sans l’autorisation écrite préalable du Directeur de publication du Site, sous réserve des exceptions visées à l’article L.122.5 du Code de la propriété intellectuelle, sous peine de constituer un délit de contrefaçon de droit d’auteur et/ou de dessins et modèles et/ou de marque, puni de deux ans d’emprisonnement et de 150.000 euros d’amende.</p>
<h3>Article 5 : Responsabilité</h3>
<p>La TEAM WF3 ne saurait être tenue responsable des problèmes techniques rencontrés sur le Site. L’existence d’un lien de ce Site vers un autre site ne constitue en aucun cas une validation de ce site ou de son contenu de la part de la TEAM WF3. La TEAM WF3 ne saurait être tenue responsable des problèmes rencontrés sur tous les autres sites et/ou blogs vers lesquels des liens sont établis, ou de toute autre information publiée sur ces sites et/ou blogs, ainsi que des conséquences de leur utilisation.</p>
<h3>Article 6 : Données personnelles</h3>
<p>La TEAM WF3 s’engage à respecter les dispositions de loi « informatique et libertés » du 6 janvier 1978 modifié par la loi du 6 août 2004 concernant les informations personnelles que l’Utilisateur communique dans le cadre de l’utilisation du Site. Les données recueillies sur le Site font l’objet d’une déclaration auprès de la CNIL.Ces données font l’objet d’un traitement qui a pour finalité de permettre à l’utilisateur de se créer un espace membre afin qu’il puisse profiter des services proposés par le Site. Les données recueillies sont aussi utilisées pour des statistiques de consultation anonymes. Les Utilisateurs sont également informés que les données qu’ils ont communiquées au moment de leur inscription peuvent être utilisées dans le but de leur transmettre la newsletter du Site. Le Site décline toute responsabilité en cas de transmission volontaire ou involontaire par l’Utilisateur à un tiers des codes d’accès qu’il lui appartient de conserver en lieu sûr et dont l’utilisation par un tiers pourrait entrainer la divulgation, l’altération ou la suppression des données personnelles de l’Utilisateur. Conformément à la loi « Informatique et Libertés » du 6 janvier 1978 modifiée par la loi du 6 août 2004, l’utilisateur dispose du droit d’accès, de modification des informations qui le concernent. Ces droits peuvent être exercés en s’adressant à la Team WF3 (email). En aucun cas ces données ne seront cédées ou communiquées à des tiers. Elles ne sont collectées que : dans le cadre des commentaires des articles régulièrement postés sur le Site (IP de l’auteur du commentaire) ; dans le cadre des statistiques de fréquentation du Site ; dans le cadre de l’inscription de l’Utilisateur membre ;</p>
<h3>Article 7 : Cookies</h3>
<p>Il est implanté au sein de l’ordinateur de l’Utilisateur des données de trafic et des fichiers de cookies aux fins de procéder, en interne, à des analyses de fréquentation des pages d’informations du Site afin d’en améliorer le contenu ainsi qu’à établir des données statistiques (pages consultées, heures de consultation, etc…). WF3 informe que l’Utilisateur dispose dans son logiciel de navigation de la possibilité de s’opposer à l’enregistrement de cookies dans son ordinateur.</p>
<h3>Article 9 : Conditions de modération du blog et du forum</h3>
<p>Les commentaires du blog sont modérés à priori. Les messages postés sur le forum sont modérés à postériori. Le non respect de l’une des règles suivantes entraîne la non validation du commentaire et la suppression du message concerné. Chaque Utilisateur s’engage à respecter les règles de conduites suivantes et s’interdit, sans que cette liste soit exhaustive, de publier : des contenus contrevenants aux droits d’autrui (vie privée, droit à l’image.. .) ou à caractère diffamatoire, injurieux, obscènes ou offensants ou portant atteinte à la protection des enfants et des adolescents ; des contenus présentant un caractère violent ou pornographique ou qui encourageraient la commission de crimes ou délits ou qui encourageraient à la discrimination et à la haine raciale, au suicide ou aux comportements révisionnistes et négationnistes ; des contenus divulguant des informations permettant l’identification nominative et précise des utilisateurs du site, telles que adresse, postale et/ou électronique, numéros de téléphone ; des contenus contrefaisant des en-têtes, officielles ou non, ou manipulant de quelque manière que ce soit l’identifiant de manière à dissimuler l’origine ou la source du contenu initial transmis via le Site, induisant en erreur les autres utilisateurs en usurpant une identité ; des contenus ayant pour finalité de diffuser des messages commerciaux, publicitaires ou promotionnels ou de la propagande ; des contenus diffusant des conseils ou commentaires contrevenant aux dispositions légales et réglementaires ; des contenus contraires aux droits d’auteurs (notamment reproduction, représentation ou diffusion d’une œuvre), aux droits voisins, au droit des marques ou au droit applicable aux bases de données ; des contenus traitant de la copie de logiciels commerciaux pour un usage autre qu’une copie de sauvegarde dans les conditions prévues par le Code de propriété intellectuelle. En outre, chaque Utilisateur s’interdit : d’utiliser le Site comme support de diffusion de messages portant atteinte à l’image de Team WF3 ; de reproduire et/ou exploiter, dans un but commercial ou autre, tout ou partie des contenus mis en ligne dans le cadre d’utilisation du Site ; d’extraire ou de collecter des adresses électroniques ou d’autres informations relatives à des Utilisateurs aux fins d’envoi de communication non sollicitées ; de porter, dans les messages postés sur le Site, des liens hypertextes ou des commentaires se référant ou renvoyant à des sites extérieurs ou renvoyant à des informations contenant des virus informatiques ou de contournement de dispositifs techniques de protection ou permettant tout acte de piratage ou permettant d’entraver ou perturber l’accès et l’utilisation du Site, des réseaux, des serveurs connectés au Site.</p>
<h3>Article 10 – Loi applicable</h3>
<p>Il est expressément entendu que tout litige lié à l’utilisation du Site ou à l’exécution, l’interprétation ou la validité des présentes Conditions Générales d’Utilisation sera soumis à la loi française et aux juridictions françaises. En cas de litige, l’Utilisateur s’engage à contacter en priorité Team WF3 afin de tenter de résoudre à l’amiable tout différend susceptible d’intervenir entre les parties. A défaut de conciliation, les tribunaux français seront les seuls compétents.</p>

<p>Il est strictement interdit de copier et de distribuer le contenu de ce site sans l'accord express de son propriétaire.<br> 
En continuant votre navigation sur ce site, vous acceptez l'utilisation des cookies.</p><br> 

<p class="text-center">Support: webmaster@done.fr</p> 
<p class="text-center">2019 - Tous droits réservés</p>
				</div>
			</div>
		</div>
	</div>
</section>





@endsection


@section('scripts-footer')

<div class="container cst-contact-footer mt-5">
  <div class="row">
    <div class="col-md-4 text-center">
      <a href="/ml">Mentions légales</a>
    </div>
    <div class="col-md-4 text-center">
      <p>Copyright 2019 - AWSY</p>
    </div>
    <div class="col-md-4 text-center">
      <a href="/cgu">CGU</a>
    </div>     
  </div>
</div>

@endsection