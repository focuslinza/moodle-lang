<?php // $Id$ 
      // auth.php - created with Moodle 1.5 UNSTABLE DEVELOPMENT (2005010100)

$string['auth_cas_proxycas_key'] = "Starpniekservera režīms";
$string['auth_cas_logoutcas_key'] = "Atslēgšanās no CAS";
$string['auth_cas_multiauth_key'] = "Multiautentifikācija";
$string['auth_cas_proxycas'] = "Ieslēdziet vērtību “Jā”, ja CAS izmantojat starpniekservera režīmā.";
$string['auth_cas_logoutcas'] = "Ieslēdziet vērtību “Jā”, ja, atvienojoties no sistēmas Moodle, vēlaties arī veikt atslēgšanos no CAS.";
$string['auth_cas_multiauth'] = "Ieslēdziet vērtību “Jā”, ja nepieciešama multiautentifikācija (CAS + cita autentifikācija).";
$string['accesCAS'] = "CAS lietotāji";
$string['accesNOCAS'] = "citi lietotāji";
$string['CASform'] = "Autentifikācijas izvēle";
$string['alternatelogin'] = 'Ja šeit tiek ievadīts URL, tas tiek izmantots kā šīs vietnes pieslēgšanās lapa. Lapā jābūt veidlapai, kuras darbības rekvizītam iestatīta vērtība <strong>“{$a}”</strong> un kura atgriež laukus <strong>username</strong> un <strong>password</strong>.<br />Uzmanieties, lai neievadītu nepareizu URL, citādi varat netikt savā vietnē.<br />Lai izmantotu noklusējuma pieslēgšanās lapu, atstājiet šo iestatījumu tukšu.';
$string['alternateloginurl'] = 'Alternatīvs pieslēgšanās URL';

$string['pluginnotenabled'] = 'Autentifikācijas spraudnis “{$a}” nav iespējots.';
$string['pluginnotinstalled'] = 'Autentifikācijas spraudnis “{$a}” nav instalēts.';

// syncronization
$string['auth_sync_script'] ='Cron sinhronizācijas skripts';
$string['auth_dbinsertuser'] ='Ievietots lietotājs $a[0], ID $a[1]';
$string['auth_dbinsertusererror'] = 'Ievietojot lietotāju $a, radās kļūda';
$string['auth_dbdeleteuser'] ='Izdzēsts lietotājs $a[0], ID $a[1]';
$string['auth_dbdeleteusererror'] = 'Dzēšot lietotāju $a, radās kļūda';
$string['auth_dbreviveduser'] ='Atjaunots lietotājs $a[0], ID $a[1]';
$string['auth_dbrevivedusererror'] = 'Atjaunojot lietotāju $a, radās kļūda';
$string['auth_dbsuspenduser'] ='Aizturēts lietotājs $a[0], ID $a[1]';
$string['auth_dbsuspendusererror'] = 'Aizturot lietotāju $a, radās kļūda';
$string['auth_dbupdatinguser'] ='Lietotāja $a[0], ID $a[1], atjaunināšana';
$string['auth_remove_user_key'] ='Noņemts ārējs lietotājs';
$string['auth_remove_user'] ='Norādiet, ko, veicot masveida sinhronizēšanu, darīt ar iekšējo lietotāja kontu, ja šis lietotājs no ārējā avota ir izņemts. Tikai aizturētie lietotāji tiek automātiski atjaunoti, ja tie atkārtoti parādās ārējā avotā.';
$string['auth_remove_keep'] ='Paturēt iekšēji';
$string['auth_remove_suspend'] ='Aizturēt iekšēji';
$string['auth_remove_delete'] ='Pilnīgi izdzēst iekšēji';

// nologin plugin
$string['auth_nologindescription'] = 'Palīgspraudnis, kas neļauj lietotājam pieslēgties sistēmā, kā arī atmet visu lietotājam sūtāmo pastu. Var izmantot, lai <em>aizturētu</em> lietotāju kontus.';
$string['auth_nologintitle'] = 'Bez pieslēgšanās';

// CAS plugin
$string['auth_cas_logincas'] = 'Droša savienojuma piekļuve';
$string['auth_cas_invalidcaslogin'] = 'Atvainojiet, jūsu pieslēgšanās neizdevās&nbsp;— jūs nevarēja autorizēt';
$string['auth_cas_server_settings'] = 'CAS servera konfigurācija';
$string['auth_castitle'] = 'CAS serveris (SSO)';
$string['auth_cas_hostname'] = 'CAS servera resursdatora nosaukums. <br />Piemēram: resursdators.domēns.lv';
$string['auth_cas_baseuri'] = 'Servera URI (nekas, ja nav baseUri).<br />Piemēram, ja CAS serveris atbild adresē resursdators.domēns.ls/CAS/, tad <br />cas_baseuri = CAS/.';
$string['auth_cas_port'] = 'CAS servera ports';
$string['auth_cas_version'] = 'CAS versija';
$string['auth_cas_language'] = 'Izvēlētā valoda';
$string['auth_casdescription'] = 'Šī metode izmanto CAS serveri (centrālās autentifikācijas pakalpojumu), lai lietotājus autentificētu vienas pierakstīšanās vidē (SSO). Var izmantot arī vienkāršo LDAP autentifikāciju. Ja norādītais lietotājvārds un parole atbilstoši CAS ir derīgi, sistēma Moodle savā datubāzē izveido jaunu lietotāja ievadni, ja nepieciešams, lietotāja atribūtus ņemot no LDAP. Nākamajās pieslēgšanās reizēs tiek pārbaudīts tikai lietotājvārds un parole.';
$string['auth_cas_enabled'] = 'Šo ieslēdziet, ja vēlaties izmantot CAS autentifikāciju.';
$string['auth_cas_text'] = 'Drošs savienojums';
$string['auth_cas_create_user'] = 'Šo ieslēdziet, ja Moodle datubāzē vēlaties ievietot CAS autentificētos lietotājus. Ja nē, pieslēgties var tikai tie lietotāji, kas jau ir iekļauti Moodle datubāzē.';
$string['auth_casnotinstalled'] = 'Nevar izmantot CAS autentifikāciju. Nav instalēts PHP LDAP modulis.';
$string['auth_cas_cantconnect'] ='CAS moduļa LDAP daļa nevar izveidot savienojumu ar serveri: $a';
$string['auth_cas_use_cas'] ='Izmantot CAS';
$string['auth_cas_broken_password'] ='Jūs nevarat turpināt, nemainot savu paroli, tomēr lapa, kur to varētu mainīt, nav pieejama. Lūdzu, sazinieties ar sistēmas Moodle administratoru.';

$string['auth_cas_hostname_key'] ='Resursdatora nosaukums';
$string['auth_cas_changepasswordurl'] ='Paroles maiņas URL';
$string['auth_cas_create_user_key'] ='Izveidot lietotāju';
$string['auth_cas_auth_user_create'] ='Izveidot lietotājus ārēji';
$string['auth_cas_language_key'] ='Valoda';
$string['auth_cas_casversion'] ='Versija';
$string['auth_cas_port_key'] ='Ports';
$string['auth_cas_baseuri_key'] ='Bāzes URI';

$string['auth_changepasswordurl'] = 'Paroles maiņas URL';
$string['auth_changepasswordurl_expl'] = 'Norādiet vietrādi URL, uz kuru nosūtīt lietotājus, kas pazaudējuši savu $a paroli. Iestatiet parametra <strong>Izmantot standarta paroles maiņas lapu</strong> vērtību <strong>Nē</strong>.';
$string['auth_changepasswordhelp'] = 'Palīdzība par paroles maiņu';
$string['auth_changepasswordhelp_expl'] = 'Rādīt palīdzību par zudušu paroli lietotājiem, kas pazaudējuši savu $a paroli. Tiks parādīta vai nu kopā ar <strong>Paroles maiņas URL</strong> vai iekšējo Moodle paroles maiņu, vai arī tās vietā.';
$string['auth_common_settings'] = 'Vispārēji iestatījumi';
$string['auth_data_mapping'] = 'Datu kartēšana';

// Database plugin
$string['auth_dbdescription'] = 'Šī metode izmanto ārējas datubāzes tabulu, lai pārbaudītu, vai norādītais lietotājvārds un parole ir derīgi. Ja konts ir jauns, sistēmā Moodle, iespējams, tiks kopēta arī citos laukos norādītā informācija.';
$string['auth_dbextrafields'] = 'Šie lauki nav obligāti. Varat izvēlēties sākotnēji aizpildīt dažus sistēmas Moodle lietotāja laukus, iekļaujot informāciju no šeit norādītajiem <b>ārējās datubāzes laukiem</b>. <p>Ja šīs vērtības atstājat tukšas, tiek izmantotas noklusējuma vērtības.</p><p>Jebkurā gadījumā lietotājs pēc pieslēgšanās var rediģēt visus šos laukus.</p>';
$string['auth_dbfieldpass'] = 'Paroļu lauka nosaukums';
$string['auth_dbfielduser'] = 'Lietotājvārdu lauka nosaukums';
$string['auth_dbhost'] = 'Dators, kas vieso datubāzu serveri.';
$string['auth_dbname'] = 'Pašas datubāzes nosaukums';
$string['auth_dbpass'] = 'Norādītajam lietotājvārdam atbilstoša parole';
$string['auth_dbpasstype'] = '<p>Norādiet paroles laukā lietojamo formātu. MD5 jaukšana noder savienojuma izveidei ar citām vispārējām tīmekļa lietojumprogrammām, piemēram, PostNuke.</p> <p>Izmantojiet “internal”, ja vēlaties, lai ārējā datubāze pārvaldītu lietotājvārdus un e-pasta adreses, bet sistēma Moodle pārvaldītu paroles. Izmantojot vērtību “internal”, jums <i>ir</i> jānorāda aizpildīts ārējās datubāzes e-pasta adreses lauks, kā arī regulāri jāizpilda skripti admin/cron.php un auth/db/auth_db_sync_users.php. Sistēma Moodle jaunajiem lietotājiem nosūtīs e-pasta ziņojumu ar tajā norādītu pagaidu paroli.</p>';
$string['auth_dbtable'] = 'Datubāzes tabulas nosaukums';
$string['auth_dbtitle'] = 'Ārēja datubāze';
$string['auth_dbtype'] = 'Datubāzes tips (detalizētu informāciju skatiet <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentācijā</a>)';
$string['auth_dbuser'] = 'Lietotājvārds ar lasīšanas piekļuvi datubāzei';
$string['auth_dbcantconnect'] ='Nevarēja izveidot savienojumu ar norādīto autentifikācijas datubāzi...';
$string['auth_dbuserstoadd'] = 'Pievienojamās lietotāju ievadnes: $a';
$string['auth_dbuserstoremove'] = 'Noņemamās lietotāju ievadnes: $a';
$string['auth_dbusernotexist'] = 'Nevar atjaunināt neesošu lietotāju: $a';
$string['auth_dbhost_key'] = 'Resursdators';
$string['auth_dbtype_key'] = 'Datubāze';
$string['auth_dbsybasequoting'] = 'Izmantot sybase pēdiņas';
$string['auth_dbsybasequotinghelp'] = 'Sybase stila vienpēdiņu atkāpšanās&nbsp;— nepieciešama Oracle, MS SQL un dažām citām datubāzēm. Nelietojiet to MySQL gadījumā!';
$string['auth_dbname_key'] = 'Datubāzes nosaukums';
$string['auth_dbuser_key'] = 'Datubāzes lietotājs';
$string['auth_dbpass_key'] = 'Parole';
$string['auth_dbtable_key'] = 'Tabula';
$string['auth_dbfielduser_key'] = 'Lietotājvārda lauks';
$string['auth_dbfieldpass_key'] = 'Paroles lauks';
$string['auth_dbpasstype_key'] = 'Paroles formāts';
$string['auth_dbextencoding'] = 'Ārējās datubāzes kodējums';
$string['auth_dbextencodinghelp'] = 'Ārējā datubāzē izmantotais kodējums';
$string['auth_dbsetupsql'] = 'SQL iestatīšanas komanda';
$string['auth_dbsetupsqlhelp'] = 'SQL komanda īpašajai datubāzes iestatīšanai, to bieži izmanto sakaru kodējuma iestatīšanai, piemēram, lietojot MySQL un PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbdebugauthdb'] = 'Atkļūdot ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Atkļūdot ADOdb savienojumu ar ārējo datubāzi&nbsp;— izmantojiet, ja pieslēdzoties tiek iegūta tukša lapa. Nav piemērots izmantošanai darba vietnē.';
$string['auth_dbchangepasswordurl_key'] = 'Paroles maiņas URL';

// Email plugin
$string['auth_emaildescription'] = 'E-pasta apstiprinājums ir noklusējuma autentifikācijas metode. Kad lietotājs piesaka kontu, izvēloties savu lietotājvārdu un paroli, uz šī lietotāja e-pasta adresi tiek nosūtīts apstiprinājuma e-pasta ziņojums. Šajā e-pasta ziņojumā tiek iekļauta droša saite uz lapu, kur lietotājs var apstiprināt savu kontu. Turpmākajās pieslēgšanās reizēs lietotājvārds un parole vienkārši tiek salīdzināti ar Moodle datubāzē saglabātajām vērtībām.';
$string['auth_emailtitle'] = 'Pašreģistrācija, izmantojot e-pastu';
$string['auth_emailnoinsert'] = 'Jūsu ierakstu datubāzei nevarēja pievienot!';
$string['auth_emailnoemail'] = 'Mēģinājums nosūtīt jums e-pastu neizdevās!';

// FirstClass plugin
$string['auth_fccreators'] = 'To grupu saraksts, kuru dalībniekiem atļauts veidot jaunus kursus. Atsevišķās grupas atdaliet ar “;”. Nosaukumi jānorāda precīzi kā FirstClass serverī. Sistēma ir reģistrjutīga.';
$string['auth_fcdescription'] = 'Šī metode izmanto FirstClass serveri, lai pārbaudītu, vai norādītais lietotājvārds un parole ir derīgi.';
$string['auth_fcfppport'] = 'Servera ports (visbiežāk tiek izmantots 3333)';
$string['auth_fchost'] = 'FirstClass servera adrese. Izmantojiet IP numuru vai DNS nosaukumu.';
$string['auth_fcpasswd'] = 'Norādītā konta parole.';
$string['auth_fctitle'] = 'FirstClass serveris';
$string['auth_fcuserid'] = 'FirstClass konta lietotāja ID ar iestatītām tiesībām “Subadministrator”.';
$string['auth_fchost_key'] = 'Resursdators:';
$string['auth_fcfppport_key'] = 'Ports';
$string['auth_fcuserid_key'] = 'Lietotāja ID';
$string['auth_fcpasswd_key'] = 'Parole';
$string['auth_fccreators_key'] = 'Autori';
$string['auth_fcchangepasswordurl'] = 'Paroles maiņas URL';
$string['auth_fcconnfail'] = 'Savienojuma izveide neizdevās, kļūdas numurs: $a[0], kļūdas virkne: $a[1]';

// Fieldlocks
$string['auth_fieldlock'] = 'Bloķēt vērtību';
$string['auth_fieldlock_expl'] = '<p><b>Bloķēt vērtību:</b> ja iespējots, Moodle lietotāji un administratori šo lauku nevar rediģēt tieši. Izmantojiet šo opciju, ja šos datus uzturat ārējā autorizācijas sistēmā. </p>';
$string['auth_fieldlocks'] = 'Bloķēt lietotāju laukus';
$string['auth_fieldlocks_help'] = '<p>Varat bloķēt lietotāju datu laukus. Tas noder vietnēs, kuru datus administratori uztur manuāli, rediģējot lietotāju ierakstus vai augšupielādējot tos ar iespējas “Augšupielādēt lietotājus” palīdzību. Ja bloķējat sistēmai Moodle nepieciešamos laukus, pārliecinieties, vai šie dati tiek nodrošināti, izveidojot lietotāju kontus, vai arī šie konti nebūs lietojami.</p><p>Lai izvairītos no šīs problēmas, apsveriet iespēju iestatīt bloķēšanas režīmu “Atbloķēt, ja tukšs”.</p>';

// IMAP plugin
$string['auth_imapnotinstalled'] = 'Nevar izmantot IMAP autentifikāciju. Nav instalēts PHP IMAP modulis.';
$string['auth_imapdescription'] = 'Šī metode izmanto IMAP serveri, lai pārbaudītu, vai norādītais lietotājvārds un parole ir derīgi.';
$string['auth_imaphost'] = 'IMAP servera adrese. Izmantojiet IP numuru, nevis DNS nosaukumu.';
$string['auth_imapport'] = 'IMAP servera porta numurs. Parasti tas ir 143 vai 993.';
$string['auth_imaptitle'] = 'IMAP serveris';
$string['auth_imaptype'] = 'IMAP servera tips. IMAP serveriem var būt dažādi autentifikācijas un vienošanās tipi.';
$string['auth_imaptype_key'] = 'Tips';
$string['auth_imaphost_key'] = 'Resursdators';
$string['auth_imapport_key'] = 'Ports';
$string['auth_imapchangepasswordurl_key'] = 'Paroles maiņas URL';

// LDAP plugin
$string['auth_ldap_bind_dn'] = 'Ja lietotāju meklēšanai vēlaties izmantot lietotāja saistīšanu, norādiet to šeit. Apmēram šādi: “cn=ldapuser,ou=public,o=org”';
$string['auth_ldap_bind_pw'] = 'Lietotāju saistīšanas parole.';
$string['auth_ldap_bind_settings'] = 'Saistīšanas iestatījumi';
$string['auth_ldap_contexts'] = 'Kontekstu saraksts, kur atrodas lietotāji. Atsevišķus kontekstus atdaliet ar “;”. Piemēram: “ou=users,o=org; ou=others,o=org”';
$string['auth_ldap_create_context'] = 'Ja iespējojat lietotāju izveidi ar e-pasta apstiprinājumu, norādiet lietotāju izveides vietas kontekstu. Šim kontekstam ir jāatšķiras no citu lietotāju kontekstiem, lai nerastos drošības problēmas. Šis konteksts nav jāpievieno mainīgajam ldap_context, sistēma Moodle lietotāju automātiski meklēs šajā kontekstā.<br /><b>Ievērojiet!</b> Lai lietotāju izveide darbotos failā auth/ldap/auth.php, ir jāmodificē metode user_create().';
$string['auth_ldap_creators'] = 'To grupu saraksts, kuru dalībniekiem atļauts veidot jaunus kursus. Atsevišķās grupas atdaliet ar “;”. Parasti apmēram šādi: “cn=teachers,ou=staff,o=myorg”';
$string['auth_ldap_expiration_desc'] = 'Izvēlieties Nē, lai atspējotu paroles derīguma beigu pārbaudi, vai LDAP, lai paroles derīguma beigu laiku lasītu tieši LDAP.';
$string['auth_ldap_expiration_warning_desc'] = 'Cik dienas pirms paroles derīguma beigām tiek parādīts brīdinājums.';
$string['auth_ldap_expireattr_desc'] = 'Nav obligāti: ignorē atribūtu ldap, kurā norādīts paroles derīguma beigu laiks';
$string['auth_ldap_graceattr_desc'] = 'Nav obligāti: ignorē pagarinājuma pieslēgšanās atribūtu gracelogin';
$string['auth_ldap_gracelogins_desc'] = 'Iespējot LDAP pagarinājuma pieslēgšanās (gracelogin) atbalstu. Pēc paroles derīguma beigām lietotājs var pieslēgties, līdz tiek sasniegta parametra gracelogin vērtība 0. Iespējojot šo iestatījumu, ja beidzies paroles derīgums, tiek rādīts pagarinājuma pieslēgšanās ziņojums.';
$string['auth_ldap_host_url'] = 'LDAP resursdatoru norādiet kā URL, piemēram, “ldap://ldap.mana_organizācija.lv/” vai “ldaps://ldap.mana_organizācija.lv/”. Lai saņemtu kļūmjpārlēces atbalstu, vairākus serverus atdaliet ar “;”.';
$string['auth_ldap_ldap_encoding'] = 'Norādiet LDAP servera izmantoto kodējumu. Parasti tas ir utf-8, MS AD v2 izmanto noklusējuma platformas kodējumu, piemēram, cp1252, cp1250 utt.';
$string['auth_ldap_login_settings'] = 'Pieslēgšanās iestatījumi';
$string['auth_ldap_memberattribute'] = 'Nav obligāti: ja lietotājs ir iekļauts kādā grupā, ignorē lietotāja dalības atribūtu. Parasti “member”';
$string['auth_ldap_memberattribute_isdn'] = 'Nav obligāti: ignorē dalības atribūta vērtību apstrādi, var būt 0 vai 1';
$string['auth_ldap_objectclass'] = 'Nav obligāti: ignorē objectClass, ko izmanto lietotāju nosaukšanai/meklēšanai iestatījumā ldap_user_type. Parasti šis iestatījums nav jāmaina.';
$string['auth_ldap_opt_deref'] = 'Nosaka, kā meklējot tiek apstrādāti aizstājvārdi. Izvēlieties kādu no šīm vērtībām: “No” (LDAP_DEREF_NEVER) vai “Yes” (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passtype'] = 'Norādiet LDAP serverī izmantojamo jauno vai mainīto paroļu formātu.';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP paroles derīguma beigu iestatījumi.';
$string['auth_ldap_preventpassindb'] = 'Izvēlieties Jā, lai paroles neļautu glabāt sistēmas Moodle datubāzē.';
$string['auth_ldap_search_sub'] = 'Meklēt lietotājus, izmantojot apakškontekstus.';
$string['auth_ldap_server_settings'] = 'LDAP servera iestatījumi';
$string['auth_ldap_update_userinfo'] = 'Sistēmā Moodle atjaunināt informāciju par lietotāju (vārds, uzvārds, adrese..) no LDAP. Norādiet nepieciešamos iestatījumus “Datu kartēšana”.';
$string['auth_ldap_user_attribute'] = 'Nav obligāti: ignorē atribūtu, ko izmanto lietotāju nosaukšanai/meklēšanai. Parasti “cn”';
$string['auth_ldap_user_settings'] = 'Lietotāju uzmeklēšanas iestatījumi';
$string['auth_ldap_user_type'] = 'Izvēlieties, kā LDAP tiek glabāti lietotāji. Šis iestatījums norāda arī pieslēgšanās derīguma beigu, pagarinājuma pieslēgšanās un lietotāju izveides darbību.';
$string['auth_ldap_version'] = 'Jūsu serverī izmantojamā LDAP protokola versija.';
$string['auth_ldapdescription'] = 'Šī metode nodrošina autentificēšanu, izmantojot ārēju LDAP serveri.

                                  Ja norādītais lietotājvārds un parole ir derīgi, sistēma Moodle savā datubāzē izveido jaunu lietotāju. Šis modulis var lasīt lietotāju atribūtus, izmantojot LDAP, kā arī tas sistēmā Moodle var veikt nepieciešamo lauku sākotnējo aizpildi. Nākamajās pieslēgšanās reizēs tiek pārbaudīts tikai lietotājvārds un parole.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kodējums';
$string['auth_ldap_host_url_key'] = 'Resursdatora URL';
$string['auth_ldap_version_key'] = 'Versija';
$string['auth_ldap_preventpassindb_key'] = 'Paslēpt paroles';
$string['auth_ldap_bind_dn_key'] = 'Atšķirīgais nosaukums';
$string['auth_ldap_bind_pw_key'] = 'Parole';
$string['auth_ldap_user_type_key'] = 'Lietotāja tips';
$string['auth_ldap_contexts_key'] = 'Konteksts';
$string['auth_ldap_search_sub_key'] = 'Meklēt apakškontekstos';
$string['auth_ldap_opt_deref_key'] = 'Noņemt aizstājvārdu atsauces';
$string['auth_ldap_user_attribute_key'] = 'Lietotāja atribūts';
$string['auth_ldap_memberattribute_key'] = 'Dalībnieka atribūts';
$string['auth_ldap_memberattribute_isdn_key'] = 'Dalībnieka atribūts izmanto dn';
$string['auth_ldap_objectclass_key'] = 'Objekta klase';
$string['auth_ldap_passtype_key'] = 'Paroles formāts';
$string['auth_ldap_changepasswordurl_key'] = 'Paroles maiņas URL';
$string['auth_ldap_expiration_key'] = 'Derīguma beigas';
$string['auth_ldap_expiration_warning_key'] = 'Brīdinājums par derīguma beigām';
$string['auth_ldap_expireattr_key'] = 'Derīguma beigu atribūts';
$string['auth_ldap_gracelogins_key'] = 'Pagarinājuma pieslēgšanās';
$string['auth_ldap_gracelogin_key'] = 'Pagarinājuma pieslēgšanās atribūts';
$string['auth_ldap_auth_user_create_key'] = 'Izveidot lietotājus ārēji';
$string['auth_ldap_create_context_key'] = 'Jauno lietotāju konteksts';
$string['auth_ldap_creators_key'] = 'Autori';
$string['auth_ldap_noconnect'] = 'LDAP modulis nevar izveidot savienojumu ar serveri: $a';
$string['auth_ldap_noconnect_all'] = 'LDAP modulis nevar izveidot savienojumu ar serveriem: $a';
$string['auth_ldap_unsupportedusertype'] = 'Autorizācija: LDAP user_create() neatbalsta atlasīto lietotāja tipu: “{$a}” (...vēl)';
$string['auth_ldap_usertypeundefined'] = 'Nav definēts parametrs config.user_type vai funkcija ldap_expirationtime2unix neatbalsta izvēlēto tipu!';
$string['auth_ldap_usertypeundefined2'] = 'Nav definēts parametrs config.user_type vai funkcija ldap_unixi2expirationtime neatbalsta izvēlēto tipu!';
$string['auth_ldap_noextension'] = 'Brīdinājums. Šķiet, nav PHP LDAP moduļa. Lūdzu, pārliecinieties, vai tas ir instalēts un iespējots.';

$string['auth_ldapextrafields'] = 'Šie lauki nav obligāti. Varat izvēlēties sākotnēji aizpildīt dažus sistēmas Moodle lietotāja laukus, iekļaujot informāciju no šeit norādītajiem <b>LDAP laukiem</b>. <p>Ja šos laukus atstājat tukšus, no LDAP nekas netiek pārsūtīts un tiek izmantotas Moodle noklusējuma vērtības.</p><p>Jebkurā gadījumā lietotājs pēc pieslēgšanās var rediģēt visus šos laukus.</p>';
$string['auth_ldaptitle'] = 'LDAP serveris';
$string['auth_ldapnotinstalled'] = 'Nevar izmantot LDAP autentifikāciju. Nav instalēts PHP LDAP modulis.';

// Manual plugin
$string['auth_manualdescription'] = 'Šī metode noņem visas lietotājam pieejamās sava konta izveides iespējas. Administratoram visi konti ir jāveido manuāli.';
$string['auth_manualtitle'] = 'Manuāli konti';

// MNET plugin
$string['auth_mnettitle'] = 'Moodle tīkla autentifikācija';
$string['auth_mnetdescription'] = 'Lietotāji tiek autentificēti atbilstoši uzticamam tīmeklim, kas definēts jūsu Moodle tīkla iestatījumos.';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Taimauts sekundēs autentifikācijai, kas veikta, izmantojot XMLRPC transportu.';
$string['auth_mnet_roamout'] = 'Jūsu lietotāji var veikt viesabonēšanu šajos resursdatoros';
$string['auth_mnet_roamin'] = 'Šie resursdatora lietotāji var veikt viesabonēšanu jūsu vietnē';
$string['auth_mnet_auto_add_remote_users'] = 'Ja iestatīta vērtība Jā, attālam lietotājam pirmoreiz pieslēdzoties, automātiski tiek izveidots lokāls lietotāja ieraksts.';
$string['auto_add_remote_users'] = 'Automātiski pievienot attālos lietotājus';
$string['rpc_negotiation_timeout'] = 'RPC vienošanās taimauts';

$string['auth_multiplehosts'] = 'Var norādīt vairākus resursdatorus VAI adreses, piemēram, resursdators1.lv;resursdators2.lv;resursdators3.lv vai xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx';

// NNTP plugin
$string['auth_nntpdescription'] = 'Šī metode izmanto NNTP serveri, lai pārbaudītu, vai norādītais lietotājvārds un parole ir derīgi.';
$string['auth_nntphost'] = 'NNTP servera adrese. Izmantojiet IP numuru, nevis DNS nosaukumu.';
$string['auth_nntpport'] = 'Servera ports (visbiežāk tiek izmantots 119)';
$string['auth_nntptitle'] = 'NNTP serveris';
$string['auth_nntpnotinstalled'] = 'Nevar izmantot NNTP autentifikāciju. Nav instalēts PHP IMAP modulis.';
$string['auth_nntpchangepasswordurl_key'] = 'Paroles maiņas URL';
$string['auth_nntpport_key'] = 'Ports';
$string['auth_nntphost_key'] = 'Resursdators';

// None plugin
$string['auth_nonedescription'] = 'Lietotāji var nekavējoties pierakstīties un izveidot derīgu kontu, neveicot autentifikāciju ārējā serverī un neveicot apstiprināšanu pa e-pastu. Uzmanieties ar šīs opcijas izmantošanu&nbsp;— padomājiet par iespējamajām drošības un administrēšanas problēmām.';
$string['auth_nonetitle'] = 'Bez autentifikācijas';

// PAM plugin
$string['auth_pamdescription'] = 'Šī metode izmanto PAM, lai šajā serverī piekļūtu lokālajiem lietotājvārdiem. Lai izmantotu šo moduli, ir jāinstalē <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM autentifikācija</a>.';
$string['auth_pamtitle'] = 'PAM (Spraudnējami autentifikācijas moduļi)';

$string['auth_passwordisexpired'] = 'Jūsu paroles derīgums ir beidzies. Vai vēlaties mainīt savu paroli tūlīt?';
$string['auth_passwordwillexpire'] = 'Jūsu paroles derīgums beigsies pēc $a dienām. Vai vēlaties mainīt savu paroli tūlīt?';

// POP3 plugin
$string['auth_pop3description'] = 'Šī metode izmanto POP3 serveri, lai pārbaudītu, vai norādītais lietotājvārds un parole ir derīgi.';
$string['auth_pop3host'] = 'POP3 servera adrese. Izmantojiet IP numuru, nevis DNS nosaukumu.';
$string['auth_pop3mailbox'] = 'Tās pastkastes nosaukums, ar kuru mēģināt izveidot savienojumu. (Parasti INBOX)';
$string['auth_pop3port'] = 'Servera ports (visbiežāk 110, izmantojot SSL — parasti 995)';
$string['auth_pop3title'] = 'POP3 serveris';
$string['auth_pop3type'] = 'Servera tips. Ja serveris izmanto sertifikātu drošību, izvēlieties pop3cert.';
$string['auth_pop3notinstalled'] = 'Nevar izmantot POP3 autentifikāciju. Nav instalēts PHP IMAP modulis.';
$string['auth_pop3changepasswordurl_key'] = 'Paroles maiņas URL';
$string['auth_pop3mailbox_key'] = 'Pastkaste';
$string['auth_pop3port_key'] = 'Ports';
$string['auth_pop3type_key'] = 'Tips';
$string['auth_pop3host_key'] = 'Resursdators';

// RADIUS plugin
$string['auth_radiustitle'] = 'RADIUS serveris';
$string['auth_radiusdescription'] = 'Šī metode izmanto <a href=\"http://en.wikipedia.org/wiki/RADIUS\" target=\"_blank\">RADIUS</a> serveri, lai pārbaudītu norādītā lietotājvārda un paroles derīgumu.';
$string['auth_radiushost'] = 'RADIUS servera adrese';
$string['auth_radiusnasport'] = 'Savienojuma izveidei izmantojamais ports';
$string['auth_radiussecret'] = 'Koplietojamais noslēpums';
$string['auth_radiuschangepasswordurl_key'] = 'Paroles maiņas URL';
$string['auth_radiusnasport_key'] = 'Ports';
$string['auth_radiushost_key'] = 'Resursdators';
$string['auth_radiussecret_key'] = 'Noslēpums';

// Shibboleth plugin
$string['auth_shibbolethdescription'] = 'Ar šo metodi lietotāji tiek izveidoti un autentificēti, izmantojot <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br/>Noteikti izlasiet Shibboleth failu <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">LASIMANI</a>, lai uzzinātu, kā iestatīt savu sistēmu Moodle darbam ar Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_shibboleth_login'] = 'Shibboleth pieslēgšanās';
$string['auth_shibboleth_manual_login'] = 'Manuāla pieslēgšanās';
$string['auth_shib_only'] = 'Tikai Shibboleth';
$string['auth_shib_only_description'] = 'Atzīmējiet šo opciju, ja ir jāpanāk Shibboleth autentifikācija';
$string['auth_shib_username_description'] = 'Tā tīmekļa servera Shibboleth vides mainīgā nosaukums, kas ir jāizmanto kā Moodle lietotājvārds';
$string['auth_shib_instructions'] = 'Izmantojiet <a href=\"$a\">Shibboleth pieslēgšanos</a>, lai piekļūtu ar Shibboleth starpniecību, ja jūsu organizācija to atbalsta.<br />Citādi izmantojiet šeit redzamo parasto pieslēgšanās veidlapu.';
$string['auth_shib_convert_data'] = 'Datu modificēšanas API';
$string['auth_shib_convert_data_description'] = 'Šo API var izmantot, lai modificētu Shibboleth sniegtos datus. Plašākus norādījumus lasiet failā <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">LASIMANI</a>.';
$string['auth_shib_instructions_help'] = 'Šeit lietotājiem varat sniegt pielāgotus norādījumus ar skaidrojumu par Shibboleth. Tie tiks rādīti pieslēgšanās lapas norādījumu sadaļā. Norādījumos ir jāiekļauj saite uz “<b>$a</b>”, uz kuras lietotājiem jānoklikšķina, ja tie vēlas pieslēgties.';
$string['auth_shib_convert_data_warning'] = 'Šis fails nepastāv vai tīmekļa servera process to nevar lasīt!';
$string['auth_shib_changepasswordurl'] = 'Paroles maiņas URL';

$string['shib_not_set_up_error'] = 'Šķiet, ka Shibboleth autentifikācija nav iestatīta pareizi, jo šai lapai nav Shibboleth vides mainīgo. Norādījumus par to, kā iestatīt Shibboleth autentifikāciju, skatiet failā <a href=\"README.txt\">LASIMANI</a> vai sazinieties ar šīs Moodle instalācijas tīmekļa pārzini.';
$string['shib_no_attributes_error'] = 'Šķiet, ka veikta jūsu Shibboleth autentifikācija, bet sistēma Moodle nav saņēmusi nekādus lietotāja atribūtus. Lūdzu, pārbaudiet, vai jūsu identitātes nodrošinātājs izdod pakalpojumu sniedzējam nepieciešamos atribūtus ($a), ko izmanto sistēma Moodle, vai informējiet šī servera tīmekļa pārzini.';
$string['shib_not_all_attributes_error'] = 'Sistēmai Moodle ir nepieciešami noteikti Shibboleth atribūti, kuru jūsu gadījumā nav. Šie atribūti ir: $a<br />Lūdzu, sazinieties ar šī servera tīmekļa pārzini vai savu identitātes nodrošinātāju.';

$string['auth_updatelocal'] = 'Atjaunināt lokāli';
$string['auth_updatelocal_expl'] = '<p><b>Atjaunināt lokāli:</b> ja iespējots, lauks tiks atjaunināts (no ārējas autentifikācijas avota) ikreiz, kad lietotājs pieslēdzas vai notiek lietotāju sinhronizācija. Lauki, kuriem iestatīta lokāla atjaunināšana, ir jābloķē.</p>';
$string['auth_updateremote'] = 'Atjaunināt ārēji';
$string['auth_updateremote_expl'] = '<p><b>Atjaunināt ārēji:</b> ja iespējots, atjauninot lietotāja ierakstu, tiek atjaunināts ārējais autentifikācijas avots. Lauki ir jāatbloķē, lai atļautu rediģēšanu.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Piezīme.</b> Ārējo LDAP datu atjaunināšanai nepieciešams iestatīt parametrus binddn un bindpw, lai lietotāju ar rediģēšanas pilnvarām saistītu ar visiem lietotāju ierakstiem. Vairākvērtību atribūti šobrīd netiek saglabāti, un atjauninot papildu vērtības tiks noņemtas. </p>';
$string['auth_user_create'] = 'Iespējot lietotāju izveidi';
$string['auth_user_creation'] = 'Jauni (anonīmi) lietotāji ārējā autentifikācijas avotā var veidot lietotāju kontus, kā arī apstiprināt tos pa e-pastu. Iespējojot šo iestatījumu, neaizmirstiet konfigurēt moduļa lietotāju izveides opcijas.';
$string['auth_usernameexists'] = 'Izvēlētais lietotājvārds jau pastāv. Lūdzu, izvēlieties jaunu.';
$string['authenticationoptions'] = 'Autentifikācijas opcijas';
$string['authinstructions'] = 'Šeit saviem lietotājiem varat sniegt norādījumus, lai tie zinātu, kurš lietotājvārds un parole tiem ir jāizmanto. Šeit ievadītais teksts tiks rādīts pieslēgšanās lapā. Ja atstāsit tukšu vērtību, nekādi norādījumi netiks drukāti.';
$string['changepassword'] = 'Paroles maiņas URL';
$string['changepasswordhelp'] = 'Šeit varat norādīt atrašanās vietu, kur lietotāji var atkopt vai mainīt savu lietotājvārdu/paroli, ja to ir aizmirsuši. Pieslēgšanās un lietotāja lapā šī iespēja tiek piedāvāta kā poga. Ja atstāsit tukšu vērtību, poga netiks drukāta.';
$string['chooseauthmethod'] = 'Izvēlieties autentifikācijas metodi';
$string['createpasswordifneeded'] = 'Ja nepieciešams, izveidojiet paroli';
$string['errorpasswordupdate'] = 'Atjauninot paroli, radās kļūda; parole nav mainīta';
$string['infilefield'] = 'Failā nepieciešamais lauks';
$string['forcechangepassword'] = 'Uzspiest paroles maiņu';
$string['forcechangepassword_help'] = 'Likt lietotājiem mainīt paroli, kad tie nākamreiz pieslēdzas sistēmā Moodle.';
$string['forcechangepasswordfirst_help'] = 'Likt lietotājiem mainīt paroli, kad tie pirmoreiz pieslēdzas sistēmā Moodle.';
$string['guestloginbutton'] = 'Viesa pieslēgšanās poga';
$string['instructions'] = 'Norādījumi';
$string['internal'] = 'Iekšēji';
$string['md5'] = 'MD5 jaukšana';
$string['nopasswordchange'] = 'Paroli nevar mainīt';
$string['nopasswordchangeforced'] ='Jūs nevarat turpināt, nemainot savu paroli, tomēr lapa, kur to varētu mainīt, nav pieejama. Lūdzu, sazinieties ar sistēmas Moodle administratoru.';
$string['passwordhandling'] = 'Paroles lauka apstrāde';
$string['plaintext'] = 'Vienkāršs teksts';
$string['selfregistration'] = 'Pašreģistrēšanās';
$string['selfregistration_help'] = 'Izvēlieties, kurš autentifikācijas spraudnis apstrādās lietotāju pašreģistrāciju.';
$string['sha1'] = 'SHA-1 jaukšana';
$string['showguestlogin'] = 'Pieslēgšanās lapā varat paslēpt vai parādīt vieslietotāja pieslēgšanās pogu.';
$string['stdchangepassword'] = 'Izmantot standarta paroles maiņas lapu';
$string['stdchangepassword_expl'] = 'Ja ārējā autentifikācijas sistēma atļauj mainīt paroli, izmantojot sistēmu Moodle, nomainiet šo vērtību uz Jā. Šis iestatījums liek ignorēt “Paroles maiņas URL”.';
$string['stdchangepassword_explldap'] = 'Piezīme. Ja LDAP serveris ir attālais serveris, ieteicams izmantot LDAP ar SSL šifrēto tuneli (ldaps://).';
$string['update_oncreate'] = 'Izveidojot';
$string['update_onlogin']  = 'Katrā pieslēgšanās reizē';
$string['update_onupdate']  = 'Atjauninot';
$string['update_never']    = 'Nekad';
$string['unlocked'] = 'Atbloķēts';
$string['unlockedifempty'] = 'Atbloķēts, ja tukšs';
$string['locked'] = 'Bloķēts';


// Strings below here are module specific and will be duplicated in auth_* files
// Module specific language strings should also be copied into their respective
// auth_*.php files to ensure compatibility in all versions of Moodle

$string['sso_idp_description'] = 'Publicējiet šo pakalpojumu, lai lietotāji varētu veikt viesabonēšanu $a Moodle vietnē bez nepieciešamības šeit atkārtoti pieslēgties. <ul><li><em>Atkarība</em>. Jums ir <strong>jāabonē</strong> arī SSO (pakalpojumu sniedzējs) pakalpojums šeit: $a.</li></ul><br />Abonējiet šo pakalpojumu, lai neautentificētiem lietotājiem no $a atļautu piekļūt savai vietnei bez nepieciešamības atkārtoti pieslēgties. <ul><li><em>Atkarība</em>. Jums ir <strong>jāpublicē</strong> arī SSO (pakalpojumu sniedzējs) pakalpojums šeit: $a.</li></ul><br />';
$string['sso_idp_name'] = 'SSO (identitātes nodrošinātājs)';
$string['sso_mnet_login_refused'] = 'Lietotājvārda $a[0] pieslēgšanās no $a[1] nav atļauta.';
$string['sso_sp_description'] = 'Publicējiet šo pakalpojumu, lai neautentificētiem lietotājiem no $a atļautu piekļūt savai vietnei bez nepieciešamības atkārtoti pieslēgties. <ul><li><em>Atkarība</em>. Jums ir <strong>jāabonē</strong> arī SSO (identitātes nodrošinātājs) pakalpojums šeit: $a.</li></ul><br />Abonējiet šo pakalpojumu, lai lietotāji varētu veikt viesabonēšanu $a Moodle vietnē bez nepieciešamības šeit atkārtoti pieslēgties. <ul><li><em>Atkarība</em>. Jums ir <strong>jāpublicē</strong> arī SSO (identitātes nodrošinātājs) pakalpojums šeit: $a.</li></ul><br />';
$string['sso_sp_name'] = 'SSO (pakalpojumu sniedzējs)';

?>
