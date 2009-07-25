<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['check_configrw_name'] = 'Уписива config.php датотека';
$string['check_configrw_ok'] = 'PHP скриптови не могу да измене config.php датотеку.';
$string['check_configrw_warning'] = 'PHP скриптови могу да измене config.php.';
$string['check_cookiesecure_details'] = '<p>Уколико је омогућена https комуникација препоручује се, такође, да  омогућите сигурносне колачиће. Требало би, такође, да додате перманентну редирекцију са http на https.</p>';
$string['check_cookiesecure_error'] = 'Молимо да омогућите безбедне колачиће';
$string['check_cookiesecure_name'] = 'Безбедни колачићи';
$string['check_cookiesecure_ok'] = 'Безбедни колачићи омогућени';
$string['check_courserole_anything'] = 'Могућност \"урадибилошта\" не сме бити дозвољена у овом <a href=\"$a\">контексту</a>.';
$string['check_courserole_details'] = '<p>Сваки курс има наведену само једну подразумевану улогу при упису. Молимо да проверите да за ту улогу нису дозвољене ризичне могућности.</p>
<p>Једини подржани тип наслеђивања за подразумевану улогу на курсу је <em>Студент</em>.</p>';
$string['check_courserole_error'] = 'Откривене су погрешно дефинисане подразумеване улоге на курсу!';
$string['check_courserole_name'] = 'Подразумеване улоге (курсеви)';
$string['check_courserole_notyet'] = 'Користе се само подразумеване улоге на курсу.';
$string['check_courserole_ok'] = 'Дефиниције подразумеваних улога на курсу су ОК';
$string['check_courserole_risky'] = 'Откривене су ризичне могућности у <a href=\"$a\">контексту</a>.';
$string['check_courserole_riskylegacy'] = 'Откривен је ризичан тип наслеђивања у <a href=\"$a->url\">$a->shortname</a>';
$string['check_defaultcourserole_anything'] = 'Могућност \"урадибилошта\" не сме бити дозвољена у овом <a href=\"$a\">контексту</a>.';
$string['check_defaultcourserole_details'] = '<p>Подразумевана улога студента за упис на курс одређује подразмевану улогу за курсеве. Молимо да проверите да за ту улогу нису дозвољене ризичне могућности.</p>
<p>Једини подржани тип наслеђивања за подразумевану улогу је <em>Студент</em>.</p>';
$string['check_defaultcourserole_error'] = 'Откривене је погрешно дефинисана подразумевана улога \"$a\" на курсу!';
$string['check_defaultcourserole_legacy'] = 'Откривен је ризичан тип наслеђивања';
$string['check_defaultcourserole_name'] = 'Подразумевана улога на курсу (глобално)';
$string['check_defaultcourserole_notset'] = 'Подразумевана улог није подешена.';
$string['check_defaultcourserole_ok'] = 'Подразумеванa дефиницијa улогe на нивоу сајта је ОК';
$string['check_defaultcourserole_risky'] = 'Откривене су ризичне могућности у <a href=\"$a\">контексту</a>.';
$string['check_defaultuserrole_details'] = '<p>Свим корисницима који су пријављени на систем дају се могућности које има подразумевана корисничка улога Молимо Вас, проверите да за ту улогу нису дозвољене опасне могућности.</p>
<p>Једино подржани тип наслеђивања за подразумевану корисничку улогу  је<em>Проверени корисник</em>. Могућност за преглед курса не сме бити омогућена.</p>';
$string['check_defaultuserrole_error'] = 'Подразумевана улога корсника \"$a\" је погрешно дефинисана!';
$string['check_defaultuserrole_name'] = 'Подразумевана улога за све кориснике';
$string['check_defaultuserrole_notset'] = 'Подразумевана улога није подешена';
$string['check_defaultuserrole_ok'] = 'Дефиниција подразумеване улог за све кориснике је ОК';
$string['check_displayerrors_details'] = '<p>Укључивање PHP подешавања <code>display_errors</code> се не препоручује на сајтовима са активним курсевима зато што поруке о грешкама могу открити осетљиве информације о Вашем серверу.</p>';
$string['check_displayerrors_error'] = 'PHP подешавање за приказивање грешака је укључено. Препоручује се да га искључите.';
$string['check_displayerrors_name'] = 'Приказ PHP грешака';
$string['check_displayerrors_ok'] = 'Приказ PHP грешака је онемохућен';
$string['check_emailchangeconfirmation_details'] = '<p>Препоручује се да потврда е-адресе буде неопходна када корсници мењају  електронске адресе у својим профилима. Ако је ова опција искључена, спамери могу покушати да искоисте сервер за слање нежељене порруке.</p>
<p>Поље за електронску адресу, такође, може бити закључано од стране додатака за проверу идентитета. Ова могућност се овде не разамтра.</p>';
$string['check_emailchangeconfirmation_error'] = 'Корисници могу да унесу било коју електронску адресу';
$string['check_emailchangeconfirmation_info'] = 'Корисници могу могу да унесу само  електронске адресе дозвоњених домена.';
$string['check_emailchangeconfirmation_name'] = 'Потврда промене електронске адресе';
$string['check_emailchangeconfirmation_ok'] = 'Потврда промене елетронске адресе у корисничком профилу';
$string['check_embed_details'] = 'Неограничено уметање објеката је верома опасно - било који регистровани корисник може да покрене XSS напад против других корисника. Ово подешавање треба онемогућити на серверима са активним курсевима.</p>';
$string['check_embed_error'] = 'Неограничено уметање објеката је омогућено - то је веома опасно за већину сервера.';
$string['check_embed_name'] = 'Дозволи EMBED и OBJECT';
$string['check_embed_ok'] = 'Неограничено уметање објеката није дозвољено';
$string['check_frontpagerole_details'] = '<p>Подразумевана улога насловне странице је дата свим регистрованим корисницима за активности на насловној страници. Молимо Вас да проверите да ли су за ову улогу дозвољене опасне могућности.</p>
<p>Препоручљиво је да се за ову намену креира посебна улога, без употребе типа наслеђивања улоге</p>';
$string['check_frontpagerole_error'] = 'Откривена је погрешно дефинисана улога насловне странице \"$a\"!';
$string['check_frontpagerole_name'] = 'Улоге почетне странице';
$string['check_frontpagerole_notset'] = 'Улоге почетне странице нису постављене';
$string['check_frontpagerole_ok'] = 'Деифиниција улоге насловне странице је ОК.';
$string['check_globals_details'] = '<p>Register globals се сматра јако несигурним PHP подешавањем.</p>
<p><code>register_globals=off</code> мора бити постављено у PHP конфигурационој датотеци. Ово подешавање можете контролисати тако што ћете уредити Ваш <code>php.ini</code>, Apache/IIS конфигурацију или <code>.htaccess</code> датотеку.</p>';
$string['check_globals_error'] = 'Register globals МОРА бити искључен. Молимо да одмах измените PHP подешавања!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Register globals је искључен.';
$string['check_google_details'] = '<p>Подешавање Отворено за Гугл претраживач допушта претраживачким машинама да приступе курсевима као гости. Не постоји начин да се ова подешавање укључи уколико пријављивање у улози госта није дозвоњено.</p>';
$string['check_google_error'] = 'Приступ претраживачким машинама је дозвољен али је приступ гостима онемогућен.';
$string['check_google_info'] = 'Претраживачи могу ући као гости';
$string['check_google_name'] = 'Отворено за Гугл претраживач';
$string['check_google_ok'] = 'Приступ претраживачима није омогућен';
$string['check_guestrole_details'] = '<p>Улога Гост се користи за госте, кориснике које нису пријављени на систем као и за привремени приступ курсу. Молимо да проверите да нису дозвољене ризичне могућности за ову улогу.</p>
<p>Једини подрржани наслеђени тип за улогу госта је <em>Гост</em>.</p>';
$string['check_guestrole_error'] = 'Улога госта \"$a\" је погрешно дефинисана';
$string['check_guestrole_name'] = 'Улога госта';
$string['check_guestrole_notset'] = 'Улога госта није постављена';
$string['check_guestrole_ok'] = 'Дефиниција за улогу госта је ОК';
$string['check_mediafilterswf_details'] = '<p>Аутоматско уметање swf датотека је веома опасно - било који регистровани корисник може да покрене XSS напад против других корисника. Молимо Вас да онемогућите ову опцију на серверима са активним курсевима.</p>';
$string['check_mediafilterswf_error'] = 'Филтер за Флеш је омогућен - ово је врло опасно за већину сервера.';
$string['check_mediafilterswf_name'] = '.swf филтер је омогућен';
$string['check_mediafilterswf_ok'] = 'Филтер за Флеш није омогућен';
$string['check_noauth_details'] = '<p>Додатак <em>Без провере идентитеа</em> није намењен сајтовима са активним курсевима. Молимо Вас да онемогућите овај додатак осим ако ово није развојни сајт који служи за тестирање.</p>';
$string['check_noauth_error'] = 'Додатак \'Без провере идентитета\' не може бити коришћен на на сајтовима са активним курсевима.';
$string['check_noauth_name'] = 'Без провере идентитета';
$string['check_noauth_ok'] = 'Додатак \'Без провере идентитета\' је онемогућен';
$string['check_openprofiles_details'] = '<p>Отворене корисничке профиле могу да злоупотребе спамери. Препоручује се да буде укључена опција <code>Обавезно пријављивање корисника за приступ страници са профилом</code> или <code>Обавезно пријављивање корисника на систем</code>.</p>';
$string['check_openprofiles_error'] = 'Свако може да види корисничке профиле без пријављивања на систем';
$string['check_openprofiles_name'] = 'Отворени кориснички профили';
$string['check_openprofiles_ok'] = 'За гледање корисничких профила неопходна је претходна пријава на систем.';
$string['check_riskadmin_detailsok'] = '<p>Молимо Вас да потврдите следећи списак администратореа система:</p>$a';
$string['check_riskadmin_detailswarning'] = '<p>Молимо Вас да потврдите следећи списак администратореа система:</p>a->admins
<p>Препоручује да се да улогу администраотра додељујете само у контексту система. Следећи корисници имају додељене администраторске улоге које нису подржане:</p>$a->unsupported';
$string['check_riskadmin_name'] = 'Администратори';
$string['check_riskadmin_ok'] = 'Пронађен/о је $a сервер администратор/а.';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) прегледај додељене улоге</a>';
$string['check_riskadmin_warning'] = 'Пронађено је $a->admincount администратора сервера и $a->unsupcount додељених администраторских улога које нису подржане.';
$string['check_unsecuredataroot_error'] = 'Баш директоријум података <code>$a</code> је на погрешној локацији и доступан је преко веба!';
$string['check_unsecuredataroot_name'] = 'Небезбедни директоријум података';
$string['check_unsecuredataroot_ok'] = 'Директоријум података не сме бити доступан преко веба';
$string['configuration'] = 'Конфигурација';
$string['description'] = 'Опис';
$string['details'] = 'Детаљи';
$string['issue'] = 'Преглед безбедности';
$string['reportsecurity'] = 'Преглед безбедности система';
$string['security:view'] = 'Погледај извештај о безбедности';
$string['status'] = 'Статус';
$string['statuscritical'] = 'Критично';
$string['statusinfo'] = 'Информација';
$string['statusok'] = 'ОК';
$string['statusserious'] = 'Озбиљно';
$string['statuswarning'] = 'Упозорење';
$string['timewarning'] = 'Обрада података може потрајати, молим вас да будете стрпљиви';

?>
