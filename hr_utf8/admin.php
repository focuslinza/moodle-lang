<?PHP // $Id$ 
      // admin.php - created with Moodle 1.5.2 + (2005060220)


$string['adminseesallevents'] = 'Administratori vide sve događaje (event)';
$string['adminseesownevents'] = 'Administratori su poput drugih korisnika';
$string['blockinstances'] = 'Instance';
$string['blockmultiple'] = 'Višestruki';
$string['cachetext'] = 'Text cache lifetime';
$string['calendarsettings'] = 'Kalendar';
$string['change'] = 'izmijeni';
$string['configallowcoursethemes'] = 'Ako uključite ovu opciju, svaki kolegij može koristiti svoju vlastitu temu. Teme kolegija imaju prednost pred svim ostalim odabirima tema (na razini sitea, korisnika ili sesije).';
$string['configallowemailaddresses'] = 'Ako želite ograničiti unos email adresa samo sa određenih domena, navedite ih ovdje, odvojene razmakom. Sve ostale domene bit će odbijene. Primjer: <strong>moj-fakultet.hr</strong> ';
$string['configallowobjectembed'] = 'U sklopu mjera sigurnosti, krajnjim korisnicima nije dozvoljeno umetanje multimedijalnih sadržaja (poput Flash sadržaja) unutar teksta korištenjem eksplicitnih tagova EMBED i OBJECT unutar HTML koda (iako je to i dalje moguće izvesti na sigurniji način putem mediaplugins filtera). Želite li ipak dozvoliti uporabu ovih tagova, uključite ovu opciju.';
$string['configallowunenroll'] = 'Ako je označena opcija \'DA\', studenti se mogu SAMI ispisati s kolegija kad god požele. U suprotnom, to ime nije dopušteno, i procesom ispisivanja upravljaju predavači i administratori.';
$string['configallowuserblockhiding'] = 'Želite li dopustiti korisnicima mogućnost prikazivanja/skrivanja blokova (s lijeve i desne strane sučelja) na ovom siteu? Ova opcija koristi Javascript i \"cookies\" za pamćenje stanja svakog bloka koji se može minimizirati, i utječe jedino na navedenog korisnika.';
$string['configallowuserthemes'] = 'Uključite li ovu opciju, korisnicima će biti dozvoljeno podešavanje vlastitih tema. Korisničke teme imaju prioritet nad temama na razini cijelog sitea (ali ne i nad temama na razini pojedinog kolegija)';
$string['configallusersaresitestudents'] = 'Vezano uz aktivnosti na naslovnici sitea, trebaju li SVI korisnici biti tretirani kao studenti? Ako odgovorite sa \'DA\', onda će svakom korisničkom računu biti dozvoljeno sudjelovanje u navedenim aktivnostima u ulozi studenta. Ako odgovorite sa \'NE\', jedino korisnici koji su polaznici bar JEDNOG kolegija će biti u stanju sudjelovati u aktivnostima na naslovnici sitea. Samo administratori i predavači s posebnim ovlastima mogu biti u ulozi predavača na razini naslovnice.';
$string['configautologinguests'] = 'Trebaju li anonimni korisnici biti automatski prijavljeni sustavu kao gosti prilikom pokušaja pristupa koelgijima koji dozvoljavaju pristup gostima (anonimnim korisnicima)? ';
$string['configcachetext'] = 'Za veće siteove ili siteove koji koriste tekstualne filtere, ova postavka može značajno ubrzati rad. Kopije tekstova će biti zadržane u njihovom obrađenom obliku u vremenskom periodu zadanom ovdje (odnosno, tekstovi će biti privremeno pohranjeni sa linkovima koji su rezultat filtriranja). Zadavanje premale vrijednosti ovoj postavci bi moglo donekle usporiti rad, a zadavanje prevelike vrijednosti bi moglo rezultirati time da tekstovima treba previše vremena za osvježenje (npr. s novim linkovima).  ';
$string['configclamactlikevirus'] = 'Smatraj datoteke virusima';
$string['configclamdonothing'] = 'Smatraj datoteke čistima od virusa';
$string['configcountry'] = 'Ako ovdje zadate državu, ista će biti standardno ponuđena za SVE nove korisničke račune. Kako bi prisilili korisnike na davanje informacije o državi iz koje dolaze, ostavite ovo polje praznim.';
$string['configdebug'] = 'Ako uključite ovu opciju, PHP error_reporting će prikazati više upozorenja no inače. Ova opcija je jedino korisna razvojnim timovima (programerima).';
$string['configdeleteunconfirmed'] = 'Ako koristite autentikaciju putem emaila, ovo je period unutar kojeg će korisnički odgovor biti prihvaćen. Nakon isteka ovog perioda, stari nepotvrđeni korisnički računi bit će obrisani.';
$string['configdenyemailaddresses'] = 'Kako biste zabranili registraciju email adresa sa određenih domena, navedite ih ovdje razdvojene razmacima. Sve ostale domene bit će prihvaćene. Primjer: <strong>hotmail.com yahoo.com</strong>';
$string['configdigestmailtime'] = 'Korisnici koji odaberu digest oblik slanja email poruka, dobivat će iste na dnevnoj bazi. Ova postavka zadaje vrijeme dana kada će navedena poruka biti poslana (prvi sljedeći cron koji se pokrene nakon zadanog vremena će ih poslati).';
$string['configdisplayloginfailures'] = 'Ova opcija omogućava prikaz informacije o pogreškama pri prijavljivanju sustavu korisnicima (failed logins).';
$string['configenablerssfeeds'] = 'Uključuje RSS feedove na razini cijelog sitea. Kako biste mogli vidjeti RSS feedove, morate osim ove opcije uključiti i RSS feedove na razini individualnih modula, i to u postavkama modula na stranici admin konfiguracije. ';
$string['configerrorlevel'] = 'Odaberite razinu PHP upozorenja koja će vam se prikazivati na ekranu. Postavka Normal je obično najbolji odabir.';
$string['configextendedusernamechars'] = 'Uključite ovu opciju kako biste omogućili studentima uporabu SVIH znakova u njihovim korisničkim imenima (napomena: ovo se NE ODNOSI na njihova prava imena). Standardno je postavljena opcija \'netočno\' koja u korisničkim imenima isključivo dozvoljava uporabu alfanumeričkih znakova ';
$string['configfilterall'] = 'Filtriranje svih nizova (strings), uključujući naslove, nazive, navigacijske elemente i slično. Ovo je jedino korisno kod korištenja Višejezičnog filtera, u suprotnom previše opterećuje poslužitelj uz malu ili nikakvu korist.';
$string['configfilteruploadedfiles'] = 'Uključivanje ove opcije će \"natjerati\" Moodle na filtriranje svih uploadanih HTML i tekstualnih datoteka prije samog prikaza.';
$string['configforcelogin'] = 'Uobičajeno su naslovnica i popis kolegija na njoj vidljivi anonimnim korisnicima (bez prijave sustavu). Ako želite prisiliti korisnike da se prijave sustavu prije BILO KAKVOG PRIKAZA SADRŽAJA na siteu, onda uključite ovu opciju.';
$string['configforceloginforprofiles'] = 'Uključite ovu postavku kako bi prisilili korisnike da se prijave kao pravi korisnici (ne gosti) prije nego što mogu vidjeti stranice sa osobnim podacima. Standardno je ova postavka isključena (postavljena na \"netočno\") kako bi potencijalni studenti mogli saznati informacije o predavaču na pojedinom kolegiju, no ovo također znači kako ih mogu vidjeti i pretraživači (search-engine).';
$string['configframename'] = 'Ako stavljate Moodle unutar web framea, zadajte ime tog framea ovdje. U suprotnom, ova vrijednost će biti \'_top\'';
$string['configfullnamedisplay'] = 'Ova postavka definira način prikazivanja pravih imena korisnika. Standardna postavka \"Ime + Prezime\" je odgovarajuća, ali postoji i mogućnost skrivanja prezimena u potpunosti, kao i mogućnost zadavanja ove postavke putem pojedinog jezičnog paketa (neki od jezika preferiraju konvenciju \"Prezime + Ime\").';
$string['configgdversion'] = 'Zadajte inačicu GD koja je instalirana na poslužitelju. Inačica koja je prikazana ovdje je ona koju je Moodle bio u stanju automatski detektirati. Nemojte mijenjati ovu opciju ako uistinu ne znate što radite.';
$string['confightmleditor'] = 'Odaberite želite li omogućiti uporabu internog HTML text editora. Napomena: čak i kad uključite ovu opciju, editor će se pojaviti samo kod korisnika koji imaju kompatibilni internet preglednik (browser). Korisnici također mogu u svojim postavkama odlučiti žele li koristiti navedeni editor ili ne.';
$string['configidnumber'] = 'Ova postavka određuje (a) hoće li korisnici uopće biti pitani za ID broj, (b) hoće li korisnici biti pitani za ID broj, ali će navedeno polje moći ostaviti prazno ili (c) hoće li korisnicima unos u polje ID broj biti obavezan. Ako je ID broj unešen, isti se prikazuje u njihovom profilu. ';
$string['configintro'] = 'Putem ove stranice moguće je podesiti veći broj konfiguracijskih varijabli koje bi trebale osigurati  nesmetan rad Moodle sustava na vašem poslužitelju. Nemojte se previše brinuti oko ovih postavki - standardne postavke (default) su obično dovoljne za ugodan i nesmetan rad sustava, a i uvijek možete ponovno otvoriti ovu stranicu i promijeniti neke od varijabli po potrebi.';
$string['configintroadmin'] = 'Putem ove stranice moguće je podesiti  administratorski korisnički račun koji ima potpunu kontrolu nad cijelim siteom. Pobrinite se da date SIGURNO korisničko ime i lozinku, kao i VALJANU email adresu (prejednostavne lozinke, lozinke koje su iste kao i korisničko ime, kao i PRAZNA lozinka su OGROMNA sigurnosna rupa, pa navedeno izbjegnite pod svaku cijenu). Naknadno možete napraviti veći broj administratorskih korisničkih računa.';
$string['configintrosite'] = 'Putem ove stranice možete podesiti izgled naslovnice i naziv sitea. Uvijek se možete naknadno vratiti na ovu stranicu i izmjeniti zadane postavke koristeći link \"Postavke sitea\" na naslovnici (ako ste prijavljeni kao administrator ili korisnik s posebnim pravima).';
$string['configlang'] = 'Odaberite standardni jezik za cijeli site. Korisnici mogu zadati vlastite postavke za svoj korisnički račun naknadno.';
$string['configlangcache'] = 'Uključivanje CACHE postavke za jezični izbornik. Ova postavka štedi velike količine radne memorije i procesorske snage. Ako uključite ovu postavku, jezični izbornik će registrirati i prikazati promjene (dodavanje ili brisanje određenih paketa na razini sustava) nakon par minuta.';
$string['configlangdir'] = 'Većina jezika, odnosno njihovih pisama, se prikazuje s lijeva na desno, ali neki, poput Arapskog ili Hebrejskog, se prikazuju s desna na lijevo.';
$string['configlanglist'] = 'Ostavite ovu opciju praznom ako želite dati vašim korisnicima pravo na odabir BILO KOJEG jezičnog paketa kojeg imate instaliranog na razini Moodle sustava. Međutim, možete skratiti padajući jezični izbornik unošenjem željenih jezičnih kodova odvojenih zarezima. Primjer: en,hr,de,fr,it';
$string['configlangmenu'] = 'Odaberite želite li prikazati padajući izbornik za odabir jezika sučelja na naslovnici, stranici za prijavu sustavu, itd. Ova postavka ne onemogućava korisnika u odabiru željenog jezika sučelja putem opcije željenog jezika u njihovom osobnom profilu.';
$string['configlocale'] = 'Odaberite lokalne postavke na razini cijelog sustava Moodle, što će utjecati na oblik prikaza i jezik na kojem se ispisuju datumi. Navedene lokalne postavke morate prethodno imati instalirane unutar operativnog sustava poslužitelja. (primjer en_US). Ako ne znate što biste odabrali, ostavite ovo polje praznim.';
$string['configloginhttps'] = 'Uključivanjem ove postavke, Moodle će koristiti HTTPS protokol isključivo za stranicu prijave sustavu (login page), a nakon toga će se protokol prebaciti na HTTP, povećavajući time brzinu rada. OPREZ: ova postavka ZAHTJEVA da HTTPS bude omogućen i na vašem web poslužitelju - ako HTTPS nije podešen na poslužitelju MOŽETE UKLJUČIVANJEM OVE POSTAVKE ONEMOGUĆITI PRISTUP Moodle sustavu SEBI I DRUGIMA!! ';
$string['configloglifetime'] = 'Ovom postavkom možete zadati koliko dugo želite čuvati logove o korisničkoj aktivnosti. Logovi koji su stariji od zadanog roka će biti automatski obrisani. Dobro je čuvati logove što je dulje moguće, u slučaju da vam zatrebaju, ali ako imate poslužitelj sa većim brojem korisnika i/ili imate zbog toga probleme s performansama, možda bi bilo bolje podesiti kraći vijek logova.';
$string['configlongtimenosee'] = 'Ako se studenti nisu prijavili sustavu tijekom razmjerno dugog perioda, onda se automatski ispisuju iz kolegija. Ova postavka zadaje navedeno vremensko ograničenje.';
$string['configmaxbytes'] = 'Ova postavka određuje maksimalnu veličinu uploadanih datoteka na razini cijelog sitea. Vrijednosti ove postavke su ograničene PHP specifičnom postavkom upload_max_filesize i Apache postavkom LimitRequestBody. ';
$string['configmaxeditingtime'] = 'Određuje količinu vremena koje korisnici imaju na raspolaganju za nakndano uređivanje forum poruka, rječničkih komentara i sličnih operacija. Uobičajena vrijednost od 30 minuta je obično zadovoljavajuća.';
$string['configmessaging'] = 'Treba li sustav instant poruka (messaging system) za komunikaciju među korisnicima sustava biti uključen?';
$string['confignotifyloginfailures'] = 'Ako postoji log o pogreškama pri prijavi sustavu (login failures), sustav može poslati email poruku o tome. Tko bi trebao dobiti navedenu poruku?';
$string['configpathtoclam'] = 'Putanja do Clam AV alata. Vjerojatno nešto poput /usr/bin/clamscan ili /usr/bin/clamdscan. Ovu vrijednost je potrebno unijeti ako želite koristiti Clam AV.';
$string['configproxyhost'] = 'Ako ovaj <b>poslužitelj</b> koristi proxy poslužitelj (ili vatrozid) kako bi pristupio Internetu, molimo unesite ime proxy poslužitelja u polje. U suprotnom, ostavite navedeno polje prazno.';
$string['configrunclamonupload'] = 'Koristi Clam AV pri uploadu datoteka? Da bi ova postavka uspješno radila, morate navesti točno putanju u varijabli \'pathtoclam\'. (Clam AV je BESPLATNI antivirusni alat koji možete pronaći na http://www.clamav.net/)';
$string['configsectioninterface'] = 'Sučelje';
$string['configsectionmail'] = 'Mail';
$string['configsectionmaintenance'] = 'Održavanje';
$string['configsectionmisc'] = 'Razno';
$string['configsectionoperatingsystem'] = 'Operativni sustav';
$string['configsectionpermissions'] = 'Dozvole';
$string['configsectionsecurity'] = 'Sigurnost';
$string['configsectionuser'] = 'Korisnik';
$string['configvariables'] = 'Varijable';
$string['confirmation'] = 'Potvrda';
$string['edithelpdocs'] = 'Uredi dokumente s pomoći';
$string['editstrings'] = 'Uredi nizove (strings)';
$string['filterall'] = 'Filtriraj sve nizove (strings)';
$string['filteruploadedfiles'] = 'Filter uploaded files';
$string['helpcalendarsettings'] = 'Podesite različite Moodle postavke vezane uz kalendar i vrijeme, odnosno datum.';
$string['helpsitemaintenance'] = 'Za upgrade i ostale poslove održavanja';
$string['helpstartofweek'] = 'Početni dan u tjednu (kalendar)?';
$string['incompatibleblocks'] = 'Nekompatibilni blokovi';
$string['optionalmaintenancemessage'] = 'Opcionalna poruka prilikom održavanja i radova na sustavu';
$string['pleaseregister'] = 'Molimo registrirajte vaš site kako biste maknuli ovu poruku';
$string['sitemaintenance'] = 'Sustav je trenutno nedostupan zbog održavanja i radova.';
$string['sitemaintenancemode'] = 'Stanje održavanja i radova na sustavu';
$string['sitemaintenanceon'] = 'Vaš sustav je trenutno u stanju održavanja i radova na sustavu (prijaviti se mogu samo administratori)';
$string['timezoneisforcedto'] = 'Prisili sve korisnike na uporabu';
$string['timezonenotforced'] = 'Korisnici mogu odabrati vlastitu vremensku zonu';
$string['upgradelogs'] = 'For full functionality, your old logs need to be upgraded.  <a href=\"$a\">More information</a>';
$string['upgradelogsinfo'] = 'Some changes have recently been made in the way logs are stored.  To be able to view all of your old logs on a per-activity basis, your old logs need to be upgraded.  Depending on your site this can take a long time (eg several hours) and can be quite taxing on the database for large sites.  Once you start this process you should let it finish (by keeping the browser window open).  Don\'t worry - your site will work fine for other people while the logs are being upgraded.<br /><br />Do you want to upgrade your logs now?';
$string['upgradesure'] = 'Your Moodle files have been changed, and you are about to automatically upgrade your server to this version:
<p><b>$a</b></p>
<p>Once you do this you can not go back again.</p> 
<p>Are you sure you want to upgrade this server to this version?</p>';
$string['upgradingdata'] = 'Nadograđujem podatke';
$string['upgradinglogs'] = 'Nadograđujem logove';

?>
