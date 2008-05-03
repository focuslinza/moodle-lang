<?php // $Id$

$string['aborting'] = 'Interruption de l\'installation';
$string['admindirerror'] = 'Le dossier d\'administration spécifié est incorrect';
$string['admindirname'] = 'Dossier d\'administration';
$string['admindirsetting'] = 'De rares  hébergeurs web utilisent le dossier «&nbsp;/admin&nbsp;» comme URL spéciale vous permettant d\'accéder à un tableau de bord ou autre chose. Ceci entre en collision avec l\'emplacement standard des pages d\'administration de Moodle. Vous pouvez corriger cela en renommant le dossier d\'administration de votre installation de Moodle, en inscrivant ici le nouveau nom, par exemple <br /><br /><strong>moodleadmin</strong>.<br /><br />Les liens vers l\'administration de Moodle seront ainsi corrigés.';
$string['admindirsettinghead'] = 'Réglage du dossier «&nbsp;admin&nbsp;»...';
$string['admindirsettingsub'] = 'De rares  hébergeurs web utilisent le dossier «&nbsp;/admin&nbsp;» comme URL spéciale vous permettant d\'accéder à un tableau de bord ou autre chose. Ceci entre en collision avec l\'emplacement standard des pages d\'administration de Moodle. Vous pouvez corriger cela en renommant le dossier d\'administration de votre installation de Moodle, en inscrivant ici le nouveau nom, par exemple <br /><br /><strong>moodleadmin</strong>.<br /><br />Les liens vers l\'administration de Moodle seront ainsi corrigés.';
$string['adminemail'] = 'Courriel :';
$string['adminfirstname'] = 'Prénom :';
$string['admininfo'] = 'Coordonnées administrateur';
$string['adminlastname'] = 'Nom :';
$string['adminpassword'] = 'Mot de passe :';
$string['adminusername'] = 'Nom d\'utilisateur :';
$string['askcontinue'] = 'Continuer ? (yes/no) :';
$string['availabledbtypes'] = 'Types de DB disponibles';
$string['availablelangs'] = 'Liste des langues disponibles';
$string['cannotconnecttodb'] = 'Impossible de se connecter à la DB';
$string['caution'] = 'Attention';
$string['checkingphpsettings'] = 'Vérification des réglages PHP';
$string['chooselanguage'] = 'Choisissez une langue';
$string['chooselanguagehead'] = 'Choisissez une langue';
$string['chooselanguagesub'] = 'Veuillez choisir la langue d\'installation. Vous pourrez choisir ultérieurement la langue du site et les langues des utilisateurs.';
$string['compatibilitysettings'] = 'Vérification de votre configuration PHP...';
$string['compatibilitysettingshead'] = 'Vérification de votre configuration PHP...';
$string['compatibilitysettingssub'] = 'Votre serveur doit passer tous ces tests pour que Moodle fonctionne correctement.';
$string['configfilecreated'] = 'Fichier de configuration créé correctement';
$string['configfiledoesnotexist'] = 'Le fichier de configuration n\'existe pas !';
$string['configfilenotwritten'] = 'Le programme d\'installation n\'a pas pu créer automatiquement le fichier de configuration «&nbsp;config.php&nbsp;» contenant vos réglages, vraisemblablement parce que le dossier principal de Moodle n\'est pas accessible en écriture. Vous pouvez copier le code ci-dessous dans un fichier appelé «&nbsp;config.php&nbsp;», que vous placerez à l\'intérieur du dossier principal de Moodle (là où se trouve un fichier «&nbsp;config-dist.php&nbsp;»).';
$string['configfilewritten'] = 'Le fichier «&nbsp;config.php&nbsp;» a été créé correctement';
$string['configurationcomplete'] = 'Configuration terminée';
$string['configurationcompletehead'] = 'Configuration terminée';
$string['configurationcompletesub'] = 'Moodle a tenté d\'enregistrer votre configuration dans un fichier à la racine de votre installation de Moodle.';
$string['configurationfileexist'] = 'Le fichier de configuration existe déjà !';
$string['creatingconfigfile'] = 'Création du fichier de configuration...';
$string['database'] = 'Base de données';
$string['databasecreationsettings'] = 'La base de données dans laquelle sont enregistrées la plupart des données utilisées par Moodle doit maintenant être configurée. Cette base de données sera créée automatiquement par l\'installeur Moodle4Windows avec les options spécifiées ci-dessous.<br /><br /><br />
<strong>Type&nbsp;:</strong> réglé sur «&nbsp;mysql&nbsp;» par l\'installeur<br />
<strong>Serveur&nbsp;:</strong> réglé sur «&nbsp;localhost&nbsp;» par l\'installeur<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> réglé sur «&nbsp;root&nbsp;» par l\'installeur<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (facultatif)';
$string['databasecreationsettingshead'] = 'La base de données dans laquelle sont enregistrées la plupart des données utilisées par Moodle doit maintenant être configurée. Cette base de données sera créée automatiquement par l\'installeur Moodle4Windows avec les options spécifiées ci-dessous.';
$string['databasecreationsettingssub'] = '<strong>Type&nbsp;:</strong> réglé sur «&nbsp;mysql&nbsp;» par l\'installeur<br />
<strong>Serveur&nbsp;:</strong> réglé sur «&nbsp;localhost&nbsp;» par l\'installeur<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> réglé sur «&nbsp;root&nbsp;» par l\'installeur<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (facultatif)';
$string['databasehost'] = 'Serveur de base de données :';
$string['databasename'] = 'Nom de la base de données :';
$string['databasepass'] = 'Mot de passe de la base de données :';
$string['databasesettings'] = 'La base de données dans laquelle sont enregistrées la plupart des données utilisées par Moodle doit maintenant être configurée. Cette base de données doit avoir déjà été créée sur le serveur, ainsi qu\'un nom d\'utilisateur et un mot de passe permettant d\'y accéder.<br /><br /><br />
<strong>Type&nbsp;:</strong> «&nbsp;mysql&nbsp;» ou «&nbsp;postgres7&nbsp;»<br />
<strong>Serveur hôte&nbsp;:</strong> le plus souvent «&nbsp;localhost&nbsp;» ou par exemple «&nbsp;db.isp.com&nbsp;»<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (facultatif)';
$string['databasesettingsformoodle'] = 'Réglages de la base de données de Moodle';
$string['databasesettingshead'] = 'La base de données dans laquelle sont enregistrées la plupart des données utilisées par Moodle doit maintenant être configurée. Cette base de données doit avoir déjà été créée sur le serveur, ainsi qu\'un nom d\'utilisateur et un mot de passe permettant d\'y accéder.';
$string['databasesettingssub'] = '<strong>Type&nbsp;:</strong> «&nbsp;mysql&nbsp;» ou «&nbsp;postgres7&nbsp;»<br />
<strong>Serveur hôte&nbsp;:</strong> le plus souvent «&nbsp;localhost&nbsp;» ou par exemple «&nbsp;db.isp.com&nbsp;»<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (facultatif)';
$string['databasesettingssub_mysql'] = '<strong>Type&nbsp;:</strong> MySQL<br />
<strong>Serveur hôte&nbsp;:</strong> le plus souvent «&nbsp;localhost&nbsp;» ou par exemple «&nbsp;db.isp.com&nbsp;»<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (facultatif)';
$string['databasesettingssub_mysqli'] = '<strong>Type&nbsp;:</strong> Improved MySQL<br />
<strong>Serveur hôte&nbsp;:</strong> le plus souvent «&nbsp;localhost&nbsp;» ou par exemple «&nbsp;db.isp.com&nbsp;»<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (facultatif)';
$string['databasesettingssub_postgres7'] = '<strong>Type&nbsp;:</strong> PostgreSQL<br />
<strong>Serveur hôte&nbsp;:</strong> le plus souvent «&nbsp;localhost&nbsp;» ou par exemple «&nbsp;db.isp.com&nbsp;»<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (requis)';
$string['databasesettingssub_mssql'] = '<strong>Type&nbsp;:</strong> SQL*Server (sans UTF-8) <strong><font color=\"red\">Expérimental&nbsp;! (ne pas utiliser en production)</font></strong><br />
<strong>Serveur hôte&nbsp;:</strong> le plus souvent «&nbsp;localhost&nbsp;» ou par exemple «&nbsp;db.isp.com&nbsp;»<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (requis)';
$string['databasesettingssub_mssql_n'] = '<strong>Type&nbsp;:</strong> SQL*Server (UTF-8 activé)<br />
<strong>Serveur hôte&nbsp;:</strong> le plus souvent «&nbsp;localhost&nbsp;» ou par exemple «&nbsp;db.isp.com&nbsp;»<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (requis)';
$string['databasesettingssub_odbc_mssql'] = '<strong>Type&nbsp;:</strong> SQL*Server (via ODBC) <strong><font color=\"red\">Expérimental&nbsp;! (ne pas utiliser en production)</font></strong><br />
<strong>Serveur hôte&nbsp;:</strong> Nom du DSN dans le panneau de contrôle ODBC<br />
<strong>Nom&nbsp;:</strong> nom de la base de données, par exemple «&nbsp;moodle&nbsp;»<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (requis)';
$string['databasesettingssub_oci8po'] = '<strong>Type&nbsp;:</strong> Oracle<br />
<strong>Serveur hôte&nbsp;:</strong> n\'est pas utilisé, doit être laissé vide<br />
<strong>Nom&nbsp;:</strong> given Nom of the tnsNoms.ora connection<br />
<strong>Utilisateur&nbsp;:</strong> le nom d\'utilisateur de la base de données<br />
<strong>Mot de passe&nbsp;:</strong> le mot de passe de la base de données<br />
<strong>Préfixe des tables&nbsp;:</strong> le préfixe à utiliser pour les noms de toutes les tables (requis, max. 2cc.)';
$string['databasesettingswillbecreated'] = '<b>Remarque&nbsp;:</b> l\'installeur va essayer de créer automatiquement la base de données, si elle n\'existe pas encore.';
$string['databasetype'] = 'Type de base de données :';
$string['databaseuser'] = 'Utilisateur de la base de données :';
$string['dataroot'] = 'Dossier de données';
$string['datarooterror'] = 'Le dossier de données indiqué n\'a pas pu être trouvé ou créé. Veuillez corriger le paramètre ou créer manuellement le dossier.';
$string['dbconnectionerror'] = 'Moodle n\'a pas pu se connecter à la base de données indiquée. Veuillez vérifier les paramètres de votre base de données';
$string['dbcreationerror'] = 'Erreur lors de la création de la base de données. Impossible de créer la base de données avec les paramètres fournis';
$string['dbwrongencoding'] = 'La base de données choisie fonctionne avec un encodage non recommandé ($a). La meilleure solution serait d\'utiliser plutôt une base de données encodée en Unicode (UTF-8). Vous pouvez cependant passer outre ce test en cochant l\'option «&nbsp;Ne pas effectuer le test d\'encodage de la base de données&nbsp;» ci-dessous, mais alors des problèmes pourraient survenir à l\'avenir.';
$string['dbhost'] = 'Serveur hôte';
$string['dbpass'] = 'Mot de passe';
$string['dbprefix'] = 'Préfixe des tables';
$string['dbtype'] = 'Type';
$string['dbwronghostserver'] = 'Vous devez suivre les règles «&nbsp;Hôte&nbsp;» expliquées ci-dessus.';
$string['dbwrongnlslang'] = 'La variable d\'environnement NLS_LANG de votre serveur web doit utiliser le jeu de caractères AL32UTF8. Voir la documentation PHP pour configurer correctement OCI8.';
$string['dbwrongprefix'] = 'Vous devez suivre les règles «&nbsp;Préfixe des tables&nbsp;» expliquées ci-dessus.';
$string['directorysettings'] = '<p>Veuillez confirmer les emplacements de cette installation de Moodle.</p>
<p><strong>Adresse web :</strong> veuillez indiquer l\'adresse web complète par laquelle on accédera à Moodle. Si votre site web est accessible par plusieurs URL, choisissez celle qui est la plus naturelle ou la plus évidente. Ne placez pas de barre oblique à la fin de l\'adresse.</p>
<p><strong>Dossier Moodle :</strong> veuillez spécifier le chemin complet de cette installation de Moodle («&nbsp;OS path&nbsp;»). Assurez-vous que la casse des caractères (majuscules/minuscules) est correcte.</p>
<p><strong>Dossier de données :</strong> Moodle a besoin d\'un emplacement où enregistrer les fichiers déposés sur le site. Le serveur web (utilisateur dénommé habituellement «&nbsp;www&nbsp;», «&nbsp;apache&nbsp;» ou «&nbsp;nobody&nbsp;») doit avoir accès à ce dossier en lecture et EN ÉCRITURE. Toutefois ce dossier ne doit pas être accessible directement depuis le web.</p>';
$string['directorysettingshead'] = 'Veuillez confirmer les emplacements de cette installation de Moodle.';
$string['directorysettingssub'] = '<strong>Adresse web :</strong> veuillez indiquer l\'adresse web complète par laquelle on accédera à Moodle. Si votre site web est accessible par plusieurs URL, choisissez celle qui est la plus naturelle ou la plus évidente. Ne placez pas de barre oblique à la fin de l\'adresse.<br /><br />
<strong>Dossier Moodle :</strong> veuillez spécifier le chemin complet de cette installation de Moodle («&nbsp;OS path&nbsp;»). Assurez-vous que la casse des caractères (majuscules/minuscules) est correcte.<br /><br />
<strong>Dossier de données :</strong> Moodle a besoin d\'un emplacement où enregistrer les fichiers déposés sur le site. Le serveur web (utilisateur dénommé habituellement «&nbsp;www&nbsp;», «&nbsp;apache&nbsp;» ou «&nbsp;nobody&nbsp;») doit avoir accès à ce dossier en lecture et EN ÉCRITURE. Toutefois ce dossier ne devrait pas être accessible directement depuis le web.';
$string['dirroot'] = 'Dossier Moodle';
$string['dirrooterror'] = 'Le dossier Moodle semble incorrect : aucune installation de Moodle ne se trouve dans ce dossier. Le dossier Moodle indiqué ci-dessous est vraisemblablement correct.';
$string['disagreelicense'] = 'La mise à jour ne peut pas continuer, puisque vous n\'êtes pas d\'accord avec la GPL !';
$string['download'] = 'Télécharger';
$string['downloadlanguagebutton'] = 'Télécharger le paquetage de langue « $a »';
$string['downloadlanguagehead'] = 'Téléchargement du paquetage de la langue d\'installation';
$string['downloadlanguagenotneeded'] = 'Vous pouvez continuer la procédure d\'installation avec la langue par défaut «&nbsp;$a&nbsp;».';
$string['downloadlanguagepack'] = 'Voulez-vous télécharger maintenant le paquetage de langue ? (yes/no) :';
$string['downloadlanguagesub'] = 'Vous avez maintenant la possibilité de télécharger le paquetage de la langue que vous avez sélectionnée afin de poursuivre l\'installation dans cette langue.<br /><br />Si le téléchargement ne peut avoir lieu, la procédure d\'installation continuera en anglais. Une fois l\'installation terminée, vous pourrez alors télécharger et installer d\'autres langues.';
$string['downloadsuccess'] = 'Le paquetage de langue a été téléchargé correctement';
$string['doyouagree'] = 'Étes-vous d\'accord ? (yes/no) :';
$string['environmenthead'] = 'Vérification de l\'environnement...';
$string['environmentsub'] = 'Les divers composants de votre système doivent satisfaire les exigences nécessaires à Moodle. Une vérification de votre environnement est en cours.';
$string['errorsinenvironment'] = 'Erreurs dans l\'environnement !';
$string['fail'] = 'Échec';
$string['fileuploads'] = 'Téléchargement des fichiers';
$string['fileuploadserror'] = 'Le téléchargement des fichiers sur le serveur doit être activé';
$string['fileuploadshelp'] = '<p>Le téléchargement des fichiers semble désactivé sur votre serveur.</p><p>Moodle peut être installé malgré tout, mais personne ne pourra déposer aucun fichier de cours, ni aucune image dans les profils utilisateurs.</p><p>Pour activer le téléchargement des fichiers sur votre serveur, vous (ou l\'administrateur du serveur) devez modifier le fichier «&nbsp;php.ini&nbsp;» du système en donnant au paramètre <strong>file_uploads</strong> la valeur 1.</p>';
$string['gdversion'] = 'Version de GD';
$string['gdversionerror'] = 'La librairie GD doit être activée pour traiter et créer les images';
$string['gdversionhelp'] = '<p>Il semble que la librairie GD n\'est pas installée sur votre serveur.</p><p>GD est une librairie requise par PHP pour permettre à Moodle de traiter les images (comme les photos des profils) et de créer des graphiques (par exemple ceux des historiques). Moodle fonctionnera sans GD, mais ces fonctionnalités ne seront pas disponibles pour vous.</p><p>Sur Unix ou Mac OS X, pour ajouter GD à PHP, vous pouvez compiler PHP avec l\'option <em>--with-gd</em>.</p><p>Sous Windows, on peut normalement modifier le fichier «&nbsp;php.ini&nbsp;» en enlevant le commentaire de la ligne référençant la librairie php_gd2.dll.</p>';
$string['globalsquotes'] = 'Traitement non sûr des variables globales';
$string['globalsquoteserror'] = 'Veuillez corriger vos réglages PHP&nbsp;: désactivez «&nbsp;register_globals&nbsp;» et/ou activez «&nbsp;magic_quotes_gpc&nbsp;»';
$string['globalsquoteshelp'] = '<p>Pour des raisons de sécurité, la combinaison de la désactivation de l\'option «&nbsp;Magic Quotes GPC&nbsp;» et de l\'activation de l\'option «&nbsp;Register Globals&nbsp;» n\'est pas recommandée.</p> <p>Le réglage recommandé est <b>magic_quotes_gpc = On</b> et <b>register_globals = Off</b> dans votre fichier «&nbsp;php.ini&nbsp;».</p> <p>Si vous n\'avez pas accès au fichier «&nbsp;php.ini&nbsp;», il vous est peut-être possible de placer les deux lignes suivantes dans un fichier dénommé «&nbsp;.htaccess&nbsp;» placé dans votre dossier Moodle. <blockquote>php_value magic_quotes_gpc On</blockquote> <blockquote>php_value register_globals Off</blockquote></p>';
$string['inputdatadirectory'] = 'Dossier de données :';
$string['inputwebadress'] = 'Adresse web :';
$string['inputwebdirectory'] = 'Dossier Moodle :';
$string['installation'] = 'Installation';
$string['installationiscomplete'] = 'L\'installation est terminée !';
$string['invalidargumenthelp'] = '
    Erreur: Argument(s) non valide(s)
    Usage: \$php cliupgrade.php OPTIONS
    Utiliser l\'option --help pour obtenir plus d\'aide';
$string['invalidemail'] = 'Courriel non valide';
$string['invalidhost'] = 'Serveur non valide';
$string['invalidint'] = 'Erreur: la valeur n\'est pas un entier';
$string['invalidintrange'] = 'Erreur: la valeur n\'est pas dans l\'intervalle correct';
$string['invalidpath'] = 'Chemin non valide';
$string['invalidsetelement']= 'Erreur: la valeur n\'est pas une des options données';
$string['invalidtextvalue'] = 'Valeur texte non valide';
$string['invalidurl'] = 'URL non valide';
$string['invalidvalueforlanguage'] = 'Valeur non valide pour l\'option --lang. Tapez --help pour plus d\'aide';
$string['invalidyesno'] = 'Erreur: la valeur n\'est pas un argument yes/no valide';
$string['installation'] = 'Installation';
$string['langdownloadok'] = 'La langue $a a été installée correctement. La suite de l\'installation se déroulera dans cette langue';
$string['langdownloaderror'] = 'La langue $a n\'a pas été installée. La suite de l\'installation se déroulera en anglais. Vous pourrez télécharger et installer d\'autres langues à la fin de l\'installation';
$string['locationanddirectories'] = 'Emplacement et dossiers';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Ce réglage doit être désactivé';
$string['magicquotesruntimehelp'] = '<p>Le réglage «&nbsp;Magic quotes runtime&nbsp;» doit être désactivé pour que Moodle fonctionne correctement.</p><p>Il est normalement désactivé par défaut. Voyez le paramètre <strong>magic_quotes_runtime</strong> du fichier «&nbsp;php.ini&nbsp;» de votre serveur.</p><p>Si vous n\'avez pas accès à votre fichier «&nbsp;php.ini&nbsp;», vous pouvez créer dans le dossier principal de Moodle un fichier «&nbsp;.htaccess&nbsp;» contenant cette ligne&nbsp;:<br /><blockquote>php_value magic_quotes_runtime Off</blockquote></p>';
$string['memorylimit'] = 'Limite de mémoire';
$string['memorylimiterror'] = 'La limite de mémoire de PHP est très basse. Vous risquez de rencontrer des problèmes ultérieurement.';
$string['memorylimithelp'] = '<p>La limite de mémoire de PHP sur votre serveur est actuellement de $a.</p><p>Cette valeur trop basse risque de générer des problèmes de manque de mémoire pour Moodle, notamment si vous utilisez beaucoup de modules et/ou si vous avez un grand nombre d\'utilisateurs.</p><p>Il est recommandé de configurer PHP avec une limite de mémoire aussi élevée que possible, par exemple 16 Mo. Vous pouvez obtenir cela de différentes façons :
<ol>
<li>si vous en avez la possibilité, recompilez PHP avec l\'option <em>--enable-memory-limit</em>. Cela permettra à Moodle de fixer lui-même sa limite de mémoire ;</li>
<li>si vous avez accès à votre fichier «&nbsp;php.ini&nbsp;», vous pouvez attribuer au paramètre <strong>memory_limit</strong> une valeur comme 40M. Si vous n\'y avez pas accès, demandez à l\'administrateur de le faire pour vous ;</li>
<li>sur certains serveurs, vous pouvez créer dans le dossier principal de Moodle un fichier «&nbsp;.htaccess&nbsp;» contenant cette ligne : <p><blockquote>php_value memory_limit 40M</blockquote></p><p>Cependant, sur certains serveur, cela empêchera le fonctionnement correct de <strong>tous</strong> les fichiers PHP (vous verrez s\'afficher des erreurs lors de la consultation de pages). Dans ce cas, vous devrez supprimer le fichier «&nbsp;.htaccess&nbsp;».</li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server avec support de UTF-8 (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'La configuration de l\'extension MSSQL de PHP n\'a pas été effectuée correctement. De ce fait, PHP ne peut communiquer avec SQL*Server. Veuillez vérifier votre fichier «&nbsp;php.ini&nbsp;» ou recompiler PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'La configuration de l\'extension MySQL de PHP n\'a pas été effectuée correctement. De ce fait, PHP ne peut communiquer avec MySQL. Veuillez contrôler votre fichier «&nbsp;php.ini&nbsp;» ou recompiler PHP.';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'La configuration de l\'extension MySQLi de PHP n\'a pas été effectuée correctement. De ce fait, PHP ne peut communiquer avec MySQL. Veuillez contrôler votre fichier «&nbsp;php.ini&nbsp;» ou recompiler PHP. L\'extension MySQLi n\'est pas disponible pour PHP 4.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'La configuration de l\'extension OCI8 de PHP n\'a pas été effectuée correctement. De ce fait, PHP ne peut communiquer avec Oracle. Veuillez contrôler votre fichier «&nbsp;php.ini&nbsp;» ou recompiler PHP.';
$string['odbcextensionisnotpresentinphp'] = 'La configuration de l\'extension ODBC de PHP n\'a pas été effectuée correctement. De ce fait, PHP ne peut communiquer avec SQL*Server. Veuillez contrôler votre fichier «&nbsp;php.ini&nbsp;» ou recompiler PHP.';
$string['odbc_mssql'] = 'SQL*Server via ODBC (odbc_mssql)';
$string['pass'] = 'Réussi';
$string['pgsqlextensionisnotpresentinphp'] = 'La configuration de l\'extension PGSQL de PHP n\'a pas été effectuée correctement. De ce fait, PHP ne peut communiquer avec PostgreSQL. Veuillez contrôler votre fichier «&nbsp;php.ini&nbsp;» ou recompiler PHP.';
$string['php52versionerror'] = 'La version de PHP doit être au moins 5.2.0.';
$string['php52versionhelp'] = '<p>Moodle requiert une version de PHP 5.2.0 ou postérieure.</p><p>Votre serveur utilise actuellement la version $a</p><p>Pour que Moodle fonctionne, vous devez mettre à jour PHP ou aller chez un hébergeur ayant une version récente de PHP.</p>';
$string['phpversion'] = 'Version de PHP';
$string['phpversionerror'] = 'La version du programme PHP doit être au moins 4.3.0 ou 5.1.0 (5.0.x a bon nombre de problèmes).';
$string['phpversionhelp'] = '<p>Moodle nécessite au minimum la version 4.3.0 ou 5.1.0 (5.0.x a bon nombre de problèmes).</p><p>Vous utilisez actuellement la version $a.</p><p>Pour que Moodle fonctionne, vous devez mettre à jour PHP ou aller chez un hébergeur ayant une version récente de PHP.<br />(Si vous avez une version 5.0.x, vous pouvez aussi re-passer à la version 4.4.x)</p>'; // ORPHANED
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['releasenoteslink'] = 'Pour des informations sur cette version de Moodle, veuillez lire les notes de version à $a';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle risque de rencontrer des problèmes lorsque le mode «&nbsp;safe mode&nbsp;» est activé';
$string['safemodehelp'] = '<p>Moodle risque de rencontrer un certain nombre de problèmes lorsque le mode «&nbsp;safe mode&nbsp;» est activé. Il pourra notamment être incapable de créer de nouveaux fichiers.</p><p>Ce mode n\'est habituellement activé que chez certains hébergeurs paranoïaques. Il vous faudra donc trouver un autre hébergeur pour votre site Moodle.</p><p>Vous pouvez continuer l\'installation de Moodle, mais attendez-vous à des problèmes ultérieurement.</p>';
$string['selectlanguage'] = 'Choix d\'une langue pour l\'installation';
$string['sessionautostart'] = 'Démarrage automatique des sessions';
$string['sessionautostarterror'] = 'Ce paramètre doit être désactivé';
$string['sessionautostarthelp'] = '<p>Moodle a besoin du support des sessions. il ne fonctionnera pas sans cela.</p><p>Les sessions peuvent être activées dans le fichier «&nbsp;php.ini&nbsp;» de votre serveur, en changeant la valeur du paramètre <strong>session.auto_start</strong>.</p>';
$string['sitefullname'] = 'Nom complet du site :';
$string['siteinfo'] = 'Détails du site';
$string['sitenewsitems'] = 'Nouvelles :';
$string['siteshortname'] = 'Nom abrégé du site :';
$string['sitesummary'] = 'Résumé du site :';
$string['skipdbencodingtest'] = 'Ne pas effectuer le test d\'encodage de la base de données';
$string['tableprefix'] = 'Préfixe des tables :';
$string['upgradingactivitymodule']= 'Mise à jour du module Activité';
$string['upgradingbackupdb'] = 'Mise à jour de la base de données du backup';
$string['upgradingblocksdb'] = 'Mise à jour de la base de données des blocs';
$string['upgradingblocksplugin'] = 'Mise à jour du plugin Bloc';
$string['upgradingcompleted'] = 'Mise à jour terminée...';
$string['upgradingcourseformatplugin'] = 'Mise à jour du plugin Format de cours';
$string['upgradingenrolplugin'] = 'Mise à jour du plugin Inscription';
$string['upgradinggradeexportplugin'] = 'Mise à jour du plugin Exportation des notes';
$string['upgradinggradeimportplugin'] = 'Mise à jour du plugin Importation des notes';
$string['upgradinggradereportplugin'] = 'Mise à jour du plugin Rapport des notes';
$string['upgradinglocaldb'] = 'Mise à jour de la base de données locale';
$string['upgradingmessageoutputpluggin'] = 'Mise à jour du plugin Message';
$string['upgradingqtypeplugin'] = 'Mise à jour du plugin Question';
$string['upgradingrpcfunctions'] = 'Mise à jour des fonctions RPC';
$string['usagehelp']='
Synopsis:
\$php cliupgrade.php OPTIONS\n
OPTIONS
--lang              Langue installée à utiliser pour l\'installation. Par défaut, l\'anglais (en)
--webaddr           Adresse web du site Moodle
--moodledir         Emplacement du dossier web de moodle
--datadir           Emplacement du dossier de données de moodle (ne devrait pas être accessible depuis le web)
--dbtype            Type de base de données. Par défaut, mysql
--dbhost            Serveur de base de données. Par défaut, localhost
--dbname            Nom de la base de données. Par défaut, moodle
--dbuser            Utilisateur de la base de données. Par défaut, vide
--dbpass            Mot de passe de la base de données. Par défaut, vide
--prefix            Préfixe des tables pour la base de données ci-dessus. Par défaut, mdl
--verbose           0 Pas d\'output, 1 Output brève (défaut), 2 Output détaillée
--interactivelevel  0 Non interactif, 1 semi-interactif (défaut), 2 interactif
--agreelicense      Yes (défaut) ou No
--confirmrelease    Yes (défaut) ou No
--sitefullname      Nom complet du site. Par défaut, Moodle Site (Please Change Site Name!!)
--siteshortname     Nom abrégé du site. Par défaut,  moodle
--sitesummary       Résumé du site. Default is blank 
--adminfirstname    Prénom de l\'administrateur. Par défaut, Admin
--adminlastname     Nom de l\'administrateur. Par défaut, User
--adminusername     Nom d\'utilisateur de l\'administrateur. Par défaut, admin
--adminpassword     Mot de passe de l\'administrateur. Par défaut, admin
--adminemail        Adresse de courriel de l\'administrateur. Par défaut, root@localhost
--help              print out this help\n
Usage:
\$php cliupgrade.php --lang=en --webaddr=http://www.example.com --moodledir=/var/www/html/moodle --datadir=/var/moodledata --dbtype=mysql --dbhost=localhost --dbname=moodle --dbuser=root --prefix=mdl --agreelicense=yes --confirmrelease=yes --sitefullname=\"Site Moodle de test\" --siteshortname=moodle --sitesummary=monbeausite --adminfirstname=Admin --adminlastname=User --adminusername=admin --adminpassword=admin --adminemail=admin@example.com --verbose=1 --interactivelevel=2';
$string['versionerror'] = 'Installation interrompue en raison d\'une erreur de version';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Vous voyez cette page, car vous avez installé Moodle correctement et lancé le logiciel <strong>$a->packname $a->packversion</strong> sur votre ordinateur. Félicitations&nbsp;!';
$string['welcomep30'] = 'Cette version du paquet <strong>$a->installername</strong> comprend des logiciels qui créent un environnement dans lequel <strong>Moodle</strong> va fonctionner, à savoir&nbsp;:';
$string['welcomep40'] = 'Ce paquet contient également <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'L\'utilisation de tous les logiciels de ce paquet est soumis à l\'acceptation de leurs licences respectives. Le paquet <strong>$a->installername</strong> est un <a href=\"http://www.opensource.org/docs/definition_plain.html\">logiciel libre</a>. Il est distribué sous licence <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Les pages suivantes vous aideront pas à pas à configurer et mettre en place <strong>Moodle</strong> sur votre ordinateur. Il vous sera possible d\'accepter les réglages par défaut ou, facultativement, de les adapter à vos propres besoins.';
$string['welcomep70'] = 'Cliquer sur le bouton «&nbsp;Suivant&nbsp;» ci-dessous pour continuer l\'installation de <strong>Moodle</strong>.';
$string['welcometext']='---Bienvenue à l\'installeur de Moodle en ligne de commande---';
$string['writetoconfigfilefaild'] = 'Erreur: L\'écriture du fichier de configuration à échoué';
$string['wwwroot'] = 'Adresse web';
$string['wwwrooterror'] = 'L\'adresse web indiquée semble incorrecte&nbsp;: aucune installation de Moodle ne se trouve à cette adresse.';
$string['yourchoice'] = 'Votre choix :';

?>