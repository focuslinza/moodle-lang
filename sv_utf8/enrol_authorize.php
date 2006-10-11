<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6.1+ (2006050512)


$string['adminacceptccs'] = 'Vilka typer av kredit/betalkort kommer att accepteras?';
$string['adminauthorizeccapture'] = 'Översyn av beställningar och inställningar för 
\'Auto-Capture\' (automatiskt notera/registrera?)';
$string['adminauthorizeemail'] = 'Inställningar för sändning av e-post';
$string['adminauthorizesettings'] = 'Inställningar för Authorize.net';
$string['adminauthorizewide'] = 'Inställningar på global webbplatsnivå';
$string['adminavs'] = 'Denna funktion kontrollerar om Du har aktiverat systemet för att verifiera adresser (AVS) på Ditt konto hos authorize.net. Detta kräver adressfält som gata, stat (USA), land och postnummer när användaren fyller i formuläret för betalning.';
$string['admincronsetup'] = 'Skriptet cron.php (avsett för underhåll) har inte körts på åtminstone 24 timmar.<br /> Cron måste vara aktiverat om Du vill använda egenskapen schemlagd-notering.<br /><b>Aktivera</b>authorize.net<b></b>och <b>ställ in cron</b> korrekt; eller <b>avmarkera an_review</b> igen.<br />Om Du avaktiverar \'fånga\' enligt schema, då kommer transaktionerna att avbrytas om Du inte kontrollerar dem inom 30 dagar.<br />Kontrollera <b>an_review</b> och mata in <b>\'0\'</b> i fältet <b>an_capture_day</b> om Du vill kunna acceptera eller avslå betalningar <b>manuellt</b> inom 30 dagar.';
$string['adminemailexpired'] = 'Det här är användbart för \'Manuell notering\'. Administratörer blir påminda <b>$a</b> dagar innan avvaktande beställningar går ut.';
$string['adminemailexpiredsort'] = 'När antalet avvaktande beställningar som går ut skickas till lärarna med e-post, vilken är viktigast?';
$string['adminemailexpiredsortcount'] = 'Antal beställningar';
$string['adminemailexpiredsortsum'] = 'Det totala antalet';
$string['adminemailexpiredteacher'] = 'Om Du har aktiverat Manuell notering (se ovan) och lärarna kan administrera betalningar då kan även lärarna bli påminda om att avvaktande beställningar går ut. Detta kommer att skicka ett e-postmeddelande till varje lärare på kurserna om hur många avvaktande beställningar det är som går ut.';
$string['adminemailexpsetting'] = '(0=disable sending email, default=2, max=5)<br />(Inställningar för Manuell notering angående utskickning av e-post:cron=enabled, an_review=checked, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Schemalagd \'capture\'-dag';
$string['adminhelpreviewtitle'] = 'Käre administratör!';
$string['adminneworder'] = 'Kare administratör!

Du har fått en ny avvaktande beställning:

Beställning ID: $a->orderid
Transaktion ID: $a->transid
Användare: $a->user
Kurs: $a->course
Summa: $a->amount

MANUELL NOTERING AKTIVERAD?: $a->acstatus

Om Manuell notering är aktiverat så kommer 
kreditkortet att \'noteras\' $a->captureon
och sedan kommer studenten/eleven/deltagaren/
den lärande att registreras på kursen annars
kommer det att utgå på $a->expireon och då går 
det inte att noteraefter denna dag. 

Du kan även omedelbart acceptera/avslå betalningen
för att registrera studenten/eleven/deltagaren/den
lärande genom att följa denna länk: 
$a->url';
$string['adminnewordersubject'] = '$a->course: Ny avvaktande beställning($a->orderid)';
$string['adminpendingorders'] = 'Du har avaktiverat egenskapen schemalagd dag för notering.<br />Det totala antalet $a->count transaktioner med statusen \'Auktoriserad/avvaktande notering\'kommer att avbrytas om Du inte markerar detta.<br />För att acceptera betalningar gå till sidan för <a href=\'$a->url\'>Administration av betalningar</a>.';
$string['adminreview'] = 'Granska beställningen igen innan kreditkortet behandlas.';
$string['adminteachermanagepay'] = 'Lärare kan administrera betalningarna på kursen.';
$string['amount'] = 'Summa';
$string['anlogin'] = 'Authorize.net: Namn för inloggning';
$string['anpassword'] = 'Authorize.net: Lösenord (inte obligatoriskt)';
$string['anreferer'] = 'Definiera referer URL om det är nödvändigt. 
Detta skickar raden \"Referer: URL\" som en 
inbäddad del  webb-förfrågan.';
$string['antestmode'] = 'Authorize.net:  Testa bara transaktionerna (inga pengar kommer att dras)';
$string['antrankey'] = 'Authorize.net: Transaktionskod';
$string['authcaptured'] = 'Auktoriserad/Noterad';
$string['authorizedpendingcapture'] = 'Auktoriserad/Avvaktar notering';
$string['avsa'] = 'Adress (gata) matchar med postnumret gör det inte.';
$string['avsb'] = 'Det finns ingen angiven adress.';
$string['avse'] = 'Systemfel angående verifikation av adress';
$string['avsg'] = 'Inte-US bank som har utfärdat kortet';
$string['avsn'] = 'Varken adress (gata) eller postnummer matchar.';
$string['avsp'] = 'Verifikation av adress är inte tillämpbart.';
$string['avsr'] = 'Försök igen - systemet är inte tillgängligt eller så har tiden gått ut.';
$string['avsresult'] = '<b>AVS Result:at</b> $a';
$string['avss'] = 'Den här tjänsten stödjs inte av leverantören.';
$string['avsu'] = 'Informationen om adress är inte tillgänglig.';
$string['avsw'] = 'Det 9-siffriga postnumret stämmer men adressen (gata) gör det inte.';
$string['avsx'] = 'Adress (gata) matchar med det 9-siffriga postnumret.';
$string['avsy'] = 'Adress (gata) matchar med det 5-siffriga postnumret.';
$string['avsz'] = 'Det 5-siffriga postnumret stämmer men adressen (gata) gör det inte.';
$string['canbecredit'] = 'Återbetalning kan ske t.o.m.  $a->upto';
$string['cancelled'] = 'Avbruten';
$string['capture'] = 'Noterad';
$string['capturedpendingsettle'] = 'Noterad/Avvaktar överenskommelse';
$string['capturedsettled'] = 'Noterad/Överenskommen';
$string['captureyes'] = 'Kreditkortet kommer att bli noterat och studenten/eleven/
deltagaren/den lärande kommer att bli registrerad på kursen. Är Du säker?';
$string['ccexpire'] = 'Datum för utgång';
$string['ccexpired'] = 'Kreditkortet är utgånget';
$string['ccinvalid'] = 'Ogiltigt kortnummer';
$string['ccno'] = 'Nummer på kreditkort';
$string['cctype'] = 'Typ av kreditkort';
$string['ccvv'] = 'Verifiering av kort';
$string['ccvvhelp'] = 'Se på kortets baksida (de tre sista siffrorna)';
$string['choosemethod'] = 'Om Du har kursnyckeln för att registrera Dig på
kursen - skriv då in den; annars måste Du betala 
för den här kursen.';
$string['chooseone'] = 'Fyll i det ena eller båda av de följande fälten';
$string['costdefaultdesc'] = '<strong>Mata in -1 i inställningarna för kurs,</strong> för att få fältet kostnad (cost) att använda den här förinställda standardkostnaden.';
$string['cutofftime'] = 'Avbrott av transaktion. När den senaste transaktion hämtas för överenskommelse?';
$string['delete'] = 'Förstör';
$string['description'] = 'Modulen Authorize.net gör det möjligt för Dig att
arrangera betalkurser. Om kostnaden för kursen är 
NOLL så blir inte
studenterna/eleverna/deltagarna/de lärande 
avkrävda någon betalning. Det finns en inställning
för kostnad som avser hela webbplatsen som Du kan
ställa in som standard och en inställning som
avser kurser som Du kan ställa in för varje 
enskild kurs. Kostnaden för en kurs gäller före
den för webbplatsen.<br /><br /><b>OBS!</b>Om Du anger en nyckel för att registrera sig på kursen
så kan studenter/elever/deltagare/lärande även 
registrera sig på det sättet. Detta kan Du använda
för att administrera en blandning av betalande och
inte-betalande deltagare.';
$string['enrolname'] = 'Authorize.net: Credit Card Gateway';
$string['expired'] = 'Utgått';
$string['howmuch'] = 'Hur mycket?';
$string['httpsrequired'] = 'Tyvärr kan vi inte behandla Din förfrågan just nu.
Konfigurationen av den här webbplatsen fungerade
inte korrekt. <br /><br />
Var snäll och mata inte in numret på Ditt kreditkort
om Du inte ser ett gult lås längst ner på webbläsaren. 
Det betyder att alla data som sänds mellan klienten
och servern krypteras. Så informationen är skyddad 
under förflyttningen mellan två datorer och ingen 
kan fånga upp Ditt kortnummer under den proceduren.';
$string['logindesc'] = 'Det här alternativet måste vara PÅ.
<br /><br />
Vi rekommenderar starkt att Du ställer in  alternativet
<a href=\"$a->url\">loginhttps ON</a> i Admin>> Variabler>> Säkerhet.
<br /><br /> 
Om Du aktiverar detta så kommer Moodle att använda en säker https anslutning enbart för sidorna för inloggning och betalning.';
$string['missingaddress'] = 'Adress saknas';
$string['missingcc'] = 'Kortnummer saknas';
$string['missingccexpire'] = 'Utgående datum saknas';
$string['missingcctype'] = 'Typ av kort saknas';
$string['missingcvv'] = 'Verifikationsnummer saknas';
$string['missingzip'] = 'Postnummer saknas';
$string['nameoncard'] = 'Namn på kort';
$string['new'] = 'Nytt';
$string['noreturns'] = 'Inga återbetalningar!';
$string['notsettled'] = 'Inte överenskommen';
$string['orderid'] = 'ID för beställning';
$string['paymentmanagement'] = 'Administration av betalningar';
$string['paymentpending'] = 'Din betalning för den här kursen är avvaktande enligt det här beställningsnumret $a->orderid.';
$string['pendingordersemail'] = 'Käre administratör!
$a->pending transaktioner för kursen \"$a->course\" kommer att gå ut om Du inte accepterar betalning inom $a->days dagar.

Det här är ett varningsmeddelande, eftersom Du inte har aktiverat schemalagd notering. Det innebär att Du måste acceptera eller avslå betalningar manuellt. 

För att acceptera/avslå avvaktande betalningar gå till:
$a->url
Att aktivera schemalagd-noteringar innebär att du inte kommer att få några fler varningsmeddelanden , gå till:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Käre lärare!
$a->pending transaktioner kostande $a->currency $a->sumcost för kursen \"$a->course\" kommer att gå ut om Du inte accepterar betalning inom $a->days dagar.

Det här är ett varningsmeddelande, eftersom Din systemadministratör inte har aktiverat schemalagd notering. Det innebär att Du måste acceptera eller avslå betalningar manuellt. 
$a->url';
$string['pendingorderssubject'] = 'VARNING: $a->course, $a->pending beställning(ar) kommer att gå ut inom $a->days dag(ar).';
$string['reason11'] = 'Samma transaktion har skickats in två gånger.';
$string['reason13'] = 'Login ID för affärsidkaren är inte giltigt eller också är kontot inte aktivt.';
$string['reason16'] = 'Det gick inte att hitta transaktionen.';
$string['reason17'] = 'Affärsidkaren accepterar inte den här typen av kreditkort.';
$string['reason27'] = 'Transaktionen ledde till att AVS inte överensstämde. Den adress som var angiven stämmer inte överens med kortinnehavarens fakturaadress.';
$string['reason28'] = 'Säljaren accepterar inte den här typen av kreditkort.';
$string['reason30'] = 'Konfigurationen med processorn är ogiltig. Kontakta säljarens kundtjänst.';
$string['reason39'] = 'Den angivna koden är antingen ogiltig, stödjs inte, accepteras inte av säljaren eller också finns det ingen växelkurs.';
$string['reason43'] = 'Säljaren har ställts in felaktigt av processorn. Kontakta säljarens kundtjänst.';
$string['reason44'] = 'Den här transaktionen har avbrutits. Fel i filtret för kortkoder.';
$string['reason45'] = 'Den här transaktionen har avbrutits.Fel i filtret för kortkoder och eller AVS.';
$string['reason47'] = 'Den summa som begärts för en överenskommelse kan inte vara större än den summa som ursprungligen har godkänts.';
$string['reason5'] = 'Det krävs en giltig summa.';
$string['reason50'] = 'Transaktionen avvaktar en överenskommelse och det går inte att göra en återbetalning.';
$string['reason51'] = 'Summan av alla krediter gentemot den här transaktionen är större än den ursprungliga transaktionen.';
$string['reason54'] = 'Den transaktion som det refereras till svarar inte mot de gällande kriterierna för att medge en kredit.';
$string['reason55'] = 'Summan av krediterna gentemot den refererade transaktionen skulle överskrida den ursprungliga debetsumman.';
$string['refund'] = 'Återbetalning';
$string['refunded'] = 'Återbetalad';
$string['returns'] = '\'returns\' ersättningar';
$string['reviewday'] = 'Registrera automatiskt kreditkortet om inte en 
lärare eller administratör granskar beställningen
igen inom <b>$a</b> dagar. CRON MÅSTE VARA AKTIVERAT.<br />
(O dagar innebär att automatisk registrering
avaktiveras, det innebär också att  lärare, admin
granskar beställningen manuellt. Transaktionen 
kommer att avbrytas om Du avaktiverar autoregistrering 
eller om Du inte granskar den inom 30 dagar).';
$string['reviewnotify'] = 'Din betalning kommer att granskas. Du kan förvänta
Dig ett e-postmeddelande från Din lärare inom ett
par dagar.';
$string['sendpaymentbutton'] = 'Skicka betalning';
$string['settled'] = 'Överenskommen';
$string['settlementdate'] = 'Datum för överenskommelse';
$string['subvoidyes'] = 'Transaktion för återbetalning $a->transid kommer att
avbrytas och det kommer att kreditera Ditt konto med
$a->amount   Är Du säker?';
$string['tested'] = 'Testad';
$string['testmode'] = '[TESTLÄGE]';
$string['testwarning'] = 'Notera/Void/Kredit tycks fungera i testläge men ingen post uppdaterades och lades in i databasen.';
$string['transid'] = 'ID för transaktion';
$string['unenrolstudent'] = 'Avregistrera lärande?';
$string['void'] = 'Void';
$string['voidyes'] = 'Transaktionen kommer att avbrytas. Är Du säker?';
$string['welcometocoursesemail'] = 'Tack för Din betalning. Du har registrerat Dig på den här kurserna:

$a->courses

Du kan nu redigera Din profil:
$a->profileurl

Du kan se information om ditt konto här:
$a->paymenturl
Du kan inte göra detta: $a->action';
$string['youcantdo'] = 'Du kan inte genomföra det här: $a->action';
$string['zipcode'] = 'Postkod, t.ex . postnummer';

?>
