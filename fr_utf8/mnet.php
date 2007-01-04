<?php // $Id$

$string['description'] = 'Description';
$string['mnet'] = 'R�seau Moodle';
$string['net'] = 'R�seau';
$string['requiresopenssl'] = 'La mise en r�seau requiert l\'extension OpenSSL';
$string['yourhost'] = 'Votre h�te';
$string['yourpeers'] = 'Vos pairs';
$string['settings'] = 'R�glages';
$string['hostsettings'] = 'R�glages h�te';
$string['mnetpeers'] = 'Paires R�seau Moodle';
$string['mnetservices'] = 'Services R�seau Moodle';
$string['trustedhosts'] = 'H�tes fiables';
$string['trustedhostsexplain'] = 'Veuillez saisir une liste d\'adresses IP ou de r�seaux, une par ligne. Voici quelques exemples&nbsp;:<br />'.
'Votre serveur local&nbsp;:<br />'.
'127.0.0.1<br />'.
'Votre serveur local (avec un bloc r�seau):<br />'.
'127.0.0.1/32<br />'.
'Uniquement le serveur d\'adresse IP 192.168.0.7&nbsp;:<br />'.
'192.168.0.7/32<br />'.
'N\'importe quel serveur avec une adresse IP entre 192.168.0.1 et 192.168.0.255&nbsp;:<br />'.
'192.168.0.0/24<br />'.
'N\'importe quel serveur&nbsp;:<br />'.
'192.168.0.0/0<br />'.
'Le dernier exemple n\'est pas une configuration recommand�e.';

$string['currentkey'] = 'Clef publique actuelle';
$string['keymismatch'] = 'La clef publique que vous d�tenez pour cet h�te est diff�rente de la clef qu\'il utilise actuellement.';
$string['invalidurl'] = 'Param�tre URL invalide.';
$string['expireyourkey'] = 'Supprimer cette clef';
$string['deletekeycheck'] = 'Voulez-vous vraiment supprimer cette clef&nbsp;?';
$string['expireyourkeyexplain'] = 'Moodle modifie automatiquement vos clef tous les 28 jours (par d�faut), mais vous avez la possibilit� de '.
'p�rimer <em>manuallement</em> cette clef en tout temps. Une telle op�ration n\'est utile que si vous pensez que '.
'la clef a �t� compromise. Une clef de remplacement sera imm�diatement g�n�r�e automatiquement.<br />'.
'La suppression de cette clef emp�chera tous les autres serveurs Moodle de communiquer avec celui-ci jusqu\'� ce que '.
'contactiez manuallement leurs administrateurs et leur fournissiez votre nouvelle clef.';
$string['deleteoutoftime'] = 'Le temps de 60 secondes imparti pour la suppression de cette clef est �chu. Veuillez recommencer.'; 
$string['deletewrongkeyvalue'] = 'Une erreur est survenue. Aucune action n\'a �t� effectu�e. Si vous n\'�tiez pas en train de supprimer la clef SSL de votre serveur, il est possible '.
'que vous ayez �t� la cible d\'une attaque.';

$string['keydeleted'] = 'Votre clef a �t� supprim�e et remplac�e.';

$string['is_in_range'] = 'L\'adresse IP <code>$a</code> repr�sente un serveur fiable.';
$string['validated_by'] = 'Il a �t� valid� par le r�seau&nbsp;: <code>$a</code>';
$string['not_in_range'] = 'L\'adresse IP <code>$a</code> ne repr�sente pas un serveur fiable.';

$string['testtrustedhosts'] = 'Tester une adresse IP';
$string['testtrustedhostsexplain'] = 'Saisissez une adresse IP pour voir s\'il s\'agit d\'un serveur fiable.';

$string['forbidden-function'] = 'Cette fonction n\'a pas �t� activ�e par RPC.';
$string['forbidden-transport'] = 'La m�thode de transport que vous tentez d\'utiliser n\'est pas autoris�e.';

$string['registerallhosts'] = 'Enregistrer tous les serveurs';
$string['registerallhostsexplain'] = 'Vous pouvez choisir d\'enregistrer tous les serveurs tentant de se connecter � votre Moodle. Cela signifie qu\'un enregistrement appara�tra dans votre liste de serveur '.
'pour chaque site Moodle se connectant au v�tre et demandant votre clef publique.<br />'.
'Vous avez la possibilit� de configurer ci-dessous les services accessibles pour �&nbsp;Tous les h�tes&nbsp;�, ce qui vous permettra de fournir '.
'des services � tous les serveurs Moodle.';

$string['enabled_for_all'] = '(Ce service a �t� activ� pour tous les h�tes).';
$string['nosuchfile'] = 'Le fichier/la fonction $a n\'existe pas.';
$string['nosuchfunction'] = 'Impossible de localiser la fonction ou fonction interdite par RPC.';
$string['nosuchmodule'] = 'La fonction n\'a pas �t� adress�e correctement et n\'a pas pu �tre localis�e.<br />Veuillez utiliser le format mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Impossible d\'obtenir la clef publique pour v�rification de signature.';
$string['nosuchservice'] = 'Le service RPC n\'a pas �t� lanc� sur ce serveur.';
$string['nosuchtransport'] = 'Aucun transport n\'existe avec cet identifiant.';

$string['phperror'] = 'Une erreur PHP interne a emp�ch� l\'aboutissement de votre requ�te.';
$string['wrong-ip'] = 'Votre adresse IP ne correspond pas � l\'adresse que nous avons enregistr�e.';

$string['verifysignature-error'] = 'La v�rification de signature a �chou�. Une erreur est survenue.';
$string['verifysignature-invalid'] = 'La v�rification de signature a �chou�. Il semble que votre envoi n\'a pas �t� sign� par vous.';
$string['mnetsettings'] = 'R�glages R�seau Moodle';
$string['mnetservices'] = 'Services';
$string['mnetlog'] = 'Historiques';

$string['issubscribed'] = 'Le Moodle $a est abonn� � ce service de votre serveur.';
$string['ispublished'] = 'Le Moodle $a a activ� ce service pour vous.';
$string['version'] = 'version';
$string['id'] = 'ID';
$string['hostname'] = 'Nom d\'h�te';
$string['last_connect_time'] = 'Derni�re connexion';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (sign�)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (auto-sign�)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (sign�)';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (auto-sign�)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP non crypt�';
$string['remotehosts'] = 'Serveurs distants';
$string['permittedtransports'] = 'Transports autoris�s';
$string['current_transport'] = 'Transport actuel';
$string['system'] = 'Syst�me';
$string['on'] = 'Activ�';
$string['off'] = 'D�sactiv�';
$string['strict'] = 'Strict';
$string['promiscuous'] = 'Espion';
$string['aboutyourhost'] = '� propos de votre serveur';
$string['invalidhost'] = 'Vous devez fournir un identifiant serveur valable';

$string['moodleloc'] = 'Localisation du Moodle';
$string['addnewhost'] = 'Ajouter un nouveau serveur';
$string['addhost'] = 'Ajouter un serveur';

$string['never'] = 'Jamais';
$string['restore'] = 'Restaurer';
$string['warning'] = 'Avertissement';
$string['illegalchar-host'] = 'Votre nom d\'h�te comporte le caract�re ill�gal $a';
$string['usersareonline'] = 'Attention&nbsp;! $a utilisateurs de ce serveur sont actuellement connect�s � votre Moodle.';
$string['illegalchar-moodlehome'] = 'La localisation de votre Moodle comporte des caract�res ill�gaux';

$string['nonmatchingcert'] = 'Le sujet du certificat&nbsp;: <br /><em>$a[0]</em><br />ne correspond pas au serveur d\'o� il provient&nbsp;:<br /><em>$a[1]</em>.';
$string['noipmatch'] = 'L\'adresse du serveur distant&nbsp;: <br /><em>$a[0]</em><br />ne correspond pas � celle enregistr�e&nbsp;:<br /><em>$a[1]</em>.';
$string['reviewhostdetails'] = 'Examiner les d�tails du serveur';
$string['reviewhostservices'] = 'Examiner les services du serveur';
$string['moodle_home_help'] = 'Le chemin vers la page d\'accueil de Moodle sur le serveur distant, par exemple /moodle/.';
$string['hostnamehelp'] = 'Le nom de domaine complet (FQDN) du serveur distant, par exemple www.exemple.fr';
$string['idhelp'] = 'Cette valeur est attribu�e automatiquement et ne peut pas �tre modifi�e';
$string['invalidpubkey'] = 'La clef n\'est pas une clef SSL valide.';
$string['nopubkey'] = 'Un probl�me est survenu lors de la r�cup�ration de la clef publique.<br />Il est possible que le serveur n\'accepte pas le R�seau Moodle ou que la clef ne soit pas valide.';
$string['last_connect_time_help'] = 'La date de votre derni�re connexion � ce serveur.';
$string['last_transport_help'] = 'Le transport utilis� lors de votre derni�re connexion � ce serveur.';
$string['transport_help'] = 'Ces options sont r�ciproques. Vous ne pouvez donc imposer � un serveur distant l\'utilisation d\'un certificat SSL sign� que si votre serveur poss�de �galement un certificat SSL.';
$string['https_verified_help'] = 'Autoriser les connexions utilisant un certificat SSL v�rifi� sur le serveur distant.';

$string['http_self_signed_help'] = 'Autoriser les connexions utilisant un certificat DIY SSL auto-sign� sur le serveur distant.';
$string['http_verified_help'] = 'Autoriser les connexions utilisant dans PHP un certificat SSL v�rifi� sur le serveur distant par http (pas https).';
$string['https_self_signed_help'] = 'Autoriser les connexions utilisant un certificat DIY SSL auto-sign� sur le serveur distant par http.';
$string['hostexists'] = 'Un enregistrement de ce serveur et de cette installation de Moodle existe d�j� avec l\'identifiant $a.<br />Cliquez sur <em>Continuer</em> pour modifier cet enregistrement.';
$string['publickey'] = 'Clef publique';
$string['publickey_help'] = 'La clef publique est obtenue automatiquement du serveur distant.';
$string['couldnotgetcert'] = 'Aucun certificat n\'a �t� trouv� sur <br />$a. <br />Le serveur est peut-�tre �teint ou incorrectement configur�.';
$string['ipaddress'] = 'Adresse IP';
$string['badcert'] = 'Ceci n\'est pas un certificat valide.';
$string['couldnotmatchcert'] = 'Ceci ne correspond pas au certificat publi� actuellement par le serveur web.';
$string['forcesavechanges'] = 'Imposer la sauvegarde des modifications';

$string['serviceswepublish'] = 'Services publi�s pour $a.';
$string['serviceswesubscribeto'] = 'Services sur $a auxquels nous sommes abonn�s.';
$string['nohostid'] = 'Cette page requiert un identifiant de serveur, qui doit �tre un entier.';

$string['networksettings'] = 'R�glages r�seau';
$string['helpnetworksettings'] = 'Configurer la communication inter-Moodle';
$string['mnet_concatenate_strings'] = 'Concat�ner (jusqu\'�) 3 cha�nes et retourner le r�sultat';
$string['notPEM'] = 'Cette clef n\'est pas en format PEM. Elle ne fonctionnera pas.';
$string['notBASE64'] = 'Cette cha�ne n\'est pas en format Base64. Ce ne peut pas �tre une clef valide.';

$string['usercannotchangepassword'] = 'Vous ne pouvez pas changer votre mot de passe ici, car vous �tes un utilisateur distant.';
$string['userchangepasswordlink'] = '<br />Vous pourrez changer votre mot de passe chez votre fournisseur <a href=\"$a->wwwroot/login/change_password.php\">$a->description</a>.';

$string['remotehost'] = 'Hub distant';
$string['allow'] = 'Autoriser';
$string['deny'] = 'Interdire';
$string['addtoacl'] = 'Ajouter au contr�le d\'acc�s';
$string['accesslevel'] = 'Niveau d\'acc�s';
$string['ssoaccesscontrol'] = 'Contr�le d\'acc�s SSO';
$string['notpermittedtojump'] = 'Vous n\'�tes pas autoris� � initier une session � distance depuis ce hub Moodle.';
$string['notpermittedtoland'] = 'Vous n\'�tes pas autoris� � initier une session � distance.';
$string['authfail_nosessionexists'] = '�chec d\'autorisation&nbsp;: la session mnet n\'existe pas.';
$string['authfail_sessiontimedout'] = '�chec d\'autorisation&nbsp;: la session mnet est �chue.';
$string['authfail_usermismatch'] = '�chec d\'autorisation&nbsp;: l\'utilisateur ne correspond pas.';
$string['hostnotconfiguredforsso'] = 'Ce hub Moodle distant n\'est pas configur� pour l\'acc�s � distance.';
$string['authmnetdisabled'] = 'L\'authentification par R�seau Moodle est d�sactiv�e.';
$string['unknownerror'] = 'Une erreur inconnue est survenue durant la n�gociation.';
$string['nolocaluser'] = 'Aucun enregistrement local n\'existe pour cet utilisateur distant.';
$string['databaseerror'] = 'Impossible d\'�crire les d�tails dans la base de donn�es.';

?>
