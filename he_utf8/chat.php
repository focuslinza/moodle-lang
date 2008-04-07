<?PHP // $Id$ 
      // chat.php - created with Moodle 1.9 + (Build: 20080326) (2007101509)


$string['beep'] = 'ציפצוף';
$string['chat:chat'] = 'דבר בצ\'אט';
$string['chat:deletelog'] = 'מחק את יומני המעקב של הצ\'אט';
$string['chat:readlog'] = 'קרא את יומני המעקב של הצ\'אט';
$string['chatintro'] = 'טקסט היכרות';
$string['chatname'] = 'שמו של חדר צ\'אט זה';
$string['chatreport'] = 'מושה הצ\'אט';
$string['chattime'] = 'זמן הצ\'אט הבא';
$string['configmethod'] = 'בשיטה הרגילה לעריכת צ\'אטים, הלקוחות נדרשים 
ליצור קשר עם השרת כדי לקבל עדכונים על בסיס קבוע. שיטה זו לא דורשת הגדרת תצורה והיא עובדת בכל מקום, אבל היא עלולה לגרום עומס רב על השרת ברגע שיש מספר גדול של משתתפים. שימוש בתוכנת \"daemon\" דורשת גישת מעטפת (shell) ל-Unix, אבל התוצאה היא סביבת צ\'אט מהירה שניתן להתאים את גודלה לפי הנדרש.';
$string['confignormalupdatemode'] = 'לרוב, עידכונים לחדר הצ\'אט מוגשים ביעילות על ידי תכונת ה<em> (שמור בחיים)Keep-Alive</em> של HTTP 1.1, אבל הדבר עדיין גורם לעומס כבד על השרת. שיטה יותר מתקדמת היא להשתמש באזטרטגיית ה-<em>Stream</em> כדי להזין עדכונים מהמשתמשים. באמצעות <em>Stream</em> ניתן להתאים את הגודל באופו טוב יותר (בדומה לשיטת ה-chatd), אבל ישנה האפשרות שהשרת שלכם לא יתמוך בה.';
$string['configoldping'] = 'אחרי כמה זמן שלא שומעים ממשתמש צריך להחשיבו כמנותק (בשניות)? זהו רק גבול עליון, מפני שלרוב מבחינים בניתוקים מהר מאוד. ערכים נמוכים יהיו תובעניים יותר כלפי השרת שלכם. אם אתם משתמשים בשיטה הרגילה, <strong>לעולם</strong> אל תקבעו את הערך הזה מתחת ל-2 * chat_refresh_room.';
$string['configrefreshroom'] = 'כל כמה זמן חדר הצ\'אט עצמו צריך להתחדש? (בשניות). קביעת זמן קצר תגרום לחדר הצ\'אט להראות מהיר יותר, אך זה גם יכול להעמיס יותר על שרת האינטרנט שלך כאשר אנשים רבים מדברים בצ\'אט.';
$string['configrefreshuserlist'] = 'כל כמה זמן צריכה רשימת המשתמשים להתחדש? (בשניות)';
$string['configserverhost'] = 'שם המחשב המאחר בו נימצאת תוכנת \"daemon\".';
$string['configserverip'] = 'כתובת IP מספרית שתואמת לשם המחשב המארח לעיל.';
$string['configservermax'] = 'המספר המירבי המותר של לקוחות';
$string['configserverport'] = 'פתחה בה ניתן להשתמש בשביל תוכנת \"daemon\".';
$string['currentchats'] = 'אסיפות צ\'אט אקטיביות';
$string['currentusers'] = 'משתמשים נוכחיים';
$string['deletesession'] = 'מחק מושב זה';
$string['deletesessionsure'] = 'האם אתה בטוח שאתה רוצה למחוק מושב זה?';
$string['donotusechattime'] = 'אל תפרסם זמני צ\'אט כלשהם';
$string['enterchat'] = 'לחץ כאן כדי להיכנס לצ\'אט עכשיו';
$string['errornousers'] = 'לא יכול היה למצוא משתמשים!';
$string['explaingeneralconfig'] = 'הגדרות אלה <strong>תמיד</strong> משפיעות.';
$string['explainmethoddaemon'] = 'הגדרות אלה משפיעות <strong>רק </strong> אם בחרתם ב-\"תוכנת \"daemon\" השוהה בשרת צ\'אט\" ב-chat_method.';
$string['explainmethodnormal'] = 'הגדרות אלה משפיעות <strong>רק</strong> במידה ובחרתם ב\"צ\'אט רגיל\" ב-chat_method.';
$string['generalconfig'] = 'תצורה כללית';
$string['helpchatting'] = 'עזרה עם שיחה בצ\'אט';
$string['idle'] = 'בטל';
$string['messagebeepseveryone'] = '$a ציפצף לכולם!';
$string['messagebeepsyou'] = '$a ציפצף לך הרגע!';
$string['messageenter'] = '$a כרגע נכנס לצ\'אט זה';
$string['messageexit'] = '$a עזב צ\'אט זה';
$string['messages'] = 'הודעות';
$string['method'] = 'שיטת הצ\'אט';
$string['methoddaemon'] = 'תוכנת \"daemon\" השוהה בשרת צ\'אט';
$string['methodnormal'] = 'שיטה רגילה';
$string['modulename'] = 'צ\'אט';
$string['modulenameplural'] = 'צ\'אטים';
$string['neverdeletemessages'] = 'לעולם אל תמחוק הודעות';
$string['nextsession'] = 'המושב המתוכן הבאה';
$string['noguests'] = 'צ\'אט זה לא פתוח לאורחים';
$string['nomessages'] = 'אין הודעות עדיין';
$string['normalkeepalive'] = 'KeepAlive (שמור בחיים)';
$string['normalstream'] = 'זרם';
$string['noscheduledsession'] = 'אין מושבים מתוכננות';
$string['oldping'] = 'פסק-זמן לניתוק';
$string['pastchats'] = 'מושבי צ\'אט שעברו';
$string['refreshroom'] = 'רענן חדר';
$string['refreshuserlist'] = 'רענן רשימת משתתפים';
$string['removemessages'] = 'הסר את כל ההודעות';
$string['repeatdaily'] = 'באותו זמן בכל יום';
$string['repeatnone'] = 'ללא חזרות - פרסם את הזמן המפורט בלבד';
$string['repeattimes'] = 'חזור על המושבים';
$string['repeatweekly'] = 'באותו הזמן בכל שבוע';
$string['savemessages'] = 'שמור מושבים ישנים';
$string['seesession'] = 'ראה מושב זה';
$string['serverhost'] = 'שם השרת';
$string['serverip'] = 'ip השרת';
$string['servermax'] = 'מקסימום משתתפים';
$string['serverport'] = 'פורט השרת';
$string['sessions'] = 'מושבי צ\'אט';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'כולם יכולים לראות מושבים ישנים';
$string['updatemethod'] = 'עדכן שיטה';
$string['viewreport'] = 'ראה מושבי צ\'אט ישנים';

?>
