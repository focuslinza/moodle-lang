<?PHP // $Id$ 
      // auth.php - created with Moodle 1.9.5 (Build: 20090520) (2007101550)


$string['CASform'] = '选择验证方式';
$string['accesCAS'] = 'CAS 用户';
$string['accesNOCAS'] = '其他用户';
$string['actauthhdr'] = '激活验证插件';
$string['alternatelogin'] = '如果您在此输入一个URL，它将被用于本站的登录。这个页面上应当有一个表单，表单的 action 一项应设定为<strong>“{$a}”</strong>，并且返回的字段中应当有 <strong>username</strong> 和 <strong>password</strong>。<br />小心，不要输入错误的URL，否则您可能会被锁在站点之外。<br />要使用缺省的登录页面请为此设置保留空白。';
$string['alternateloginurl'] = '换用其它登录链接';
$string['auth_cas_auth_user_create'] = '创建外部用户';
$string['auth_cas_baseuri'] = '服务器的 URI<br />例如，如果 CAS 服务器位于 host.domaine.fr/CAS/ 那么<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = '基准 URI';
$string['auth_cas_broken_password'] = '在您更改密码前不能继续操作，但系统找不到用来更改密码的页面，请与管理员联系。';
$string['auth_cas_cantconnect'] = 'CAS 模块的 LDAP 部分无法连接服务器：{$a}';
$string['auth_cas_casversion'] = '版本';
$string['auth_cas_changepasswordurl'] = '更改密码 URL';
$string['auth_cas_create_user'] = '如果您希望将 CAS 认证用户加入到 Moodle 数据库中，请选择是。否则只有已经存在于 Moodle 数据库中的用户可以登录。';
$string['auth_cas_create_user_key'] = '创建用户';
$string['auth_cas_enabled'] = '如果您希望使用 CAS 认证请开启此选项。';
$string['auth_cas_hostname'] = 'CAS 服务器主机名<br />例如: host.domain.fr';
$string['auth_cas_hostname_key'] = '主机名';
$string['auth_cas_invalidcaslogin'] = '很抱歉，您登录失败——无法对您进行认证。';
$string['auth_cas_language'] = '选择语言';
$string['auth_cas_language_key'] = '语言';
$string['auth_cas_logincas'] = '安全连接访问';
$string['auth_cas_logoutcas'] = '当与 Moodle 的连接中断时，如果想从 CAS 退出，将此设置为“是”。';
$string['auth_cas_logoutcas_key'] = '退出 CAS';
$string['auth_cas_multiauth'] = '如果您想有多种身份验证方式（CAS + 其他验证方式），将此设置为“是”。';
$string['auth_cas_multiauth_key'] = '多种验证方式';
$string['auth_cas_port'] = 'CAS 服务器端口';
$string['auth_cas_port_key'] = '端口';
$string['auth_cas_proxycas'] = '如果在代理模式使用CAS，将此设置为“是”。';
$string['auth_cas_proxycas_key'] = '代理模式';
$string['auth_cas_server_settings'] = 'CAS 服务配置';
$string['auth_cas_text'] = '安全连接';
$string['auth_cas_use_cas'] = '使用 CAS';
$string['auth_cas_version'] = 'CAS 版本';
$string['auth_casdescription'] = '这个方法使用 CAS 服务器(中央认证服务)来认证 Single Sing On(SSO) 环境中的用户。您也可以使用 LDAP 认证。如果给定的用户名和密码在 CAS 中有效，Moodle 会在数据库中创建信用户项目，并从 LDAP 中取出相应的属性。在后续的登录中，只检查用户名和密码。';
$string['auth_casnotinstalled'] = '不能使用 CAS 认证方式，因为 PHP LDAP 模块没有安装。';
$string['auth_castitle'] = 'CAS 服务器(单点登录)';
$string['auth_changepasswordhelp'] = '修改密码帮助';
$string['auth_changepasswordhelp_expl'] = '当用户丢失了他们的 {$a} 密码后显示给他们的帮助信息。系统将会把此信息和<strong>修改密码地址</strong>一起显示给用户或用它来替代 Moodle 内部的修改密码机制。';
$string['auth_changepasswordurl'] = '修改密码地址';
$string['auth_changepasswordurl_expl'] = '设定一个当用户丢失了他们的 {$a} 密码时发给用户的地址。需要将<strong>使用标准修改密码页面</strong>设定为<strong>否</strong>。';
$string['auth_changingemailaddress'] = '您已提交将 E-mail 由 {$a->oldemail} 变更为 {$a->newemail}，出于安全的考虑，服务器将自动向 {$a->newemail} 发送一封邮件，打开邮件中的URL，E-mail 将自动更新。';
$string['auth_common_settings'] = '公用设置';
$string['auth_data_mapping'] = '数据映射';
$string['auth_dbcantconnect'] = '无法连接到指定的认证数据库...';
$string['auth_dbchangepasswordurl_key'] = '更改密码 URL';
$string['auth_dbdebugauthdb'] = '调试 ADOdb';
$string['auth_dbdebugauthdbhelp'] = '调试 ADOdb 连接到外部数据库，登录时显示空页面。不符合站点要求。';
$string['auth_dbdeleteuser'] = '删除用户 {$a[0]} 其 id 为 {$a[1]}';
$string['auth_dbdeleteusererror'] = '删除用户 {$a} 错误';
$string['auth_dbdescription'] = '该方法使用一个外部数据库来检验用户名和密码是否有效。如果是一个新帐号，该帐号其它字段的信息将一起复制到本系统中。';
$string['auth_dbextencoding'] = '外部数据库编码方式';
$string['auth_dbextencodinghelp'] = '外部数据库使用的编码方式';
$string['auth_dbextrafields'] = '这些字段是可选的。您在此指定的<b>外部数据库字段</b>将预先填入本系统的用户数据库中。<p>如果您留空不填，将使用系统默认值。</p><p>无论以上哪种情况，用户在登录后都可以改写这些字段。</p>';
$string['auth_dbfieldpass'] = '含有密码的字段名';
$string['auth_dbfieldpass_key'] = '密码字段';
$string['auth_dbfielduser'] = '含有用户名的字段名';
$string['auth_dbfielduser_key'] = '用户名字段';
$string['auth_dbhost'] = '数据库所在的主机。';
$string['auth_dbhost_key'] = '主机';
$string['auth_dbinsertuser'] = '已插入用户 {$a[0]} 其 id 为 {$a[1]}';
$string['auth_dbinsertusererror'] = '插入用户 {$a} 错误';
$string['auth_dbname'] = '数据库名';
$string['auth_dbname_key'] = '数据库名';
$string['auth_dbpass'] = '与上面的用户名匹配的密码';
$string['auth_dbpass_key'] = '密码';
$string['auth_dbpasstype'] = '<p>指定密码字段所用的格式。MD5 编码是一种常见的方法，在和其它通用 WEB 应用如 PostNuke 整合时，会很方便。</p><p>如果您希望外部的程序管理用户名和 E-mail，而由 Moodle 来管理密码，则请选择“内部”。在使用这种方式时，您<i>必须</i>在外部数据库中提供一个 E-mail 字段，且需要定时运行 admin/cron.php 和 auth/db/auth_db_sync_users.php。Moodle 会通过 E-mail 向新用户发送临时密码。</p>';
$string['auth_dbpasstype_key'] = '密码格式';
$string['auth_dbreviveduser'] = '激活用户 {$a[0]} id {$a[1]}';
$string['auth_dbrevivedusererror'] = '激活用户{$a}错误';
$string['auth_dbsetupsql'] = 'SQL 设置命令';
$string['auth_dbsetupsqlhelp'] = '特定数据库设置 SQL 命令。过去常设置通信编码方式，例如 MySQL 和 PostgreSQL：<em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '暂停用户 {$a[0]} 其 id 为 {$a[1]}';
$string['auth_dbsuspendusererror'] = '暂停用户 {$a} 错误';
$string['auth_dbsybasequoting'] = '使用 sybase 引用';
$string['auth_dbsybasequotinghelp'] = 'Sybase 风格，需要 Oracle 支持，MS SQL 和一些其他的数据库，不要使用 MySQL！';
$string['auth_dbtable'] = '数据库中的表单名';
$string['auth_dbtable_key'] = '数据表';
$string['auth_dbtitle'] = '使用外部数据库';
$string['auth_dbtype'] = '数据库类型（详情请看 <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb 帮助文档</a>）';
$string['auth_dbtype_key'] = '数据库';
$string['auth_dbupdatinguser'] = '更新用户{$a[0]} 其 id 为 {$a[1]}';
$string['auth_dbuser'] = '对该数据库具有读权限的用户名';
$string['auth_dbuser_key'] = '数据库所有者';
$string['auth_dbusernotexist'] = '不能更新不存在的用户 {$a}';
$string['auth_dbuserstoadd'] = '添加用户记录 {$a}';
$string['auth_dbuserstoremove'] = '删除用户记录 {$a}';
$string['auth_emailchangecancel'] = '取消 E-mail 变更';
$string['auth_emailchangepending'] = '变更期间，打开链接发送 {$a->preference_newemail}';
$string['auth_emaildescription'] = '电子邮件确认是默认的身份验证方法。用户注册时可以选用自己的用户名和密码，然后有一封确认信件发送到该用户的电子邮箱。该信件中有一个安全的链接指向用户确认帐号的页面。以后的登录就只根据本系统的数据库中储存的信息检验用户名和密码。';
$string['auth_emailnoemail'] = '系统尝试发送给您一封 E-mail，但是失败了！';
$string['auth_emailnoinsert'] = '不能将您的记录信息添加到数据库中!';
$string['auth_emailnowexists'] = '该 E-mail 已被他人使用，请更换再试';
$string['auth_emailrecaptcha'] = '在注册表单中增加图像/声音验证。这将有利于站点保护。详情请看：http://recaptcha.net/learnmore.html 。<em>需要 PHP cURL 扩展。</em>';
$string['auth_emailrecaptcha_key'] = '激活 reCAPTCHA 元素';
$string['auth_emailsettings'] = '设置';
$string['auth_emailtitle'] = 'E-mail 验证';
$string['auth_emailupdate'] = 'E-mail 更换';
$string['auth_emailupdatemessage'] = '{$a->fullname}，您好

您已要求更换 {$a->site} 上的注册 E-mail，请打开以下的链接以便确认。

$a->url';
$string['auth_emailupdatesuccess'] = '用户 <em>{$a->fullname}</em> 的邮件已更新为 <em>{$a->email}</em>。';
$string['auth_emailupdatetitle'] = '{$a->site} 确认 E-mail 更新';
$string['auth_fcchangepasswordurl'] = '更改密码 URL';
$string['auth_fcconnfail'] = '连接失败：{$a[0]} 和错误字符串：{$a[1]}';
$string['auth_fccreators'] = '可以创建课程的组列表，组与组之间用“;”隔开。其名称必须与 FirstClass 服务器上的完全一致，此系统大小写敏感。';
$string['auth_fccreators_key'] = '创建者';
$string['auth_fcdescription'] = '此方法使用 FirstClass 服务器来检查用户名和密码是否正确。';
$string['auth_fcfppport'] = '服务器端口(通常是 3333)';
$string['auth_fcfppport_key'] = '端口';
$string['auth_fchost'] = 'FirstClass 服务器地址的 IP 地址或域名。';
$string['auth_fchost_key'] = '主机';
$string['auth_fcpasswd'] = '上面帐号的密码';
$string['auth_fcpasswd_key'] = '密码';
$string['auth_fctitle'] = '使用 FirstClass 服务器';
$string['auth_fcuserid'] = '拥有“Subadministrator”权限的 FirstClass帐 号的 userid。';
$string['auth_fcuserid_key'] = '用户 ID';
$string['auth_fieldlock'] = '锁定值';
$string['auth_fieldlock_expl'] = '<p><b>锁定值：</b> 如果开启，Moodle 用户和管理员将不能直接修改字段的值。如果您正在维护外部数据库的数据，请选择此项。';
$string['auth_fieldlocks'] = '锁定的用户字段';
$string['auth_fieldlocks_help'] = '<p>您可以锁定特定的用户数据字段。对于用户数据由管理员来维护或者是通过上传用户机制来创建的站点而言，这个功能是很有用的。如果您锁定了 Moodle 需要的字段，那么请您确信在创建用户帐户时已经提供了其内容，否则这个账号将无法使用。</p>
<p>如果想要避免这个问题，可以考虑将锁定模式设定为“如果空则锁定”。</p>';
$string['auth_imapchangepasswordurl_key'] = '更改密码 URL';
$string['auth_imapdescription'] = '该方法使用一个 IMAP 服务器来检验用户名和密码是否有效。';
$string['auth_imaphost'] = 'IMAP 服务器地址。用 IP 地址，不要用域名。';
$string['auth_imaphost_key'] = '主机';
$string['auth_imapnotinstalled'] = '不能使用 IMAP 认证方式，因为没有安装 PHP IAMP 模块。';
$string['auth_imapport'] = 'IMAP 服务器端口号。通常是 143 或 993。';
$string['auth_imapport_key'] = '端口';
$string['auth_imaptitle'] = '使用一个 IMAP 服务器';
$string['auth_imaptype'] = 'IMAP 服务器类型。IMAP 服务器可能有不同类型的身份验证。';
$string['auth_imaptype_key'] = 'IMAP 类型';
$string['auth_invalidnewemailkey'] = '错误：URL 不正确，请完整拷贝后重试。';
$string['auth_ldap_ad_create_req'] = '不能在活动目录中创建新帐户，确保您满足所有的正常运行的需求（LDAP 连接，有足够的权限绑定用户等）。';
$string['auth_ldap_attrcreators'] = '组或情景列表中的哪些成员允许创建属性。多个组使用\";\"分隔，例如“cn=teachers,ou=staff,o=myorg”';
$string['auth_ldap_attrcreators_key'] = '属性创建者';
$string['auth_ldap_auth_user_create_key'] = '创建外部用户';
$string['auth_ldap_bind_dn'] = '如果您想用绑定用户来搜索用户，在此指定。就象：“cn=ldapuser,ou=public,o=org”';
$string['auth_ldap_bind_dn_key'] = '名称';
$string['auth_ldap_bind_pw'] = '绑定用户的密码。';
$string['auth_ldap_bind_pw_key'] = '密码';
$string['auth_ldap_bind_settings'] = '绑定设置';
$string['auth_ldap_changepasswordurl_key'] = '更改密码 URL';
$string['auth_ldap_contexts'] = '用户背景列表。以‘;’分隔。例如：“ou=users,o=org; ou=others,o=org”';
$string['auth_ldap_contexts_key'] = 'LDAP 情境';
$string['auth_ldap_create_context'] = '如果您允许根据 E-mail 信息创建用户，指定创建用户的内容。该值应该有别于别的用户。';
$string['auth_ldap_create_context_key'] = '新用户默认情境';
$string['auth_ldap_create_error'] = '在 LDAP 中创建用户发生错误';
$string['auth_ldap_creators'] = '列出可创建新课程的组。用“;”分割多个组。如“cn=teachers,ou=staff,o=myorg”';
$string['auth_ldap_creators_key'] = 'LDAP 创建者';
$string['auth_ldap_expiration_desc'] = '选择否关闭密码过期检查，选择 LDAP 则从 LDAP 中读取密码过期时间 passwordexpiration。';
$string['auth_ldap_expiration_key'] = 'LDAP 期限';
$string['auth_ldap_expiration_warning_desc'] = '在多少天前显示密码过期警告。';
$string['auth_ldap_expiration_warning_key'] = '到期警告';
$string['auth_ldap_expireattr_desc'] = '可选: 覆盖存储密码过期时间的属性 passwordAxpirationTime';
$string['auth_ldap_expireattr_key'] = '到期特征';
$string['auth_ldap_graceattr_desc'] = '可选: 覆盖宽限登录属性';
$string['auth_ldap_gracelogin_key'] = '登录特征';
$string['auth_ldap_gracelogins_desc'] = '激活 LDAP gracelogin 支持。在密码过期后，在宽限登录为0前用户仍可以登录。激活这个选项后，当密码过期时将显示 gracelogin 信息。';
$string['auth_ldap_gracelogins_key'] = '登录';
$string['auth_ldap_groupecreators'] = '组或情景列表中的哪些成员允许创建组。多个组使用“;”分隔，例如“cn=teachers,ou=staff,o=myorg”';
$string['auth_ldap_groupecreators_key'] = '组创建者';
$string['auth_ldap_host_url'] = '以 URL 形式指定 LDAP 主机，类似于：“ldap://ldap.myorg.com/”或“ldaps://ldap.myorg.com/”。';
$string['auth_ldap_host_url_key'] = '主机 URL';
$string['auth_ldap_ldap_encoding'] = '指定 LDAP 服务器的编码方式。一般是 utf-8，MS AD V2 使用默认的平台编码如 cp1252、cp1250 等。';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP 编码方式';
$string['auth_ldap_login_settings'] = '登录设置';
$string['auth_ldap_memberattribute'] = '可选的：指定从属于某个组的用户属性,一般是“member”';
$string['auth_ldap_memberattribute_isdn'] = '可选：覆盖属性数，0 或 1。';
$string['auth_ldap_memberattribute_isdn_key'] = '成员属性中使用 dn';
$string['auth_ldap_memberattribute_key'] = '成员属性';
$string['auth_ldap_no_mbstring'] = '在 Active Directory 中创建用户时需要 mbstring 扩展支持。';
$string['auth_ldap_noconnect'] = 'LDAP 模块不能连接上服务器：{$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP 模块不能连接到任何服务器：{$a}';
$string['auth_ldap_noextension'] = '警告：似乎服务器上没有安装 PHP LDAP，请检查是否安装。';
$string['auth_ldap_objectclass'] = '可选的：指定在 ldap_user_type 中搜索用户时使用的 objectClass。通常您不需修改这个选项。';
$string['auth_ldap_objectclass_key'] = '对象类';
$string['auth_ldap_opt_deref'] = '检查在搜索时如何处理别名。选择下列值之一: “否”(LDAP_DEREF_NEVER) 或“是”(LDAP_DEREF_ALWAYS)。';
$string['auth_ldap_opt_deref_key'] = '弃用别名';
$string['auth_ldap_passtype'] = '指定在 LDAP 服务器中的新密码或者更改密码的格式。';
$string['auth_ldap_passtype_key'] = '密码格式';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP 密码过期设置。';
$string['auth_ldap_preventpassindb'] = '如果设定为是，则在Moodle的数据库中不会存储密码。';
$string['auth_ldap_preventpassindb_key'] = '隐藏密码';
$string['auth_ldap_search_sub'] = '如果您想从次级上下文中搜索用户，设值<> 0。';
$string['auth_ldap_search_sub_key'] = '在子情境中查找';
$string['auth_ldap_server_settings'] = 'LDAP 服务器设置';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() 函数还不支持以选用户类型：“{$a}”。';
$string['auth_ldap_update_userinfo'] = '从 LDAP 向本系统更新用户信息（姓名、地址……）。请指定您需要的“数据映射”。';
$string['auth_ldap_user_attribute'] = '用于命名/搜索用户的属性，通常为“cn”。';
$string['auth_ldap_user_attribute_key'] = '用户属性';
$string['auth_ldap_user_exists'] = 'LDAP 用户名已存在';
$string['auth_ldap_user_settings'] = '用户查找设置';
$string['auth_ldap_user_type'] = '选择用户如何储存在 LDAP 中。这个选项同时也指定了登录过期、宽限登录和用户创建如何工作。';
$string['auth_ldap_user_type_key'] = '用户类型';
$string['auth_ldap_usertypeundefined'] = 'config.user_type 没有定义或函数 ldap_expirationtime2unix 不支持类型选择。';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type 没有定义或函数 ldap_unixi2expirationtime 不支持类型选择。';
$string['auth_ldap_version'] = '您的服务器所使用的 LDAP 协议版本。';
$string['auth_ldap_version_key'] = '版本';
$string['auth_ldapdescription'] = '该方法利用一个外部的 LDAP 服务器进行身份验证。

如果用户名和密码是有效的，本系统据此在数据库中创建一个新用户。

该模块可以从 LDAP 中读取用户属性，并把指定的字段预先填入本系统数据库。

此后的登录只需检验用户名和密码。';
$string['auth_ldapextrafields'] = '这些字段是可选的。您可以在此指定这些 <b>LDAP 字段</b>复制到本系统的数据库中。 <br />如果您不选，将使用本系统默认值。<br />无论以上何种情况，用户在登录之后都可以修改这些字段。';
$string['auth_ldapnotinstalled'] = '不能使用 LDAP 认证方式，PHP LDAP 模块没有安装。';
$string['auth_ldaptitle'] = '使用 LDAP 服务器';
$string['auth_manualdescription'] = '该方法不允许用户以任何方式创建帐号。所有帐号只能由管理员手工创建。';
$string['auth_manualtitle'] = '手工添加用户';
$string['auth_mnet_auto_add_remote_users'] = '当设置为“是”时，当远程用户第一次登录时，本地用户记录将会自动创建。';
$string['auth_mnet_roamin'] = '这些主机的用户不能进入您的站点。';
$string['auth_mnet_roamout'] = '您的用户可以进入到这些主机的站点中。';
$string['auth_mnet_rpc_negotiation_timeout'] = '通过 XMLRPC 进行认证时的超时时间（秒）。';
$string['auth_mnetdescription'] = '通过在您的 Moodle 网络设置中允许用户通过信赖的主机认证。';
$string['auth_mnettitle'] = 'Moodle 网络认证';
$string['auth_multiplehosts'] = '可以指定多个主机名或地址（如 host1.com;host2.com;host3.com 或 xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx）';
$string['auth_nntpchangepasswordurl_key'] = '更改密码 URL';
$string['auth_nntpdescription'] = '该方法使用一个 NNTP 服务器来检验用户名和密码是否有效。';
$string['auth_nntphost'] = 'NNTP 服务器地址。用IP地址，不要用域名。';
$string['auth_nntphost_key'] = '主机';
$string['auth_nntpnotinstalled'] = '不能使用 NNTP 认证方式，因为 PHP IMAP 模块没有安装。';
$string['auth_nntpport'] = '服务器端口（通常是119）';
$string['auth_nntpport_key'] = '端口';
$string['auth_nntptitle'] = '使用 NNTP 服务器';
$string['auth_nologindescription'] = '辅助插件阻止用户登录到系统中，并忽略发送给这些用户的 E-mail。可以用来“暂停”用户帐号。';
$string['auth_nologintitle'] = '禁止登录';
$string['auth_nonedescription'] = '用户可以即刻进入本系统并创建一个有效帐号，不需要任何身份验证，也不需要电子邮件确认。慎用该方法——因为它会带来安全性和管理上的问题。';
$string['auth_nonetitle'] = '没有身份验证';
$string['auth_ntlmsso'] = 'NTLM 单点登录';
$string['auth_ntlmsso_enabled'] = '设置为“是”将尝试用 NTLM 域进行单点登录。<strong>注意:</strong>还需要在 Web 服务器上有额外的设置，具体查看 <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = '启用';
$string['auth_ntlmsso_subnet'] = '如果设置，则只在此子网中使用单点登录。格式：xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = '子网';
$string['auth_outofnewemailupdateattempts'] = '更改 E-mail 的许可次数已到，您的请求被取消。';
$string['auth_pamdescription'] = '这个方法使用PAM来访问服务器上的用户，使用前必须安装<a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM认证</a>。';
$string['auth_pamtitle'] = 'PAM';
$string['auth_passwordisexpired'] = '您的密码已经过期，要修改么?';
$string['auth_passwordwillexpire'] = '您的密码将在{$a}天后过期，现在要修改么?';
$string['auth_pop3changepasswordurl_key'] = '更改密码 URL';
$string['auth_pop3description'] = '该方法使用一个 POP3 服务器来检验用户名和密码。';
$string['auth_pop3host'] = 'POP3 服务器地址。用IP地址，不要用域名。';
$string['auth_pop3host_key'] = '主机';
$string['auth_pop3mailbox'] = '要连接的邮箱名称，通常是INBOX。';
$string['auth_pop3mailbox_key'] = '邮箱';
$string['auth_pop3notinstalled'] = '不能使用 POP3 认证方式，因为没有安装 PHP IMAP 模块。';
$string['auth_pop3port'] = '服务器端口(一般是 110，SSL 常用 995)';
$string['auth_pop3port_key'] = '端口';
$string['auth_pop3title'] = '使用 POP3 服务器';
$string['auth_pop3type'] = '服务器类型。如果您的 POP3 服务器使用安全验证，请选择 pop3cert。';
$string['auth_pop3type_key'] = '类型';
$string['auth_radiuschangepasswordurl_key'] = '更改密码URL';
$string['auth_radiusdescription'] = '此方法使用 <a href=\"http://en.wikipedia.org/wiki/RADIUS\" target=\"_blank\">RADIUS</a> 服务器来检查用户名和密码的有效性。';
$string['auth_radiushost'] = 'RADIUS 服务器地址';
$string['auth_radiushost_key'] = '主机';
$string['auth_radiusnasport'] = '连接端口';
$string['auth_radiusnasport_key'] = '端口';
$string['auth_radiussecret'] = '共享密钥';
$string['auth_radiussecret_key'] = '秘密';
$string['auth_radiustitle'] = '使用 RADIUS 服务器';
$string['auth_remove_delete'] = '完全删除';
$string['auth_remove_keep'] = '保存';
$string['auth_remove_suspend'] = '延迟';
$string['auth_remove_user'] = '指定在用户帐号在外部被删除时，内部用户帐号在同步的时候允许做什么。只有延迟用户帐号在外部数据中出现时才会被自动激活。';
$string['auth_remove_user_key'] = '移除用户';
$string['auth_shib_changepasswordurl'] = '更改密码 URL';
$string['auth_shib_convert_data'] = '数据修改 API';
$string['auth_shib_convert_data_description'] = '您可以是用此 API 将修改过的数据提交给 Shibboleth。要了解细节，请参考<a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a>。';
$string['auth_shib_convert_data_warning'] = '此文件不存在或无法被 Web 服务器读取！';
$string['auth_shib_instructions'] = '如果您的学校支持 Shibboleth，可以使用 <a href=\"{$a}\">Shibboleth登录</a>来访问它。<br />否则请使用普通的登录表格。';
$string['auth_shib_instructions_help'] = '应当在此为您的用户提供关于 Shibboleth 的解释。在登录屏幕上，将会显示这些提示。其中应当包含一个指向“<b>{$a}</b>”的链接，这样 用户可以轻 松等如。如果此项为空，缺省的指示信息将会被是用(并非为 Shibboleth 定制)。';
$string['auth_shib_no_organizations_warning'] = '如果想使用整合的 WAYF 服务，您必须提供一个独立的身份提供商列表，包括 entityIDs，名称和可选的会话发起者';
$string['auth_shib_only'] = '只用 Shibboleth';
$string['auth_shib_only_description'] = '如果只是用 Shibboleth 认证方式，请设定此选项。';
$string['auth_shib_username_description'] = '用在 Moodle 中当作用户名的 Shibboleth环 境变量名';
$string['auth_shibboleth_contact_administrator'] = '万一您和给定的组织没有关系，并且又想访问服务器上的课程，那么请与我们联系';
$string['auth_shibboleth_errormsg'] = '请选择您所在的组织';
$string['auth_shibboleth_login'] = 'Shibboleth 登录';
$string['auth_shibboleth_login_long'] = '通过口令登录 Moodle';
$string['auth_shibboleth_manual_login'] = '手工登录';
$string['auth_shibboleth_select_member'] = '我是成员之一';
$string['auth_shibboleth_select_organization'] = '对于通过口令惊醒验证，请在下拉列表中选择您所在的组织。';
$string['auth_shibbolethdescription'] = '是用这个方法，用户的创建和验证是使用 <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a> 进行的';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_sync_script'] = 'Cron 同步脚本';
$string['auth_updatelocal'] = '更新本地数据';
$string['auth_updatelocal_expl'] = '<p><b>更新本地数据:</b> 如果开启，则用户每次登录或有用户同步时字段将会被更新。设定为本地更新的字段应当被锁住。</p>';
$string['auth_updateremote'] = '更新外部数据';
$string['auth_updateremote_expl'] = '<p><b>更新外部数据:</b> 如果开启，则外部认证系统中的用户记录将被更新。要修改这个选项需首先解锁字段。</p>';
$string['auth_updateremote_ldap'] = '<p><b>注意:</b> 更新外部LDAP数据需要您设定的binddn和binddw是有权限修改所有用户记录的用户。它目前不能保持多值属性的值，会在更新时删除其它的值。</p>';
$string['auth_user_create'] = '激活用户创建功能';
$string['auth_user_creation'] = '新的(匿名)用户可以在外部身份验证源中创建新用户帐号，并通过 E-mail 确认。如果您激活了这个功能，请记住同时也为用户创建功能设置一下模块特定选项';
$string['auth_usernameexists'] = '选中的用户名已经存在。请选择一个新的。';
$string['authenticationoptions'] = '身份验证选项';
$string['authinstructions'] = '您在这里可以给您的用户提供使用说明，让他们知道该用哪个用户名和密码。您在这里输入的文本将出现在登录页面。如果留空不填，登录页面将不会出现使用说明。';
$string['auto_add_remote_users'] = '自动添加远程用户';
$string['changepassword'] = '更改密码 URL';
$string['changepasswordhelp'] = '在这里您可以指定一个位置用户可以重新获得或更改他们的用户名/密码。这将在登录页面显示一个按钮。如果留空不填，就不会有按钮出现。';
$string['chooseauthmethod'] = '选择一个身份验证方法：';
$string['createpasswordifneeded'] = '如果需要则创建密码';
$string['enterthenumbersyouhear'] = '输入你听到的数字';
$string['enterthewordsabove'] = '输入上面的字母';
$string['errorminpassworddigits'] = '密码中至少要有 {$a} 个数字。';
$string['errorminpasswordlength'] = '密码中至少要有 {$a} 个字符。';
$string['errorminpasswordlower'] = '密码中至少要有 {$a} 个小写字母。';
$string['errorminpasswordnonalphanum'] = '密码中至少要有 {$a} 个非字母、数字字符。';
$string['errorminpasswordupper'] = '密码中至少要有 {$a} 个大写字母。';
$string['errorpasswordupdate'] = '更新密码错误，密码没有更新。';
$string['forcechangepassword'] = '强制修改密码';
$string['forcechangepassword_help'] = '强制用户在下次登录时修改密码。';
$string['forcechangepasswordfirst_help'] = '强制用户在第一次登录时修改密码。';
$string['forgottenpassword'] = '如果您在这里键入一个URL地址，该地址将会用来丢失密码的查找页面。';
$string['forgottenpasswordurl'] = '忘记的密码 URL';
$string['getanaudiocaptcha'] = '获取音频 CAPTCHA 验证';
$string['getanimagecaptcha'] = '获取图像 CAPTCHA 验证';
$string['getanothercaptcha'] = '获取另一个 CAPTCHA';
$string['guestloginbutton'] = '访客登录按钮';
$string['incorrectpleasetryagain'] = '错误，请重试';
$string['infilefield'] = '字段必需存在于文件中';
$string['instructions'] = '使用说明';
$string['internal'] = '内部的';
$string['locked'] = '已锁定';
$string['md5'] = 'MD5 加密';
$string['nopasswordchange'] = '密码不能被更新';
$string['nopasswordchangeforced'] = '在您更改密码前不能继续操作，但系统找不到用来更改密码的页面，请与管理员联系。';
$string['ntlmsso_attempting'] = '尝试进行 NTLM 单点登录';
$string['ntlmsso_failed'] = '自动登录失败，尝试到普通登录页面登录。';
$string['ntlmsso_isdisabled'] = 'NTLM 单点登录被禁用。';
$string['passwordhandling'] = '如何处理密码字段';
$string['plaintext'] = '纯文本';
$string['pluginnotenabled'] = '认证插件“{$a}”不可用';
$string['pluginnotinstalled'] = '认证插件“{$a}”没有安装';
$string['recaptcha'] = 'reCAPTCHA';
$string['rpc_negotiation_timeout'] = 'RPC 超时';
$string['selfregistration'] = '自己注册';
$string['selfregistration_help'] = '选择哪种认证插件用来处理用户的自己注册。';
$string['sha1'] = 'SHA-1 加密';
$string['shib_no_attributes_error'] = '您似乎正在使用 Shibboleth 认证，但是 Moodle 不接受用户的属性。请确认您的身份提供者激活了必要的属性({$a})，或者向这个服务器的网络管理员报表。';
$string['shib_not_all_attributes_error'] = 'Moodle 需要 Shibboleth 属性，但是现在不存在这些属性。这些属性是: {$a}<br /> 请联系服务器的网络管理员或您的身份认证者。';
$string['shib_not_set_up_error'] = 'Shibboleth 认证并没有正确地安装，因为在此页上并没有 Shibboleth 环境变量。请查阅 <a href=\"README.txt\">README</a>获得更多的建议或联系安装此Moodle系统的网络管理员。';
$string['showguestlogin'] = '您可以在登录页面显示或隐藏访客登录按钮。';
$string['stdchangepassword'] = '使用标准的修改密码页面';
$string['stdchangepassword_expl'] = '如果外部认证系统允许通过 Moodle 修改密码，则应设为是。此选项会覆盖“修改密码URL”。';
$string['stdchangepassword_explldap'] = '注意: 如果使用远程服务器，建议您使用安全的 LDAP 连接(ldaps://)。';
$string['unlocked'] = '已解除锁定';
$string['unlockedifempty'] = '如果空则解除锁定';
$string['update_never'] = '从不';
$string['update_oncreate'] = '创建时';
$string['update_onlogin'] = '每次登录时';
$string['update_onupdate'] = '更新时';


// Strings below here are module specific and will be duplicated in auth_* files
// Module specific language strings should also be copied into their respective
// auth_*.php files to ensure compatibility in all versions of Moodle

$string['sso_idp_description'] = '发布该服务后，用户浏览到 {$a} Moodle 站点时无需重新登录。<ul><li><em>依赖性</em>: 您必须<strong>订阅</strong> {$a} 上的 SSO (Service Provider)服务。</li></ul><br />定义该服务后，用户从 {$a} 访问到您的 Moodle 站点时无需重新登录。<ul><li><em>依赖性</em>: 同时您必须向 {$a} <strong>发布</strong> SSO (Service Provider) 服务。</li></ul><br />';
$string['sso_idp_name'] = 'SSO(Identity Provider)';
$string['sso_mnet_login_refused'] = '不允许用户 {$a[0]} 从 {$a[1]} 登录。';
$string['sso_sp_description'] = '发布该服务后，则允许 {$a} 上的认证用户访问 您的Moodle 站点时无需重新登录。<ul><li><em>依赖性</em>: 您必须<strong>订阅</strong> {$a} 上的 SSO (Identity Provider) 服务。</li></ul><br />定义该服务后，用户从 {$a} 访问到您的 Moodle 站点时无需重新登录。<ul><li><em>依赖性</em>: 同时您必须向 {$a} <strong>发布</strong> SSO (Identity Provider) 服务。</li></ul><br />';
$string['sso_sp_name'] = 'SSO(Service Provider)';

?>
