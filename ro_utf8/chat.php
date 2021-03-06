<?PHP // $Id$ 
      // chat.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['autoscroll'] = 'Scroll automat';
$string['beep'] = 'beep';
$string['chat:chat'] = 'Accesaţi o cameră de discuţii';
$string['chat:deletelog'] = 'Şterge înregistrările discuţiilor';
$string['chat:readlog'] = 'Vezi înregistrările discuţiilor';
$string['chat:talk'] = 'Participă la discuţii';
$string['chatintro'] = 'Text introductiv';
$string['chatname'] = 'Numele acestei camere de discuţii';
$string['chatreport'] = 'Sesiuni de discuţii';
$string['chattime'] = 'Ora de începere a următoarei sesiuni';
$string['configmethod'] = 'Metoda folosită în mod normal la discuţii este aceea prin care clienţii contactează serverul la intervale regulate solicitând actualizări. Această metodă nu necesită configurare şi funcţionează peste tot însă poate crea o mare presiune asupra serverului atunci când există un număr mare de persoane care participă la discuţie. Utilizarea unui daemon pentru server necesită shell access to Unix dar oferă posibilitatea de a adapta cu uşurinţă mediul de discuţii la numărul de utilizatori.';
$string['confignormalupdatemode'] = 'Actualizările camerelor de discuţii sunt de obicei realizate eficient prin intermediul funcţionalităţii <em>Keep-Alive</em> a HTTP 1.1, însă acest lucru înseamnă o încărcare destul de mare a serverului. O metodă mai avansată ar fi folosirea strategiei <em>Stream</em> pentru trimiterea actualizărilor la utilizatori. Folosirea <em>Stream</em> permite eficientizarea încărcării serverului (similar cu metoda chatd) dar este posibil ca această metodă să nu fie compatibilă cu serverul dumneavoastră.';
$string['configoldping'] = 'Care este intervalul de timp maxim după care se detectează deconectarea unui utilizator? (secunde) Aceasta este valoarea maximă, de obicei deconectarea se detectează foarte rapid. Dacă introduceţi aici o valoare mică acest lucru ar putea încărca serverul. Dacă folosiţi metoda normală, nu setaţi <strong>niciodadă</strong> această valoare mai mică decât 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Cât de des se va actualiza camera de discuţii? (secunde). Dacă introduceţi aici o valoare mică, respectiva cameră de discuţii va părea mai rapidă însă acest lucru va însemna o încărcătură mai mare pentru server atunci când sunt mulţi utilizatori. Dacă folosiţi pentru actualizare metoda <em>Stream</em> puteţi selecta frecvenţe mai mari de actualizare - încercaţi cu 2.';
$string['configrefreshuserlist'] = 'Cât de des se va actualiza lista de utilizatori? (secunde)';
$string['configserverhost'] = 'Hostname-ul calculatorului unde se află daemonul serverului';
$string['configserverip'] = 'Adresa IP numerică ce corespunde hostname-ului completat în câmpul de mai sus';
$string['configservermax'] = 'Număr maxim de clienţi admişi';
$string['configserverport'] = 'Portul de pe server ce va fi utilizat de daemon';
$string['currentchats'] = 'Sesiuni de discuţii active';
$string['currentusers'] = 'Utilizatori logaţi';
$string['deletesession'] = 'Şterge această sesiune';
$string['deletesessionsure'] = 'Sunteţi sigur că doriţi ştergerea acestei sesiuni?';
$string['donotusechattime'] = 'Nu afişa ora la care au loc conversaţiile';
$string['enterchat'] = 'Clic pentru a intra în conversaţie';
$string['errornousers'] = 'Nu s-a găsit niciun utilizator!';
$string['explaingeneralconfig'] = 'Aceste setări sunt folosite <strong>întotdeauna</strong>';
$string['explainmethoddaemon'] = 'Aceste setări sunt importante <strong>doar dacă</strong> aţi ales \"Chat server daemon\" la parametrul chat_method';
$string['explainmethodnormal'] = 'Aceste setări sunt importante <strong>doar dacă</strong> aţi ales \"Metoda normală\" la parametrul chat_method';
$string['generalconfig'] = 'Configurări generale';
$string['helpchatting'] = 'Instrucţiuni chat';
$string['idle'] = 'Inactiv';
$string['list_all_sessions'] = 'Listează toate sesiunile';
$string['list_complete_sessions'] = 'Listează doar sesiunile complete.';
$string['listing_all_sessions'] = 'Se listează toate sesiunile';
$string['messagebeepseveryone'] = '$a trimite o atenţionare la toţi utilizatorii!';
$string['messagebeepsyou'] = '$a v-a trimis o atenţionare!';
$string['messageenter'] = '$a a intrat în această cameră de discuţii';
$string['messageexit'] = '$a a ieşit din această cameră de discuţii';
$string['messages'] = 'Mesaje';
$string['method'] = 'Metodă chat';
$string['methoddaemon'] = 'Chat server daemon';
$string['methodnormal'] = 'Metoda normală';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nu şterge niciodată mesajele';
$string['nextsession'] = 'Următoarea sesiune programată';
$string['no_complete_sessions_found'] = 'Nu s-au găsit sesiuni complete.';
$string['noguests'] = 'Această discuţie nu este deschisă vizitatorilor';
$string['nomessages'] = 'Nu a fost trimis încă niciun mesaj';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nu este programată nicio sesiune';
$string['notallowenter'] = 'Nu aveţi permisiunea să accesaţi camera de discuţii.';
$string['oldping'] = 'Timp deconectare';
$string['pastchats'] = 'Sesiuni de discuţii anterioare';
$string['refreshroom'] = 'Actualizare cameră discuţii';
$string['refreshuserlist'] = 'Actualizează listă utilizatori';
$string['removemessages'] = 'Şterge toate mesajele';
$string['repeatdaily'] = 'La aceeaşi oră în fiecare zi';
$string['repeatnone'] = 'Fără repetiţii - se publică doar timpul specificat';
$string['repeattimes'] = 'Repetare sesiuni';
$string['repeatweekly'] = 'La aceeaşi oră în fiecare săptămână';
$string['savemessages'] = 'Salvează sesiuni anterioare';
$string['seesession'] = 'Vezi sesiunea aceasta';
$string['serverhost'] = 'Nume server';
$string['serverip'] = 'IP server';
$string['servermax'] = 'Număr maxim de utilizatori';
$string['serverport'] = 'Port server';
$string['sessions'] = 'Sesiuni discuţii';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Toţi utilizatorii pot vizualiza sesiunile anterioare';
$string['updatemethod'] = 'Metodă actualizare';
$string['viewreport'] = 'Vizualizează sesiuni de discuţii anterioare';

?>
