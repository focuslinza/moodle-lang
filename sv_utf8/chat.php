<?PHP // $Id$ 
      // chat.php - created with Moodle 1.9 Beta + (2007090600)


$string['beep'] = 'pipsignal';
$string['chat:chat'] = 'Tala i ett direktsamtal';
$string['chat:deletelog'] = 'Ta bort loggar för direktsamtal';
$string['chat:readlog'] = 'Läs loggar för direktsamtal';
$string['chatintro'] = 'Introduktion';
$string['chatname'] = 'Namnet på det här rummet för direktsamtal';
$string['chatreport'] = 'Sessioner för direktsamtal';
$string['chattime'] = 'Tid för nästa direktsamtal';
$string['configmethod'] = 'Den normala metoden för  direktsamtal innebär att klienterna regelbundet måste kontakta servern  för uppdateringar. Det kräver ingen konfiguration och fungerar överallt men en mängd  direktsamtalare samtidigt kan skapa en stor arbetsbelastning för servern. Att använda en server demon kräver \"shell\" tillgång till UNIX men det resulterar i en snabb skalbar miljö för direktsamtal.';
$string['confignormalupdatemode'] = 'Uppdateringar av rum för direktsamtal servas effektivt genom användning av egenskapen <em>Håll liv i</em> i HTTP 1.1 men detta leder fortfarande till ganska stor belastning på servern. En mer avancerad metod är att använda strategin med att <em>Strömma</em> för att mata på med uppdateringar åt användarna. Det är mycket bättre att använda <em>Strömma</em> skalor (metoden liknar chatd) men det kanske inte stödjs av Din server.';
$string['configoldping'] = 'Hur länge ska en användare få vara inaktiv innan Du anser att han/hon har avbrutit sin medverkan?';
$string['configrefreshroom'] = 'Hur ofta ska direktsamtalet uppdateras? (I sekunder räknat) Om Du ställer in en kort tid så kommer direktsamtalet att verka snabbare, men då blir det också mer jobb för servern när det är många som samtalar direkt.';
$string['configrefreshuserlist'] = 'Hur ofta ska listan på användare uppdateras? (i sekunder)';
$string['configserverhost'] = 'Värdnamnet på datorn där serverdemonen finns.';
$string['configserverip'] = 'Den numeriska IP-adressen stämmer överens med värdnamnet ovan';
$string['configservermax'] = 'Det maximala antalet tillåtna klienter';
$string['configserverport'] = 'Port att använda för demonen på servern';
$string['currentchats'] = 'Aktiva sessioner för direktsamtal';
$string['currentusers'] = 'Aktuella användare';
$string['deletesession'] = 'Ta bort denna session';
$string['deletesessionsure'] = 'Är Du säker på att Du vill ta bort denna session?';
$string['donotusechattime'] = 'Visa inte några tider för direktsamtal';
$string['enterchat'] = 'Klicka här för att gå in i direktsamtalet nu';
$string['errornousers'] = 'Systemet hittade inga användare';
$string['explaingeneralconfig'] = 'De här inställningarna gäller <strong>alltid</strong>';
$string['explainmethoddaemon'] = 'De här inställningarna har betydelse <strong>endast</strong> om Du har valt \"Chat Server daemon\" som chat_method';
$string['explainmethodnormal'] = 'De här inställningarna har betydelse <strong>endast</strong> om Du har valt \"Normal metod\" som chat_method';
$string['generalconfig'] = 'Allmän konfiguration';
$string['helpchatting'] = 'Hjälp med direktsamtal';
$string['idle'] = 'F n inte aktiv';
$string['messagebeepseveryone'] = '$a skickar en pipsignal till alla!';
$string['messagebeepsyou'] = '$a har just skickat en pipsignal till Dig';
$string['messageenter'] = '$a har precis kommit in i detta direktsamtal';
$string['messageexit'] = '$a har lämnat det här direktsamtalet';
$string['messages'] = 'Meddelanden';
$string['methoddaemon'] = 'Serverdemon för  direktsamtal';
$string['methodnormal'] = 'Normal metod';
$string['modulename'] = 'Direktsamtal';
$string['modulenameplural'] = 'Direktsamtal';
$string['neverdeletemessages'] = 'Radera aldrig några meddelanden';
$string['nextsession'] = 'Nästa schemalagda session';
$string['noguests'] = 'Direktsamtalet  är inte öppet för gäster';
$string['nomessages'] = 'Inga meddelanden än';
$string['normalkeepalive'] = 'Håll_Liv_I';
$string['normalstream'] = 'Strömma';
$string['noscheduledsession'] = 'Ingen schemalagd session';
$string['repeatdaily'] = 'Vid samma tid varje dag';
$string['repeatnone'] = 'Inga upprepade visningar - visa bara den specificerade tiden';
$string['repeattimes'] = 'Upprepade sessioner';
$string['repeatweekly'] = 'Vid samma tid varje vecka';
$string['savemessages'] = 'Spara de sessioner som varit';
$string['seesession'] = 'Se den här sessionen';
$string['sessions'] = 'sessioner för direktsamtal';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Alla kan se de sessioner som har varit';
$string['viewreport'] = 'Visa  de senaste sessionerna för direktsamtal';

?>
