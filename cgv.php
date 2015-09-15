<? require_once 'Mobile-Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
$m=false;
if ( $detect->isMobile() ) $m = true;
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>HANK | Home</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="msapplication-tap-highlight" content="no" />
	<link rel="stylesheet" href="themes/hank.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" type="text/css" href="inc/jquery.mobile.structure-1.4.5.min.css" /> 
	<link rel="stylesheet" type="text/css" href="inc/hnk.css" /> 
	<? if(!$m) { ?>
		<style>
		body {
			font-size: 100%;
			background: url(inc/bkg.jpg) no-repeat center fixed;
			-webkit-background-size: cover; /* pour anciens Chrome et Safari */
			background-size: cover; /* version standardisée */
			-moz-transform: scale(0.9, 0.9); /* Moz-browsers */
			zoom: 0.9; /* Other non-webkit browsers */
			zoom: 90%; /* Webkit browsers */	
		}
		#Home, #menu, #cart, #pickup
		{
			position: relative;
			width: 500px;
			margin-top: 5px;
		  	margin-left: auto;
		  	margin-right: auto;
		  	box-shadow: 1px 1px 12px #555;
		}

		#logo {
			margin: auto;
		    width: 350px;

		}

		#logo img {
			width: 350px;
			height: 350px;
			margin-top: 8px;
			margin-bottom: 8px;

		}
		</style>
	<? } ?>	
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript">
	app.initialize();
	</script>
</head>
<body>
	<? if(!$m) { ?><div id="logo"><img src="inc/logoblanc.png"></div><? } ?>
	<div data-role="page" id="Home" data-theme="a">
		<div data-role="header">
			<a href="index.php" rel="external" data-transition="none" id="bt-back" data-icon="carat-l">Retour</a>
			<h1 id="main_title">CGV</h1>
		</div>
		
		<div id="content" data-role="content" data-theme="a">

Condition Générales - HANK
<br><br>
				Le site internet www.hankburger.com (ci-après le « Site ») et l’application pour terminal mobile dénommée « HANK » (ciaprès l’ « Application ») sont édités par la société HANK, société par actions simplifiées, au capital de 1000 euros, dont le siège social est 55 rue des Archives 75003 Paris, immatriculée au registre du commerce et des sociétés de Paris sous le numéro 798983706 et dont le numéro de TVA est FR38798983706. 
				HANK peut être contactée par email : contact@hankrestaurant.com (ci-après le « Service Clients »).
				Le Site est hébergé par Online, dont le siège social est situé au 8 rue de la ville l'Evêque - 75008 PARIS, leur site internet est : http://www.online.net/
<br><br>
				1. Objet
<br><br>
				1.1 HANK propose, par le biais de son Site et son Application (ci-après
				ensemble la « Plateforme »), des services permettant aux utilisateurs (ci-après « Vous » ou le(s) « Utilisateur(s)») de commander des des plats et des boissons.
<br><br>
				1.2 La Plateforme permet à l’Utilisateur de consulter les plats et les boissons (ciaprès les « Offres ») proposées par HANK aux fins de les commander et de venir les chercher au restaurant (ci-après les « Services »), et ce, dans les conditions plus amplement décrites ci-après.
				Ce service n'offre pas de livraison à domicile.
<br><br>
				1.3 Les présentes conditions générales d'utilisation de la Plateforme et des Services (ci-après les « Conditions Générales ») régissent les relations entre les Utilisateurs et HANK.
				Avant d’utiliser la Plateforme et les Services qui y sont proposés, HANK invite l’Utilisateur à lire attentivement les Conditions Générales car elles décrivent l’intégralité des droits et obligations des parties.
				L’accès à et l’utilisation de la Plateforme et des Services qui y sont proposés, implique l’acceptation sans réserve des présentes Conditions Générales. Si l’Utilisateur ne souhaite pas être soumis à ces Conditions Générales, il n’est pas autorisé à utiliser la Plateforme et les Services qui y sont proposés et devra cesser leur utilisation.
<br><br>
				1.4 HANK se réserve le droit de modifier les Conditions Générales. Dans ce cas, la nouvelle version des Conditions Générales sera disponible sur la Plateforme. Il est conseillé à l’Utilisateur de consulter régulièrement les Conditions Générales pour prendre connaissance de toute modification éventuelle. En tout état de cause, l’Utilisateur ne sera lié que par la seule version des Conditions Générales en vigueur au moment de la consultation de la Plateforme ou en vigueur au moment auquel l’Utilisateur passe sa Commande.
<br><br>
				1.5 L’Utilisateur est seul tenu d’assurer et payer, le cas échéant, l’ensemble des moyens techniques lui donnant accès à la Plateforme.
<br><br>
				2. Services
<br><br>
				L’utilisation de la Plateforme et des Services qui y sont proposés est libre. L’Utilisateur doit être capable juridiquement (âgé de plus de 18 ans, non frappé d’une incapacité ou être un mineur émancipé).
<br><br>
				2.1 Consultation
<br><br>
				2.1.1 L’Utilisateur peut accéder à la Plateforme et consulter les Offres proposées par HANK sans qu’il n’ait préalablement besoin de s’identifier sur la Plateforme. 
<br><br>
				2.1.2 Si une ou plusieurs des Offre(s) corresponde(nt) aux attentes de l’Utilisateur, il lui suffit de l’/les ajouter à son panier en appuyant sur le bouton « Ajouter » ;
<br><br>
				2.1.3 Les horaires auxquelles les Commandes peuvent être passées ainsi qu’un montant minimum de Commande seront affichés sur la Plateforme.
<br><br>
				2.2 Identification
<br><br>
				2.2.1 Une fois que les Offres sont dans le panier de l’Utilisateur, pour être en mesure de commander, l’Utilisateur devra appuyer sur « Commander» et s’identifier sur la Plateforme en indiquant obligatoirement son nom, prénom, email et numéro de téléphone et de
				manière facultative toutes autres informations que l’Utilisateur estime pertinentes pour la bonne réalisation de la Commande
				En tout état de cause, le traitement des données à caractère personnel de l’Utilisateur est soumis à la «Politique de confidentialité » de HANK.
<br><br>
				2.3 Commandes
<br><br>
				2.3.1 Procédure de Commande
<br><br>
				2.3.1.1 Après son identification sur la Plateforme, l’Utilisateur sera en mesure de passer sa Commande en suivant la procédure suivante :
				Confirmer les coordonnées de livraison ;<br>
				- Indiquer des commentaires pour le restaurant (optionnel) ;<br>
				- confirmer le récapitulatif de la Commande indiquant (i) les caractéristiques essentielles de la  Commande, (ii) le prix total de la Commande (exprimé TTC en euros), les moyens de paiement acceptés par HANK (i.e. Visa,Mastercard et carte de débit) ;<br>
				- indiquer l’heure de livraison souhaitée ;<br>
				- appuyer sur le bouton « Confirmer» ; et autoriser le prélèvement du prix de la Commande par l’un des moyens de paiement acceptés. A cet égard, l’Utilisateur garantit disposer des autorisations nécessaires pour utiliser le mode de paiement choisi. <br>
				Il est précisé que :<br>
				HANK certifie que les coordonnées de cartes bancaires sont cryptées grâce au système homologué par le système de PAYPLUG et ne transitent jamais en clair sur le
				réseau. A noter que pour le paiement par carte bancaire, il est rappelé que les dispositions relatives à l'utilisation frauduleuse du paiement par carte bancaire prévues dans les conventions conclues entre Vous et l'émetteur de la carte bancaire et entre HANK et son établissement bancaire, s'appliquent.
<br><br>
				2.3.1.2 Toute Commande ne sera définitive qu’après confirmation du paiement. Aucun traitement de la Commande n’interviendra sans paiement.
<br><br>
				2.3.1.3 Une fois le paiement confirmé, votre commande sera enregistrée et transmise au Restaurant. L’Utilisateur reçoit alors un email et/ou un SMS confirmant l’enregistrement de sa Commande et comprenant le numéro de sa Commande.
<br><br>
				2.3.2 Annulation ou modification d’une Commande
<br><br>
				2.3.2.1 L’Utilisateur n’a pas la possibilité d’annuler ou modifier la Commande définitive, c’est-à-dire après la confirmation de HANK, sauf en cas de non-conformité de la Commande aux conditions prévues à l’article 2.3.3, de défaut de livraison dans les conditions prévues à l’article 2.3.6 ou de force majeure dans les conditions prévues à l’article 6.
<br><br>
				2.3.2.2 En effet, la Commande portant sur des biens susceptibles de se détériorer ou périmer rapidement, conformément à l’article L. 121-21-8 4° du code de la consommation, le droit de rétractation prévu à l’article L. 121-21-1 du code de la consommation ne peut être exercé auprès de HANK. En conséquence, aucune demande de remboursement dans ce cadre n’est recevable.
<br><br>
				2.3.2.3 Toutefois, si l’Utilisateur souhaite annuler ou modifier une Commande, il peut contacter sans délai notre Service Clients, conformément à ce qui est décrit à l’article 2.3.7, qui tentera d'annuler la Commande ou d'obtenir un accord sur une modification de la Commande passée avant son traitement.
<br><br>
				2.3.2.4 HANK peut refuser pour des motifs exceptionnels (fermeture exceptionnelle,absence des matières premières, etc.) des Commandes. Dans ce cas, l’Utilisateur est remboursé du prix de la Commande dans les meilleurs délais qui ne sauraient excéder quarante-huit (48) heures.
<br><br>
				2.3.2.5 En tout état de cause, HANK se réserve le droit d’annuler toute Commande d’un Utilisateur avec lequel il existerait un litige relatif au paiement d’une Commande antérieure.
<br><br>
				2.3.3 Conformité de la Commande 
				L’Utilisateur est informé qu’il a la possibilité de retourner a HANK les marchandises qui s’avèrent défectueuses ou non conformes. En effet, HANK est tenu des défauts de conformité des marchandises dans les conditions de l’article L.211-4 et suivants du code de la consommation et des défauts cachés de la chose vendue dans les conditions prévues aux articles 1641 et suivants du code civil. En cas de constatation d’un vice caché ou d’un défaut de conformité d’une marchandise, l’Utilisateur devra prendre contact avec HANK.
		<br>		Lorsque l’Utilisateur agit en garantie légale de conformité, il bénéficie d’un délai de deux ans à compter de la délivrance du Bien pour agir ; il peut choisir entre la réparation et le remplacement du Bien, sous réserve des conditions de coûts prévues par l’article L.211-9 du code de la consommation, il est dispensé de rapporter la preuve de l’existence du défaut de conformité du Bien durant les six mois suivant la délivrance de la marchandise (ce délai sera porté à 24 mois à compter du 18 mars 2016) et (iv) la garantie légale de conformité s’applique indépendamment de toute garantie commerciale éventuellement consentie. Enfin, s’il décide de mettre en œuvre la garantie contre les défauts cachés de la chose vendue au sens de l’article 1641 du code civil, il peut choisir entre la résolution de la vente ou une réduction du prix de vente conformément à l’article 1644 du code civil.
<br><br>
				2.3.4 Bons promotionnels ou de réduction
				Des bons promotionnels ou de réduction peuvent permettre de bénéficier de réduction sur des Commandes.
<br><br>
				2.3.5 Service Clients<br><br>
				2.3.5.1 La satisfaction des Utilisateurs est très importante pour HANK. Notre Service Clients s’engagera, dans la mesure du possible, à prendre l’ensemble des dispositions et actions nécessaires afin de procurer la satisfaction la plus complète aux Utilisateurs.
<br><br>
				2.3.6 Dispositions particulières applicables lors de la Commande
<br><br>
				2.3.6.1 Commandes portant sur des boissons alcoolisées
				Conformément aux termes de l'article L. 80 du Code des débits de boissons et des mesures contre l'alcoolisme, la vente d'alcool aux mineurs est interdite. L'abus d'alcool est dangereux pour la santé. Il convient donc de consommer et apprécier avec modération. Par le seul fait de passer une Commande via notre Plateforme, l’Utilisateur renonce expressément au bénéfice de l'article 1587 du Code Civil, qui prévoit que la conclusion de la vente de vin ne devient définitive qu'après dégustation et agrément de l'acheteur. Toute Commande passée pour le compte d’un mineur, ou en son nom, et comportant une ou des boissons alcooliques si nous en avons connaissance, sera refusée. La violation de ce qui précède engage la responsabilité de l’Utilisateur.
<br><br>

				3. Engagements et responsabilité de l’Utilisateur
<br><br>
				3.1 L’Utilisateur s’engage à utiliser la Plateforme et les Services qui y sont proposés en respectant la réglementation applicable et les présentes Conditions Générales. En cas de manquements de l’Utilisateur à ses obligations au titre des présentes Conditions Générales, ce dernier est responsable des dommages causés par lui à HANK ou aux tiers. A ce titre, l’Utilisateur s’engage à garantir HANK contre l’ensemble des réclamations, actions ou recours de toute nature qui pourraient en résulter et à l’indemniser des dommages, frais ou indemnités quelconques y afférents.
<br><br>
				3.2 L’Utilisateur, en particulier, s’engage en réalisant une Commande, à en payer le prix et consent à conclure un acte d’achat pour le ou les Offre(s) avec HANK. 
<br><br>
				3.3 En outre, l'Utilisateur s'engage à ne pas utiliser la Plateforme et les Services qui y sont proposés à des fins illégales et notamment à ne pas transmettre des Observations qui seraient une violation des droits de propriété intellectuelle de tiers, une atteinte aux personnes (notamment diffamation, insultes, injures, etc.), au droit à l’image des biens et/ou des personnes et au respect de la vie privée, une atteinte à l’ordre public et aux bonnes mœurs (notamment apologie des crimes contre l’humanité, incitation à la haine raciale ou à la violence, pornographie enfantine, etc.). A cet égard, l’Utilisateur peut signaler un abus en alertant HANK par email à l’adresse suivante : contact@hankrestaurant.com
<br><br>
				3.4 Enfin, l’Utilisateur s’engage à ce que son téléphone portable soit doté d’une couverture suffisante (réseau Edge, 3G, 4G) notamment afin d’être joignable au cours du traitement de sa Commande. Si l’Utilisateur s’avère injoignable en cours de traitement de sa Commande, HANK ne pourra être tenus responsables si les informations communiquées par l’Utilisateur lors de sa passation de Commande sont erronées et ne permettent pas le traitement de la Commande.
<br><br>
				4. Engagements et Responsabilité de HANK
<br><br>
				4.1 HANK s’engage, dans le cadre d’une obligation de moyens, à fournir un accès la Plateforme et aux Services en respectant les Conditions Générales et à agir avec diligence et compétence et mettre tout en œuvre, dans une limite raisonnable, afin de remédier à tout dysfonctionnement porté à sa connaissance.
<br><br>
				4.2 HANK pourra cependant se trouver dans l’obligation de suspendre momentanément ou définitivement la Plateforme et les Services sans préavis, notamment pour des raisons liées aux heures d’ouvertures et pour des raisons techniques de maintenance quelle qu’en soit l’origine ou la cause, sans que ceci n’entraîne de responsabilité de la part de HANK.
<br><br>
				4.3 L’Utilisateur reconnaît et accepte que la responsabilité de HANK ne saurait être engagée pour tous les inconvénients ou dommages liées à l'utilisation du réseau Internet, dont, sans que cette liste soit limitative : - la mauvaise transmission et/ou réception de toute donnée et/ou information sur Internet ;<br>
				- la défaillance de tout matériel de réception ou des lignes de communication ;<br>
				- tout dysfonctionnement du réseau Internet empêchant le bon fonctionnement de la Plateforme et/ou le bon déroulement des Services.<br>
<br>
				4.4 L’Utilisateur reconnaît et accepte que la responsabilité de HANK ne saurait être engagée pour toutes conséquences dans la réalisation des Services par HANK découlant de fausses informations ou d’informations incomplètes communiquées par l’Utilisateur. 
<br><br>
				4.5 Enfin, la Plateforme peut renvoyer vers des sites Internet édités et gérés par des tiers. HANK n'exerce aucun contrôle sur ces sites et n'assume aucune responsabilité à leur égard. La décision de consulter ces sites relève de la pleine et entière responsabilité del’Utilisateur.
<br><br>
				5. Force Majeure<br><br>
				Aucune des parties ne pourra être tenue responsable à l’égard de l’autre partie en cas d’inexécution de ses obligations résultant d’un cas de force majeure. Sont considérés comme cas de force majeure ou cas fortuit, ceux habituellement reconnus par la jurisprudence de la Cour de cassation. Si l’événement de force majeure venait à durer plus de trente (30) jours à compter de sa survenance, les présentes Conditions Générales pourront être résiliées par l’une quelconque des parties sans qu’aucune d’entre elles ne puisse prétendre à l’octroi de dommages et intérêts.
<br><br>
				6. Données à caractère personnel
<br><br>
				6.1 HANK collecte et traite les données à caractère personnel relatives à l'Utilisateur dans le but de gérer la fourniture des Services et/ou de transmettre des documentations commerciales par courrier et/ou email et de répondre à Vos questions éventuelles. Ces données à caractère personnel sont traitées par HANK conformément à sa Politique de confidentialité et dans le respect des réglementations en vigueur et notamment de la loi relative à l’informatique, aux fichiers et aux libertés du 6 janvier 1978 telle que modifiée le 6 août 2004.
<br><br>
				6.2 Il est rappelé aux Utilisateurs que conformément aux dispositions des articles 39 et 40 de la loi relative à l'informatique, aux fichiers et aux libertés du 6 janvier 1978 telle que modifiée le 6 août 2004, ils bénéficient d'un droit d'accès et de rectification des données à caractère personnel qui les concernent.
<br><br>
				6.3 Les Utilisateurs peuvent exercer ces droits en contactant HANK par email à l'adresse suivante :
				contact@hankrestaurant.com en joignant une pièce d’identité et préciser l’adresse à laquelle HANK doit faire parvenir la réponse. 
<br><br>
				7. Preuve
<br><br>
				Les parties reconnaissent et conviennent que les SMS, les MMS, les emails et tous autres écrits électroniques issus de l’utilisation des Services et échangés entre HANK et l’Utilisateur dans le cadre des Services (ciaprès les « Ecrits Electroniques ») constituent des documents originaux entre les parties, feront preuve et seront admissibles devant les tribunaux, sous réserve que puisse être dûment identifiée la personne dont ils émanent et qu’ils soient établis et conservés dans des conditions permettant d’en garantir l’intégrité. 
<br><br>
				8. Propriété intellectuelle
<br><br>
				8.1 Contenu Utilisateur
<br><br>
				8.1.1 Dans le cadre de l’utilisation de la Plateforme et des Services, l’Utilisateur pourra être amené à publier certains contenus tels que, mais sans que cela s’y limite, des Observations dans les conditions prévues à l’article 2.3.7.2 (ci-après le(s) « Contenu(s) Utilisateur »). 
<br><br>
				8.2 Contenu HANK
<br><br>
				8.2.1 L’Utilisateur reconnaît que la Plateforme de la Formation et son contenu (autre que celui fourni par les Utilisateurs) ce qui inclut, sans que cette liste ne soit limitative, tous textes, graphiques, images, logos, noms, marques, dénominations, sons, photographies, vidéos, dessins, données, logiciels ou autres matériels disponibles sur la Plateforme (ci-après le « Contenu HANK ») sont protégés par le droit de la propriété intellectuelle et sont la propriété exclusive de HANK ou sont concédés en licence à HANK.
<br><br>
				8.2.2 Sous réserve de l’acceptation et du respect des présentes Conditions Générales, HANK accorde à l’Utilisateur, pour la durée des présentes Conditions Générales et pour le monde entier, un droit personnel, non-exclusif et nontransférable d’accès et d’utilisation du Contenu HANK pour les seules fins visées aux présentes Conditions Générales.
<br><br>
				8.2.3 L’utilisation ou la reproduction de tout ou partie du Contenu HANK est seulement autorisée aux fins exclusives d'information pour un usage personnel, toute reproduction ou représentation réalisée à d'autres fins n’étant autorisée qu’avec un accord préalable exprès écrit de HANK.
<br><br>
				8.2.4 En particulier, l’Utilisateur n’est pas autorisé à télécharger, copier, altérer, modifier, adapter, supprimer, distribuer, transmettre, diffuser, vendre, louer, concéder ou exploiter le Contenu HANK en tout ou partie, de quelque manière que ce soit, sans l’accord exprès, écrit et préalable de HANK.
<br><br>
				8.2.5 Toute utilisation autre du Site, de l’Application ou du Contenu HANK est constitutive de contrefaçon et sanctionnée au titre du droit de la propriété intellectuelle, sauf autorisation préalable, expresse et écrite de HANK.
<br><br>
				9. Dispositions diverses
<br><br>
				9.1 Sous-traitants
				HANK pourra faire appel à des sous-traitants dans le cadre de l’exécution de ses obligations au titre des présentes. 
<br><br>
				9.2 Cession 
				HANK peut céder les présentes Conditions Générales ainsi que l’ensemble des droits et obligations qui y sont attachés, à tous tiers, sans accord préalable et
				écrit de l’Utilisateur, notamment en cas de cession de branche d’activité, de fusion par constitution d’une nouvelle société, de fusion absorption, de scission ou de tout changement de contrôle affectant HANK.
<br><br>
				9.3 Documents contractuels
				<br><br>
				Les présentes Conditions Générales constituent l'intégralité de l'accord passé entre HANK et l'Utilisateur pour ce qui concerne l'utilisation de la Plateforme et des Services qui y sont proposés, et se substituent à tout accord ayant le même objet éventuellement intervenu antérieurement entre l'Utilisateur et HANK. 
<br><br>
				9.4 Divisibilité
				<br><br>
				Si l’une quelconque des stipulations du Contrat est tenue pour nulle ou non valide et déclarée telle en application d’une loi, d’un règlement ou à la suite d’une décision définitive d’une juridiction compétente, cette stipulation sera réputée non écrite, sans altérer la validité des autres stipulations et sera remplacée par une stipulation valable d’effet équivalent, que les parties s’engagent à négocier de bonne foi.
<br><br>
				9.5 Renonciation
				<br><br>
				Le fait pour HANK de ne pas se prévaloir à un moment donné d’une stipulation quelconque ne peut être considéré comme valant renonciation au bénéfice de cette  stipulation ou au droit de se prévaloir ultérieurement de ladite stipulation et/ou de demander réparation pour tout manquement à cette stipulation. 
<br><br>
				10. Droit applicable et juridiction compétente
				
				<br><br>
				Les présentes Conditions Générales sont régies par le droit français. En cas de litiges, les parties pourront soumettre leur différend à la médiation ou tout autre règlement alternatif des litiges. A défaut d’un règlement alternatif du litige dans les trente (30) jours à compter du différend, les tribunaux français seront exclusivement compétents.
	<br><br>
			
		</div>
		<!--<div data-role="footer">
			<h4><p id="build"><a href="https://github.com/hankopen/HNKmobile">Copyleft Hank 2015</a> - V0.6</p></h4>
		</div>
		-->
	</div>
</div>
<script type="text/javascript" src="inc/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="inc/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="inc/hnk.js"></script>
<script type="text/javascript" src="inc/jquery.i18n.min.js"></script>

<script type="text/javascript">

function getServerVars(lang) {
	localStorage.clear();
	var lang = navigator.language.split('-',1);
	//var apiurl = "http://hmw.dev/rest/shopping?callback=?";
	var apiurl = "http://hmw.hankrestaurant.com/rest/shopping?callback=?";

	$.getJSON( apiurl, function(data) {
		//TODO check version if upgrade needed 
		if (isNaN(data.ts))  { 
			alert($.i18n._('Cannot load data, are you connected to the Internet?'));
		} else {
			enableDiv("#order");
			localStorage.setItem('params', JSON.stringify(data.params));
			localStorage.setItem('ts', data.ts);
			localStorage.setItem('products', JSON.stringify(data.products));
			localStorage.setItem('lang', lang);
		}
	})
	.fail( function(d, textStatus, error) {
		alert($.i18n._('Cannot load data, are you connected to the Internet?'));
	});
}

</script>
<script type="text/javascript" src="inc/dico.js"></script>
<script type="text/javascript">
//translations
$('p#intro').text($.i18n._('Select, purchase and come pick up your order at the time of your choice!'));
$('p#info').text($.i18n._('Hank, 55 rue des Archives 75003 Paris, open 7/7 from 12h to 22h.'));
$('a#order').text($.i18n._('Order'));
//check if device support localstorage otherwise let the order button hidden
if(typeof(Storage)!=="undefined") {
	getServerVars(lang);
	enableDiv("#order");
} else {
	alert($.i18n._('You must use a recent device to use this service.'));
}
$("#order").parent().hide();
</script>
</body>
</html>
