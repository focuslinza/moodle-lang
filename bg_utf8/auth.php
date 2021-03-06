<?PHP // $Id$ 
      // auth.php - created with Moodle 1.4.1+ (2004083101)


$string['auth_dbdescription'] = 'При този метод се използва външна база данни за проверка на потребителските имена и пароли. Ако профилът е нов, информацията от другите полета също може да бъде копирана в Moodle.';
$string['auth_dbextrafields'] = 'Тези полета не са задължителни. Можете да попълните някои от полетата на Moodle, съдържащи детайли за потребителя, с информация от <B>външната база данни</B>, която настройвате тук. <P>Ако не попълните нищо, ще бъдат използвани настройките по подразбиране.<P>И в двата случая, потребителите могат да редактират тези полета, след като влезнат в системата.';
$string['auth_dbfieldpass'] = 'Име на полето, съдържащо паролите';
$string['auth_dbfielduser'] = 'Име на полето, съдържащо потребителските имена';
$string['auth_dbhost'] = 'Име на компютъра, съхраняващ базата данни';
$string['auth_dbname'] = 'Име на базата данни';
$string['auth_dbpass'] = 'Парола, съответстваща на горното име';
$string['auth_dbpasstype'] = 'Формат за полето, съдържащо паролата. Шифърът MD5 е полезен при свързване с други често срещани web приложения, като PostNuke.';
$string['auth_dbtable'] = 'Име на таблицата в базата данни';
$string['auth_dbtitle'] = 'Използване на външна база данни';
$string['auth_dbtype'] = 'Тип на базата данни. (За повече информация, вижте <a href=\"../lib/adodb/readme.htm#drivers\">документацията на ADOdb</a>.)';
$string['auth_dbuser'] = 'Потребителско име за достъп за четене до базата данни';
$string['auth_emaildescription'] = 'Потвърждението по електронна поща е метода за идентифициране по подразбиране. Когато потребителя се регистрира, избирайки свое име и парола, до електронния му адрес се изпраща писмо за потвърждение. В писмото се съдържа защитена връзка към страница, на която потребителя може да потвърди своя профил. При следващи влизания в системата, потребителското име и паролата се сравняват със стойностите, съхранени в базата данни на Moodle.';
$string['auth_emailtitle'] = 'Идентификация по е-поща';
$string['auth_fccreators'] = 'Списък на групите, чиито членове могат да създават нови курсове. Отделние имена в списъка се разделят с \';\'. Имената трябва да са изписани точно както на FirstClass сървъра. Системата е чувствителна към малки/големи букви.';
$string['auth_fcdescription'] = 'Този метод използва FirstClass сървър за проверка на потребителските имена и пароли.';
$string['auth_fcfppport'] = 'Порт (най-често е 3333)';
$string['auth_fchost'] = 'Адресът на FirstClass сървъра. Използвайте IP адрес  или DNS име.';
$string['auth_fcpasswd'] = 'Парола за горния профил.';
$string['auth_fctitle'] = 'Използване на FirstClass сървър';
$string['auth_fcuserid'] = 'Идентификатор на потребител на FirstClass сървъра, имащ \'Subadministrator\' привилегията.';
$string['auth_imapdescription'] = 'Този метод използва IMAP сървър за проверка на потребителските имена и пароли.';
$string['auth_imaphost'] = 'Адрес на IMAP сървъра. Използвайте IP адрес или DNS име.';
$string['auth_imapport'] = 'Порт на IMAP сървъра. (Обикновено 143 или 993.)';
$string['auth_imaptitle'] = 'Използване на IMAP сървър';
$string['auth_imaptype'] = 'Тип на IMAP сървъра. IMAP сървърите могат да имат различни методи за оторизация и комуникация.';
$string['auth_ldap_bind_dn'] = 'Ако искате да използвате bind-user, за да търсите потребители, укажете го тук. Нещо от рода на \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Парола за bind-user.';
$string['auth_ldap_contexts'] = 'Списък на местата (contexts), където се намират потребителските списъци. Разделителят е \';\'. Пример: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ако разрешите създаването на потребители на база потвърждение по е-поща, укажете мястото (context), където да се създават потребителите. От гледна точка на сигурността е по-добре тези потребители да са отделени от останалите. Забележете, че не е нужно да указвате това място в променливата ldap_context. тъй като Moodle автоматично ще го използва.';
$string['auth_ldap_creators'] = 'Списък на групите, чиито членове могат да създават нови курсове. Разделителят е \';\'. Пример: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Укажете URL адреса на LDAP сървъра. Например: \'ldap://ldap.myorg.com/\' или \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_version'] = 'Версията на протокола LDAP, използвана от сървъра.';
$string['auth_ldapdescription'] = 'Този метод осигурява идентификация на базата на външен LDAP сървър. Ако указаното име и парола се потвърдят от LDAP сървъра, Moodle създава нов потребител в своята база данни. Този модул може да изчете определени атрибути от LDAP сървъра и автоматично да попълни съответните полета от базата данни на Moodle. Процедурата за идентификация от LDAP се изпълнява само веднъж, като след това се използва базата данни на Moodle.';
$string['auth_ldapextrafields'] = 'Тези полета не са задължителни. Можете да укажете прехвърлянето на информация за някои от полетата в базата данни на Moodle от <B>LDAP източника</B>. Ако не укажете нищо, ще бъдат използвани подразбиращите се стойности на Moodle.<P>И в двата случая, потребителите имат възможност да редактират полетата, след като влезнат в системата.';
$string['auth_ldaptitle'] = 'Използване на LDAP сървър';
$string['auth_manualdescription'] = 'Този метод изключва създаването на нови профили от самите потребители. Всички профили трябва да бъдат създадени на ръка от администратор.';
$string['auth_manualtitle'] = 'Ръчно създаване на всички профили';
$string['auth_multiplehosts'] = 'Могат да бъдат указани множество хостове ИЛИ адреси (напр.:host1.com;host2.com;host3.com ИЛИ xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_nntpdescription'] = 'При този метод се използва NNTP сървър, за потвърждаване на заявените потребителски имена и пароли.';
$string['auth_nntphost'] = 'Адрес на NNTP сървъра. Можете да използвате IP адрес или DNS име.';
$string['auth_nntpport'] = 'Порт (най-често 119)';
$string['auth_nntptitle'] = 'Използване на NNTP сървър';
$string['auth_nonedescription'] = 'Потребителите могат да създават нови профили незабавно, без да е необходима оторизация от външен сървър или потвърждение по е-поща. Внимавайте с тази опция. Преди да я активирате си помислете за проблемите със сигурността и при администрирането, които може да предизвика.';
$string['auth_nonetitle'] = 'Без оторизация';
$string['auth_pop3description'] = 'Този метод използва POP3 сървър за проверка валидността на потребителските имена и пароли.';
$string['auth_pop3host'] = 'Адрес на POP3 сървъра. Можете да използвате IP адрес или DNS име.';
$string['auth_pop3mailbox'] = 'Име на пощенската кутия, с която да бъде установена връзка (обикновенно INBOX).';
$string['auth_pop3port'] = 'Порт (най-често 110 или 995 ако се ползва SSL)';
$string['auth_pop3title'] = 'Използване на POP3 сървър';
$string['auth_pop3type'] = 'Тип на сървъра (ако вашият сървър използва цифрови сертификати, изберете pop2cert)';
$string['auth_user_create'] = 'Възможност за създаване на потребители';
$string['auth_usernameexists'] = 'Избраното потребителско име вече е регистрирано! Моля, изберете си друго.';
$string['authenticationoptions'] = 'Настройки на идентификацията';
$string['authinstructions'] = 'Тук можете да запишете инструкциите си към потребителите относно потребителските имена и пароли. Този текст ще се появява на страницата за влизане в системата. Ако не попълните нищо, няма да бъдат показвани инструкции.';
$string['changepassword'] = 'Адрес за промяна на парола';
$string['changepasswordhelp'] = 'Тук можете да укажете място, където потребителите могат да възстановят или променят потребителското си име и парола, в случай че са ги забравили. Ако укажете адрес, той ще е достъпен под формата на бутон на страницата за влизане в системата. Ако оставите полето празно, бутонът няма да бъде показван.';
$string['chooseauthmethod'] = 'Метод за оторизация:';
$string['guestloginbutton'] = 'Бутон за вход като гост';
$string['instructions'] = 'Инструкции';
$string['md5'] = 'MD5 шифроване';
$string['plaintext'] = 'Обикновен текст';
$string['showguestlogin'] = 'Можете да включите/изключите показването на бутона за вход като гост.';
$string['auth_common_settings'] = "Common settings";
$string['auth_data_mapping'] = "Data mapping";
$string['auth_editlock'] = "Lock value";
$string['auth_editlock_expl'] = "<p><b>Lock value:</b> If enabled, will prevent Moodle users and admins from editing the field directly. Use this option if you are maintaining this data in the external auth system. </p>";
$string['auth_ldap_bind_settings'] = "Bind settings";
$string['auth_ldap_expiration_desc'] = "Select No to disable expired password checking or LDAP to read passwordexpiration time directly from LDAP";
$string['auth_ldap_expiration_warning_desc'] = "Number of days before password expiration warning is issued.";
$string['auth_ldap_expireattr_desc'] = "Optional: overrides ldap-attribute what stores password expiration time asswordAxpirationTime";
$string['auth_ldap_graceattr_desc'] = "Optional: Overrides  gracelogin attribute";
$string['auth_ldap_gracelogins_desc'] = "Enable LDAP gracelogin support. After password has expired user can login until gracelogin count is 0. Enabling this setting displays grace login message if password is exprired.";
$string['auth_ldap_login_settings'] = "Login settings";
$string['auth_ldap_memberattribute'] = "Optional: Overrides user member attribute, when users belongs to a group. Usually 'member'";
$string['auth_ldap_objectclass'] = "Optional: Overrides objectClass used to name/search users on ldap_user_type. Usually you dont need to chage this.";
$string['auth_ldap_opt_deref'] = "Determines how aliases are handled during search. Select one of the following values: \"No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS) ";
$string['auth_ldap_passwdexpire_settings'] = "LDAP password expiration settings.";
$string['auth_ldap_search_sub'] = "Put value <> 0 if  you like to search users from subcontexts.";
$string['auth_ldap_server_settings'] = "LDAP server settings";
$string['auth_ldap_update_userinfo'] = "Update user information (firstname, lastname, address..) from LDAP to Moodle.  Specify \"Data mapping\" settings as you need.";
$string['auth_ldap_user_attribute'] = "Optional: Overrides the attribute used to name/search users. Usually 'cn'.";
$string['auth_ldap_user_settings'] = "User lookup settings";
$string['auth_ldap_user_type'] = "Select how users are stored in LDAP. This setting also specifies how login expiration, grace logins and user creation will work. ";
$string['auth_pamdescription'] = "This method uses PAM to access the native usernames on this server. You have to install <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a> in order to use this module.";
$string['auth_pamtitle'] = "PAM (Pluggable Authentication Modules)";
$string['auth_passwordisexpired'] = "Your password is expired. Do you want change your password now?";
$string['auth_passwordwillexpire'] = "Your password will expire in \$a days. Do you want change your password now?";
$string['auth_updatelocal'] = "Update local data";
$string['auth_updatelocal_expl'] = "<p><b>Update local data:</b> If enabled, the field will be updated (from external auth) every time the user logs in or there is a user synchronization. Fields set to update locally should be locked.</p>";
$string['auth_updateremote'] = "Update external data";
$string['auth_updateremote_expl'] = "<p><b>Update external data:</b> If enabled, the external auth will be updated when the user record is updated. Fields should be unlocked to allow edits.</p>";
$string['auth_updateremote_ldap'] = "<p><b>Note:</b> Updating external LDAP data requires that you set binddn and bindpw to a bind-user with editing privileges to all the user records. It currently does not preserve multi-valued attributes, and will remove extra values on update. </p>";
$string['auth_user_creation'] = "New (anonymous) users can create user accounts on the external authentication source and confirmed via email. If you enable this , remember to also configure module-specific options for user creation.";
$string['forcechangepassword'] = "Force change password";
$string['forcechangepassword_help'] = "Force users to change password on their next login to Moodle.";
$string['forcechangepasswordfirst_help'] = "Force users to change password on their first login to Moodle.";
$string['stdchangepassword'] = "Use standard Change Password Page";
$string['stdchangepassword_expl'] = "If the external authentication system allows password changes through Moodle, switch this to Yes. This setting overrides 'Change Password URL'.";
$string['stdchangepassword_explldap'] = "NOTE: It is recommended that you use LDAP over an SSL encrypted tunnel (ldaps://) if the LDAP server is remote.";

?>