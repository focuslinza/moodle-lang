<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Kui soovid kasutada bind-user\'it kasutajate otsimiseks, täpsusta see siin. Näiteks \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Salasõna bind-user tarvis.';
$string['auth_ldap_bind_pw_key'] = 'Parool';
$string['auth_ldap_bind_settings'] = 'Sidumise seaded';
$string['auth_ldap_changepasswordurl_key'] = 'Parooli muutmise URL';
$string['auth_ldap_contexts'] = 'Loend kontekstidest, kus kasutajad paiknevad. Eralda erinevad kontekstid semikooloniga \';\'. Näiteks: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Kontekstid';
$string['auth_ldap_create_context'] = 'Kui võimaldad kasutajate loomist e-posti teel kinnitamisega, täpsusta kontekst, milles kasutajaid luuakse. See kontekst peaks erinema teiste kasutajate omast, et ei tekiks turvaprobleeme. Seda konteksti pole vaja lisada ldap_context muutujale, Moodle otsib kasutajaid sellest kontekstist automaatselt.<br /><b>Pane tähele!</b>Sa pead muutma funktsiooni auth_user_create() failis auth/ldap/lib.php, et kasutajate loomine toimiks.';
$string['auth_ldap_create_context_key'] = 'Contekst uutele kasutajatele';
$string['auth_ldap_create_error'] = 'LDAP\'i kasutaja loomisel viga.';
$string['auth_ldap_creators'] = 'Nimekiri rühmadest, kelle liikmetel on lubatud luua uusi kursuseid. Eralda rühmad \';\' sümboliga. Näiteks \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Loojad';
$string['auth_ldap_expiration_desc'] = 'Vali \"ei\", kui soovid välja lülitada aegunud salasõnade kontrolli või keelata LDAP\'il lugeda salasõnade aegumise aega otse LDAP\'ist.';
$string['auth_ldap_expiration_key'] = 'Aegumine';
$string['auth_ldap_expiration_warning_desc'] = 'Päevade arv, pärast mida kuvatakse aegunud salasõna hoiatus.';
$string['auth_ldap_expiration_warning_key'] = 'Aegumise hoiatus';
$string['auth_ldap_expireattr_desc'] = 'Valikuline: katab üle LDAP-atribuudi passwordExpirationTime, mis hoiab salasõna aegumise aega.';
$string['auth_ldap_expireattr_key'] = 'Aegumise atribuut';
$string['auth_ldap_graceattr_desc'] = 'Valikuline: katab üle ajapikendusega sisenemise atribuudi';
$string['auth_ldap_gracelogins_desc'] = 'Lülitab sisse LDAP\'i ajapikendusega sisenemise toe. Peale salasõna aegumist saab kasutaja õpikeskkonda siseneda nii kaua, kuni ajapikendusega sisenemise loenduri väärtuseks saab 0. Selle seade sisse lülitamine kuvab ajapikendusega sisenemise teate, kui salasõna on aegunud.';
$string['auth_ldap_host_url'] = 'Täpsusta LDAP host URL-formaadis, näiteks \'ldap://ldap.myorg.com/\' või \'ldaps://ldap.myorg.com/\' Sisestades mitu serverit, eralda nad \';\' sümboliga.';
$string['auth_ldap_host_url_key'] = 'Hosti URL';
$string['auth_ldap_ldap_encoding'] = 'Määra kodeering, mida kasutatab LDAP-server. Kõige tõenäolisemalt utf-8, MS AD v2 kasutav vaikimisi platvormi kodeeringutm n.t. cp1252, cp1250, jne.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kodeering';
$string['auth_ldap_login_settings'] = 'Sisenemise seaded';
$string['auth_ldap_memberattribute'] = 'Valikuline: katab üle kasutaja liikmelisuse atribuudi (tavaliselt \'member\'), mis näitab kasutajate rühma kuuluvust.';
$string['auth_ldap_memberattribute_key'] = 'Liikme atribuut';
$string['auth_ldap_noconnect'] = 'LDAP moodul ei saa ühenduda serveriga: $a';
$string['auth_ldap_noconnect_all'] = 'LDAP-laiendus ei saa ühenduda ühtegi nendest serveritest: $a';
$string['auth_ldap_noextension'] = 'Hoiatus: PHP LDAP moodul ei paista olevat kättesaadav. Palun installeeri ja võimalda.';
$string['auth_ldap_objectclass'] = 'Valikuline: katab üle objectClass\'i, mida kasutatakse kasutajate otsinguks ldap_user_type\'st. Tavaliselt ei pea sa seda muutma.';
$string['auth_ldap_opt_deref'] = 'Määrab, kas otsingu ajal aliast kasutatakse. Vali üks jägnevatest väärtustest: \"Ei\" (LDAP_DEREF_NEVER) või \"Jah\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passtype'] = 'Specify the format of new or changed passwords in LDAP server.';
$string['auth_ldap_passtype_key'] = 'Parooli formaat';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP parooli aegumise seaded';
$string['auth_ldap_preventpassindb'] = 'Vali \"Jah\", kui soovid, et salasõnasid ei säilitataks Moodle\'i andmebaasis.';
$string['auth_ldap_preventpassindb_key'] = 'Peida paroolid';
$string['auth_ldap_search_sub'] = 'Otsi kasutajaid alamkontekstidest.';
$string['auth_ldap_server_settings'] = 'LDAP serveri seaded';
$string['auth_ldap_update_userinfo'] = 'Uuenda kasutajainfot (eesnimi, perekonnanimi, aadress,..) LDAP-ist Moodle\'isse. Vaata /auth/ldap/attr_mappings.php andmete vastendamise kohta info saamiseks.';
$string['auth_ldap_user_attribute'] = 'Valikuline: katab üle atribuudi (tavaliselt \'cn\'), mida kasutatakse kasutajate nimetamiseks/otsimiseks.';
$string['auth_ldap_user_attribute_key'] = 'Kasutaja atribuut';
$string['auth_ldap_user_exists'] = 'LDAP\'i kasutajanimi juba eksisteerib.';
$string['auth_ldap_user_settings'] = 'Kasutaja otsimise seaded';
$string['auth_ldap_user_type'] = 'Vali, kuidas kasutajaid LDAP\'is hoitakse. See seadistus määrab ka ära, kuidas sisenemise aegumine, ajapikendusega sisenemine ja kasutajate loomine töötab.';
$string['auth_ldap_user_type_key'] = 'Kasutaja tüüp';
$string['auth_ldap_version'] = 'Sinu serveri LDAP protokolli versioon.';
$string['auth_ldap_version_key'] = 'Versioon';
$string['auth_ldapdescription'] = 'See meetod tagab autentimise, kasutades välist LDAP serverit. Kui antud kasutajanimi ja salasõna kehtivad, loob Moodle uue kasutajakande oma andmebaasi. See moodul oskab lugeda kasutaja atribuute LDAP-ist ja eeltäita soovitud väljad Moodle\'is.  Edaspidiste sisenemiste korral kontrollitakse ainult kasutajanime ja salasõna.';
$string['auth_ldapextrafields'] = 'Nende lahtrite täitmine on valikuline. Kui sa soovid, et mõned Moodle\'i kasutaja väljad eeltäidetaks infoga <b>LDAP\'i väljadelt</b>, siis määra vastavad LDAP\'i väljad siin. <p>Kui jätad need lahtrid tühjaks, ei kanta LDAP\'ist midagi üle ja kasutatakse Moodle\'i vaikeseadeid.</p><p>Mõlemal juhul on kasutajal võimalus muuta kõiki välju, kui ta on õpikeskkonda sisenenud.</p>';
$string['auth_ldapnotinstalled'] = 'Ei saa kasutada LDAP-autentimist. PHP LDAP laiendus on installeerimata.';
$string['auth_ldaptitle'] = 'Kasuta LDAP serverit';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled_key'] = 'Võimalda';
$string['auth_ntlmsso_subnet_key'] = 'Alamvõrk';
$string['ntlmsso_isdisabled'] = 'NTLM SSO ei ole võimaldatud.';