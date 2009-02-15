<?PHP // $Id$ 
      // report_security.php - created with Moodle 2.0 dev (Build: 20090130) (2009012901)


$string['check_configrw_details'] = '<p>ウェブサーバからファイルが修正されないよう、インストール後、config.phpのファイルパーミッションを変更することをお勧めします。この方法は、サーバのセキュリティを著しく向上させるものではありませんが、一般的なセキュリティ上の弱点 (exploits) をスローダウンしたり、制限することはできます。</p>';
$string['check_configrw_name'] = '書き込み可能なconfig.php';
$string['check_configrw_ok'] = 'PHPスクリプトは、config.phpを修正することができません。';
$string['check_configrw_warning'] = 'PHPスクリプトは、config.phpを修正することができます。';
$string['check_cookiesecure_details'] = 'p>あなたが、https通信を有効にした場合、セキュアクッキーも有効にすることをお勧めします。また、httpからhttpsへのパーマネントリダイレクトも追加してください。</p>';
$string['check_cookiesecure_error'] = 'セキュアクッキーを有効にしてください。';
$string['check_cookiesecure_name'] = 'セキュアクッキー';
$string['check_cookiesecure_ok'] = 'セキュアクッキーは、有効にされています。';
$string['check_courserole_anything'] = 'この<a href=\"$a\">コンテクスト</a>で、「doanything」ケイパビリティを許可しないでください。';
$string['check_courserole_details'] = '<p>それぞれのコースでは、デフォルトの登録ロールが設定されています。このロールにリスクのあるケイパビリティが許可されているかどうか確認してください。</p>
<p>デフォルトコースロールでサポートされているレガシータイプのロールは「学生」のみです。</p>';
$string['check_courserole_error'] = '正しくないデフォルトコースロールの定義が検出されました!';
$string['check_courserole_legacy'] = 'サポートされていないレガシータイプが<a href=\"$a\">ロール</a>で検出されました。';
$string['check_courserole_name'] = 'デフォルトロール (コース)';
$string['check_courserole_notyet'] = 'デフォルトのコースロールのみ使用されています。';
$string['check_courserole_ok'] = 'コースデフォルトロール定義は、OKです。';
$string['check_courserole_risky'] = '<a href=\"$a\">コンテクスト</a>に危険なケイパビリティが検出されました。';
$string['check_defaultcourserole_anything'] = 'この<a href=\"$a\">コンテクスト</a>で、「doanything」ケイパビリティを許可しないでください。';
$string['check_defaultcourserole_details'] = '<p>コース登録のデフォルト学生ロールは、コースのデフォルトロールに指定されます。このロールにリスクのあるケイパビリティが許可されているかどうか確認してください。</p>
<p>デフォルトロールでサポートされているレガシータイプのロールは「学生」のみです。</p>';
$string['check_defaultcourserole_error'] = '正しくないデフォルトコースロール「 $a 」の割り当てが検出されました!';
$string['check_defaultcourserole_legacy'] = 'サポートされていないレガシータイプが検出されました。';
$string['check_defaultcourserole_name'] = 'デフォルトコースロール (グローバル)';
$string['check_defaultcourserole_notset'] = 'デフォルトロールが設定されていません。';
$string['check_defaultcourserole_ok'] = 'サイトデフォルトロールの定義は、OKです。';
$string['check_defaultcourserole_risky'] = '<a href=\"$a\">コンテクスト</a>に危険なケイパビリティが検出されました。';
$string['check_defaultuserrole_details'] = '<p>すべてのログインユーザには、デフォルトのユーザロールのケイパビリティが割り当てられます。このロールにリスクのあるケイパビリティが許可されているかどうか確認してください。</p>
<p>デフォルトのユーザロールでサポートされているレガシータイプのロールは「認証ユーザ」のみです。コース閲覧ケイパビリティは、有効にしないでください。</p>';
$string['check_defaultuserrole_error'] = 'デフォルトユーザロール「 $a 」は、正しくない定義です!';
$string['check_defaultuserrole_name'] = '登録ユーザのロール';
$string['check_defaultuserrole_notset'] = 'デフォルトロールが設定されていません。';
$string['check_defaultuserrole_ok'] = '登録ユーザのロール定義は、OKです。';
$string['check_displayerrors_details'] = '<p>いくつかのエラーメッセージは、あなたのサーバに関する機密情報を漏洩する可能性があるため、PHP設定 <code>display_errors</code>の有効化は、実稼動サイトではお勧めできません。</p>';
$string['check_displayerrors_error'] = 'PHPエラーの表示が有効にされています。PHP設定でエラー表示を無効にすることをお勧めします。';
$string['check_displayerrors_name'] = 'PHPエラーを表示する';
$string['check_displayerrors_ok'] = 'PHPエラーの表示は、無効にされています。';
$string['check_emailchangeconfirmation_details'] = '<p>ユーザがプロファイルでメールアドレスを変更する場合、メール確認ステップが推奨されています。無効にされている場合、スパム送信者がサーバをスパム送信に悪用する恐れがあります。</p>
<p>認証プラグインからロックされたメールアドレスフィールドに関して、この可能性を考える必要はありません。</p>';
$string['check_emailchangeconfirmation_error'] = 'ユーザは、どのようなメールアドレスでも入力することができます。';
$string['check_emailchangeconfirmation_info'] = 'ユーザは、許可されたドメインからのみメールアドレスを入力することができます。';
$string['check_emailchangeconfirmation_name'] = 'メール変更確認';
$string['check_emailchangeconfirmation_ok'] = 'メールの変更は、確認されるべきです。';
$string['check_embed_details'] = '<p>無制限のオブジェクト埋め込みは、非常に危険です - すべての登録ユーザは、他のサーバに対してXSSアタックを開始することができます。この設定は、実稼動サーバで無効にされるべきです。</p>';
$string['check_embed_error'] = '無制限のオブジェクト埋め込みが許可されています - これは、大部分のサーバで非常に危険な設定です。';
$string['check_embed_name'] = 'EMBEDおよびOBJECTを許可する';
$string['check_embed_ok'] = '無制限のオブジェクト埋め込みは、許可されていません。';
$string['check_frontpagerole_details'] = '<p>すべての登録ユーザのフロントページ活動には、デフォルトのフロントページロールのケイパビリティが割り当てられます。このロールにリスクのあるケイパビリティが許可されているかどうか確認してください。</p>
<p>この目的のため、特別なロールを作成して、レガシータイプのロールは使用しないことをお勧めします。</p>';
$string['check_frontpagerole_error'] = '正しくないフロントページロール「 $a 」の割り当てが検出されました!';
$string['check_frontpagerole_name'] = 'フロントページロール';
$string['check_frontpagerole_notset'] = 'フロントページロールが設定されていません。';
$string['check_frontpagerole_ok'] = 'フロントページロールは、OKです。';
$string['check_globals_details'] = '<p>Register globalsは、極めて危険なPHP設定だと考えられています。</p>
<p>PHP設定において、<code>register_globals=off</code>が設定されるべきです。この設定は、あなたの<code>php.ini</code>、Apache/IIS設定または<code>.htaccess</code>ファイルを編集することでコントロールされます。</p>';
$string['check_globals_error'] = 'Register globalsは、無効にされるべきです。すぐにPHP設定を修正してください!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Register globalsが無効にされています。';
$string['check_google_details'] = '<p>Googleに公開する設定では、サーチエンジンがコースにゲストとしてログインできるようにします。ログインアクセスが許可されていない場合、この設定の有効化は意味を持ちません。</p>';
$string['check_google_error'] = 'サーチエンジンによるゲストアクセスは許可されていますが、ゲストアクセスは無効にされています。';
$string['check_google_info'] = 'サーチエンジンは、ゲストとして入ることができます。';
$string['check_google_name'] = 'Googleに公開する';
$string['check_google_ok'] = 'サーチエンジンによるアクセスは、有効にされていません。';
$string['check_guestrole_details'] = '<p>ゲストロールはゲストに使用され、ログインユーザおよび一時的なゲストコースアクセスには使用されません。このロールにリスクのあるケイパビリティが許可されているかどうか確認してください。</p>
<p>ゲストロールでサポートされているレガシータイプのロールは「ゲスト」のみです</p>';
$string['check_guestrole_error'] = 'ゲストロール「 $a 」の定義は正しくありません!';
$string['check_guestrole_name'] = 'ゲストロール';
$string['check_guestrole_notset'] = 'ゲストロールが設定されていません。';
$string['check_guestrole_ok'] = 'ゲストロール定義は、OKです。';
$string['check_mediafilterswf_details'] = '<p>自動swf埋め込みは、非常に危険です - すべての登録ユーザは、他のサーバに対してXSSアタックを開始することができます。この設定は、実稼動サーバで無効にされるべきです。</p>';
$string['check_mediafilterswf_error'] = 'Flashメディアフィルタが許可されています - これは、大部分のサーバで非常に危険な設定です。';
$string['check_mediafilterswf_name'] = '.swfメディアフィルタを有効にする';
$string['check_mediafilterswf_ok'] = 'Flashメディアフィルタが有効にされていません。';
$string['check_noauth_details'] = '<p>「認証なし」プラグインは、実稼動サイト向けではありません。このサイトが開発テストサイトではない限り、このプラグインを無効にしてください。</p>';
$string['check_noauth_error'] = '「認証なし」プラグインは、実稼動サイトでは使用できません。';
$string['check_noauth_name'] = '認証なし';
$string['check_noauth_ok'] = '無効にされた認証プラグインはありません。';
$string['check_openprofiles_details'] = '<p>ユーザプロファイルを公開することで、スパム送信者が不正利用することができます。「プロファイル閲覧時にユーザのログインを強制する」または「ユーザのログインを強制する」を有効にすることをお勧めします。</p>';
$string['check_openprofiles_error'] = 'ログインなしで誰でもユーザプロファイルを閲覧できます。';
$string['check_openprofiles_name'] = 'ユーザプロファイルを公開する';
$string['check_openprofiles_ok'] = 'ユーザプロファイルを閲覧するには、ログインが必要です。';
$string['check_passwordpolicy_details'] = '<p>非常に多くの場合、不正なアクセスを引き起こす可能性がありますので、パスワードポリシーの設定をお勧めします。ユーザがパスワードを記憶できなかったり、忘れたり、書き留めることがありますので、必要条件を厳格にしすぎないでください。</p>';
$string['check_passwordpolicy_error'] = 'パスワードポリシーが設定されていません。';
$string['check_passwordpolicy_name'] = 'パスワードポリシー';
$string['check_passwordpolicy_ok'] = 'パスワードポリシーが有効にされています。';
$string['check_riskadmin_detailsok'] = '<p>以下の管理者リストを確認してください:</p>$a';
$string['check_riskadmin_detailswarning'] = '<p>以下の管理者リストを確認してください。:</p>$a->admins
<p>システムコンテクストのみへの管理者ロール割り当てをお勧めします。以下のユーザは、サポートされない管理者ロールが割り当てられています:</p>$a->unsupported';
$string['check_riskadmin_name'] = '管理者';
$string['check_riskadmin_ok'] = '$a 名のサーバ管理者が登録されています。';
$string['check_riskadmin_warning'] = '$a->admincount 名のサーバ管理者および $a->unsupcount 名のサポートされない管理者ロールの割り当てが見つかりました。';
$string['check_riskxss_details'] = '<p>RISK_XSSは、信頼されるユーザのみ使用できる、すべての危険なケイパビリティを意味します。</p>
<p>以下のユーザ一覧を閲覧して、このサーバにおいて、あなたがこれらのユーザを完全に信頼できることを確認してください:</p><p>$a</p>';
$string['check_riskxss_name'] = 'XSS信頼ユーザ';
$string['check_riskxss_warning'] = 'RISK_XSS - $a 名のユーザが信頼されています。';
$string['check_unsecuredataroot_details'] = '<p>datarootディレクトリは、ウェブからアクセスできないようにしてください。ウェブからアクセスできないディレクトリを使用する最良の方法は、パブリックウェブディレクトリ外のディレクトリを使用することです。</p>
<p>あなたがディレクトリを移動した場合、それに応じて<code>config.php</code>の<code>\$CFG->dataroot</code>設定を変更してください。</p>';
$string['check_unsecuredataroot_error'] = 'あなたのdatarootディレクトリ <code>$a</code> は、正しくない場所に配置され、ウェブにさらされた状態です!';
$string['check_unsecuredataroot_name'] = '安全でないdataroot';
$string['check_unsecuredataroot_ok'] = 'datarootディレクトリは、ウェブからアクセスできないようにしてください。';
$string['check_unsecuredataroot_warning'] = 'あなたのdatarootディレクトリ <code>$a</code> は、正しくない場所に配置され、ウェブにさらされた状態です。';
$string['configuration'] = '設定';
$string['description'] = '説明';
$string['details'] = '詳細';
$string['issue'] = '問題';
$string['reportsecurity'] = 'セキュリティレビュー';
$string['security:view'] = 'セキュリティレポートを表示する';
$string['status'] = 'ステータス';
$string['statuscritical'] = 'クリティカル';
$string['statusinfo'] = '情報';
$string['statusok'] = 'OK';
$string['statusserious'] = 'シリアス';
$string['statuswarning'] = '警告';
$string['timewarning'] = 'データ処理には長時間を要します、しばらくお待ちください ...';

?>
