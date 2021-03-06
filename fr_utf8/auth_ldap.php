<?php

// LDAP plugin

$string['auth_ldap_ad_create_req'] = 'Impossible de créer le nouveau compte dans Active Directory. Assurez-vous que votre serveur satisfait toutes les conditions requises pour que cela fonctionne (connexion LDAPS, utilisateur de connexion avec droits adéquats, etc.)';
$string['auth_ldap_attrcreators'] = 'Liste des groupes ou contextes dont les membres sont autorisés à créer des attributs. Les groupes (en général, de la forme « cn=teachers,ou=staff,o=myorg ») sont séparés par des points-virgules (;)';
$string['auth_ldap_attrcreators_key'] = 'Gestionnaires d\'attributs';
$string['auth_ldap_auth_user_create_key'] = 'Créer les utilisateurs en externe';
$string['auth_ldap_bind_dn_key'] = 'DN (Distinguished Name)';
$string['auth_ldap_bind_dn'] = 'Si vous souhaitez utiliser une connexion authentifiée au serveur LDAP pour chercher les utilisateurs, indiquez ici son nom de connexion. Quelque chose comme : « cn=ldapuser, o=Organisation, c=FR ».';
$string['auth_ldap_bind_pw_key'] = 'Mot de passe';
$string['auth_ldap_bind_pw'] = 'Mot de passe pour cette connexion';
$string['auth_ldap_bind_settings'] = 'Configuration de la connexion';
$string['auth_ldap_changepasswordurl_key'] = 'URL pour changement de mot de passe';
$string['auth_ldap_contexts_key'] = 'Contextes';
$string['auth_ldap_contexts'] = 'Liste des contextes de l\'annuaire LDAP, séparés par « ; », où les enregistrements des utilisateurs sont situés. Par exemple : « ou=Étudiants, o=Organisation, c=FR; ou=Enseignants, o=Organisation, c=FR ».';
$string['auth_ldap_create_context_key'] = 'Contexte des nouveaux utilisateurs';
$string['auth_ldap_create_context'] = 'Lors de l\'utilisation de la création d\'utilisateurs avec confirmation par courriel, indiquer ici le contexte où créer les utilisateurs. Pour des raisons de sécurité, ce contexte ne doit pas être le même que celui des autres utilisateurs. Il n\'est pas nécessaire d\'ajouter ce contexte à la variable ldap_context. Moodle cherchera automatiquement les utilisateurs dans ce contexte.<br /><strong>Remarque :</strong> vous devrez modifier la méthode user_create() dans le fichier auth/ldap/auth.php pour permettre la création des utilisateurs.';
$string['auth_ldap_create_error'] = 'Erreur lors de la création de l\'utilisateur dans LDAP.';
$string['auth_ldap_creators_key'] = 'Gestionnaires de cours';
$string['auth_ldap_creators'] = 'Liste des groupes ou contextes dont les membres sont autorisés à créer des cours. Les groupes (en général, de la forme « cn=teachers,ou=staff,o=myorg ») sont séparés par des points-virgules (;).';
$string['auth_ldap_expiration_desc'] = 'Si vous voulez désactiver le contrôle d\'échéance des mots de passe, indiquez « Non ». Si vous indiquez LDAP, la durée sera reprise automatiquement de la variable passwordexpiration du serveur LDAP';
$string['auth_ldap_expiration_key'] = 'Échéance';
$string['auth_ldap_expiration_warning_desc'] = 'Nombre de jours avant que l\'avertissement d\'échéance soit affiché.';
$string['auth_ldap_expiration_warning_key'] = 'Avertissement d\'échéance';
$string['auth_ldap_expireattr_desc'] = 'Facultatif : ne pas tenir compte de l\'attribut ldap contenant la durée d\'échéance du mot de passe';
$string['auth_ldap_expireattr_key'] = 'Attribut d\'échéance';
$string['auth_ldap_graceattr_desc'] = 'Facultatif : ne pas tenir compte de l\'attribut gracelogin';
$string['auth_ldap_gracelogin_key'] = 'Attribut gracelogin';
$string['auth_ldap_gracelogins_desc'] = 'Activer le support du gracelogin LDAP. Une fois le mot de passe échu, l\'utilisateur peut se connecter jusqu\'à ce que le paramètre gracelogin ait une valeur de 0. L\'activation de ce réglage affiche un message explicite lorsque le mot de passe est échu.';
$string['auth_ldap_gracelogins_key'] = 'Support gracelogin';
$string['auth_ldap_groupecreators'] = 'Liste des groupes ou contextes dont les membres sont autorisés à créer des groupes. Les groupes (en général, de la forme « cn=teachers,ou=staff,o=myorg ») sont séparés par des points-virgules (;)';
$string['auth_ldap_groupecreators_key'] = 'Gestionnaires de groupes';
$string['auth_ldap_host_url_key'] = 'URL du serveur';
$string['auth_ldap_host_url'] = 'Indiquer le serveur LDAP sous forme d\'URL comme ceci :<br />« ldap://ldap.organisation.fr/ »<br />ou :<br />« ldaps://ldap.organisation.fr/ ». Si vous utilisez plusieurs serveurs LDAP par sécurité, séparez leurs adresses avec des points-virgules (;).';
$string['auth_ldap_ldap_encoding'] = 'Indiquer l\'encodage utilisé par le serveur LDAP. Très probablement utf-8. Microsoft AD v2 utilise l\'encodage par défaut de la plateforme, par exemple cp1252, cp1250, etc.';
$string['auth_ldap_ldap_encoding_key'] = 'Encodage LDAP';
$string['auth_ldap_login_settings'] = 'Configuration de la connexion';
$string['auth_ldap_memberattribute_isdn'] = 'Facultatif : court-circuiter le traitement des valeurs de l\'attribut d\'appartenance, 0 ou 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'L\'attribut appartenance utilise dn';
$string['auth_ldap_memberattribute_key'] = 'Attribut appartenance';
$string['auth_ldap_memberattribute'] = 'Indiquer l\'attribut d\'appartenance à un groupe. D\'habitude cet attribut est « member ».';
$string['auth_ldap_no_mbstring'] = 'L\'extension mbstring est nécessaire pour créer des utilisateurs dans Active Directory.';
$string['auth_ldap_noconnect_all'] = 'Le module LDAP ne peut pas se connecter à aucun des serveurs $a';
$string['auth_ldap_noconnect'] = 'Le module LDAP ne peut pas se connecter au serveur $a';
$string['auth_ldap_noextension'] = 'Attention ! Le module LDAP ne semble pas être installé. Veuillez vous assurer qu\'il est bien installé et activé.';
$string['auth_ldap_objectclass_key'] = 'Classe objet';
$string['auth_ldap_objectclass'] = 'Le filtre utilisé pour rechercher/renommer des utilisateurs. On y mettra d\'habitude quelque chose comme objectClass=posixAccount. La valeur par défaut est objectClass=*, ce qui retournera tous les objets du serveur LDAP.';
$string['auth_ldap_opt_deref_key'] = 'Déréférencement des alias';
$string['auth_ldap_opt_deref'] = 'Détermine le traitement des alias durant la recherche. Veuillez sélectionner une des valeurs suivantes : « Non » (LDAP_DEREF_NEVER) ou « Oui » (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passtype'] = 'Indiquer le format des mots de passe (nouveaux ou modifiés) dans le serveur LDAP.';
$string['auth_ldap_passtype_key'] = 'Format de mot de passe';
$string['auth_ldap_passwdexpire_settings'] = 'Réglages de l\'échéance du mot de passe LDAP.';
$string['auth_ldap_preventpassindb_key'] = 'Cacher mots de passe';
$string['auth_ldap_preventpassindb'] = 'Choisissez « Oui » pour empêcher le stockage des mots de passe dans la base de données de Moodle.';
$string['auth_ldap_search_sub_key'] = 'Recherche sous-contextes';
$string['auth_ldap_search_sub'] = 'Rechercher les utilisateurs dans les sous-contextes.';
$string['auth_ldap_server_settings'] = 'Configuration du serveur LDAP';
$string['auth_ldap_unsupportedusertype'] = 'La fonction auth: ldap user_create() ne supporte pas (encore) le type d\'utilisateur « {$a} »';
$string['auth_ldap_update_userinfo'] = 'Mettre à jour les données des utilisateurs (prénom, nom, adresse, etc.) de Moodle depuis l\'annuaire LDAP. Lire « /auth/ldap/attr_mappings.php » pour avoir des informations sur la correspondance.';
$string['auth_ldap_user_attribute_key'] = 'Attribut utilisateur';
$string['auth_ldap_user_attribute'] = 'L\'attribut utilisé pour nommer et rechercher les utilisateurs. Habituellement « cn ».';
$string['auth_ldap_user_exists'] = 'Le nom d\'utilisateur LDP existe déjà.';
$string['auth_ldap_user_settings'] = 'Configuration de la consultation utilisateurs';
$string['auth_ldap_user_type_key'] = 'Type utilisateur';
$string['auth_ldap_user_type'] = 'Indiquer comment les utilisateurs sont enregistrés dans LDAP. Ce réglage permet également d\'indiquer comment l\'échéance des comptes (mot de passe) et la création des utilisateurs fonctionnera.';
$string['auth_ldap_usertypeundefined'] = 'Le type config.user_type n\'est pas défini ou la fonction ldap_expirationtime2unix ne supporte pas le type choisi !';
$string['auth_ldap_usertypeundefined2'] = 'Le type config.user_type n\'est pas défini ou la fonction ldap_unixi2expirationtime ne supporte pas le type choisi !';
$string['auth_ldap_version_key'] = 'Version';
$string['auth_ldap_version'] = 'La version du protocole LDAP que votre serveur utilise.';
$string['auth_ldapdescription'] = 'Cette méthode permet l\'authentification auprès d\'un annuaire LDAP externe. Si les nom d\'utilisateur et mot de passe sont corrects, Moodle créera un nouvel enregistrement pour cet utilisateur dans sa base de données. Ce module peut récupérer les attributs de l\'enregistrement LDAP de l\'utilisateur afin de remplir certains champs dans Moodle. Lors des connexions suivantes, seuls les nom d\'utilisateur et mot de passe sont vérifiés.';
$string['auth_ldapextrafields'] = '<p>Ces zones sont facultatives. Il vous est possible de remplir certains champs de Moodle avec des données provenant des <strong>attributs de l\'annuaire LDAP</strong>.</p><p>Si vous laissez ces zones vides, aucune donnée ne sera récupérée de l\'annuaire LDAP et les valeurs par défaut de Moodle seront utilisées.</p><p>Dans tous les cas, l\'utilisateur a la possibilité de modifier tous ces champs, une fois connecté.</p>';
$string['auth_ldapnotinstalled'] = 'Impossible d\'utiliser l\'authentification LDAP. Le module PHP LDAP n\'est pas installé.';
$string['auth_ldaptitle'] = 'Serveur LDAP';
$string['auth_ntlmsso'] = 'SSO NTLM';
$string['auth_ntlmsso_enabled_key'] = 'Activer';
$string['auth_ntlmsso_enabled'] = 'Sélectionner Oui pour authentifier les utilisateurs via un domaine NTLM. <strong>Remarque :</strong> pour fonctionner, cette méthode d\'authentification requiert d\'autres réglages sur votre serveur. Voir <a href=\"http://docs.moodle.org/19/fr/Authentification_NTLM\">http://docs.moodle.org/19/fr/Authentification_NTLM</a>';
$string['auth_ntlmsso_ie_fastpath'] = 'Sélectionner Oui pour activer le chemin rapide NTLM SSO (saute certaines étapes et ne fonctionne qu\'avec le navigateur Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Chemin rapide NTLM SSO';
$string['auth_ntlmsso_subnet_key'] = 'Sous-réseau';
$string['auth_ntlmsso_subnet'] = 'L\'activation de ce paramètre n\'utilisera le SSO NTLM que pour des clients de ce sous-réseau. Format : xxx.xxx.xxx.xxx/masque';
$string['ntlmsso_attempting'] = 'Tentative de connexion SSO via NTLM...';
$string['ntlmsso_failed'] = 'La connexion automatique a échoué. Essayez de vous connecter depuis la page de connexion standard.';
$string['ntlmsso_isdisabled'] = 'L\'authentification SSO NTLM est désactivée.';
