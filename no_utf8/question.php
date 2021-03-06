<?PHP // $Id$ 
      // question.php - created with Moodle 1.9.15+ (Build: 20111223) (2007101591.08)


$string['adminreport'] = 'Rapport over mulige problemer i din spørsmålsdatabase.';
$string['broken'] = 'Dette er en råtten lenke, filen den peker til finnes ikke.';
$string['byandon'] = 'av <em>$a->user</em> på <em>$a->time</em>';
$string['categorycurrent'] = 'Gjeldende kategori';
$string['categorycurrentuse'] = 'Bruk denne kategorien';
$string['categorydoesnotexist'] = 'Kategorien finne ikke';
$string['categorymoveto'] = 'Lagre i kategori';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Kategori \"$a->name\"</a> i kurset \"$a->coursename\" will få status endret fra  <strong>$a->changefrom til $a->changeto</strong>.';
$string['copy'] = 'Kopier fra $a og endre lenkene.';
$string['created'] = 'Opprettet';
$string['createdmodifiedheader'] = 'Opprettet / Sist lagret';
$string['cwrqpfs'] = 'Tilfeldige spørsmål som velges fra underkategorier.';
$string['cwrqpfsinfo'] = '<p>Ved oppgradering til Moodle 1.9 vil vi dele spørsmålskategoriene i flere kontekster. Noen spørsmålskategorier og spørsmål på siten din vil kanskje få endret delingsstatus. Dette er nødvendig i de sjeldne tilfeller hvor ett eller flere tilfeldige spørsmål i en test er satt opp til å trekkes fra en miks av delte og private kategorier (som er tilfelle her). Dette skjer når et tilfeldig spørsmål er satt til å hentes fra underkategorier med både delt og privat status.</p>
<p>De følgende kategoriene vil få status endret til det samme som overordnet kategori. Dette innvirker ikke på eksisterende tester før de evt. opprettes på nytt.</p>';
$string['cwrqpfsnoprob'] = 'Ingen spørsmålskategorier på din site berøres av oppgraderingen.';
$string['defaultfor'] = 'Standardkategori for $a';
$string['defaultinfofor'] = 'Standard kategori for spørsmål delt i konteksten \'$a\'.';
$string['deletecoursecategorywithquestions'] = 'Det finnes spørsmål i spørsmålsbanken koblet til denne kurskategorien. Hvis du fortsetter vil disse bli slettet. Hvis du ønsker å flytte dem først, vær vennlig å bruk spørsmålsbankbildet.';
$string['donothing'] = 'Ikke kopier eller flytt filer eller endre lenker.';
$string['editingcategory'] = 'Rediger en kategori';
$string['editingquestion'] = 'Rediger et spørsmål';
$string['editthiscategory'] = 'Endre denne kategorien';
$string['erroraccessingcontext'] = 'Får ikke tilgang til konteksten';
$string['errordeletingquestionsfromcategory'] = 'Feil ved sletting av spørsmål fra kategorien $a';
$string['errorfilecannotbecopied'] = 'Feil - kan ikke kopiere $a.';
$string['errorfilecannotbemoved'] = 'Feil - kan ikke flytte $a.';
$string['errorfileschanged'] = 'Feil -  filer det er lenket til fra spørsmål er endret etter skjemaet ble vist.';
$string['errormanualgradeoutofrange'] = 'Karakteren $a->grade er ikke mellom 0 og $a->maxgrade for spørsmålet $a->name. Poeng og kommentar er ikke blitt lagret.';
$string['errormovingquestions'] = 'Feil ved flytting av spørsmål med id\'er $a.';
$string['errorprocessingresponses'] = 'Det oppstod en feil under behandlingen av dine svar.';
$string['errorsavingcomment'] = 'Feil ved lagring av kommentarer for spørsmål $a->name i databasen.';
$string['errorupdatingattempt'] = 'Feil ved oppdatering av forsøk $a->id i databasen.';
$string['exportcategory'] = 'Eksportkategori';
$string['filecantmovefrom'] = 'Spørsmålsfilene kan ikke flyttes siden du ikke har tillatelse til å lagre der du forsøker å flytte filene til.';
$string['filecantmoveto'] = 'Spørsmålsfilene kan ikke flyttes eller kopieres siden du ikke har tillatelse til å lagre der du forsøker å flytte/kopiere filene til.';
$string['filesareacourse'] = 'Kursets filområde';
$string['filesareasite'] = 'Sitens filområde';
$string['filestomove'] = 'Flytt / kopier filer til $a?';
$string['fractionsnomax'] = 'Et av svarene bør ha en score på 100%% slik at det er mulig å få toppkarakter for spørsmålet.';
$string['getcategoryfromfile'] = 'Ta med kategorier fra fil';
$string['getcontextfromfile'] = 'Ta med kontekst fra fil';
$string['ignorebroken'] = 'Ignorer råtne lenker';
$string['invalidcontextinhasanyquestions'] = 'Feil kontekst sendt til question_context_has_any_questions.';
$string['linkedfiledoesntexist'] = 'Den lenkede filen $a eksisterer ikke';
$string['makechildof'] = 'Lag et underpunkt til \'$a\'';
$string['maketoplevelitem'] = 'Gå til toppnivå';
$string['missingimportantcode'] = 'Spørsmålstypen mangler en viktig kode: $a.';
$string['modified'] = 'Sist lagret';
$string['move'] = 'Flytt fra $a og endre lenkene';
$string['movecategory'] = 'Flytt kategori';
$string['movedquestionsandcategories'] = 'Flyttet spørsmål og spørsmålskategorier fra $a->oldplace til $a->newplace.';
$string['movelinksonly'] = 'Bare endre lenkereferanser, ikke flytt eller kopier filer.';
$string['moveq'] = 'Flytt spørsmål';
$string['moveqtoanothercontext'] = 'Flytt spørsmål til en annen kontekst.';
$string['movingcategory'] = 'Flytter kategori';
$string['movingcategoryandfiles'] = 'Er du sikker på at du vil flytte kategorien {$a->name} og alle underkategorier for \"{$a->contextto}\"?<br /> Vi har oppdaget {$a->urlcount} filer som er lenket fra {$a->fromareaname}, ønsker du å kopiere eller flytte disse til  {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Er du sikker på at du vil flytte kategorien \"{$a->name}\" og alle underkategorier for \"{$a->contextto}\"?';
$string['movingquestions'] = 'Flytter spørsmål og filer';
$string['movingquestionsandfiles'] = 'Er du sikker på at du vil flytte spørsmålene {$a->questions} til konteksten for <strong>\"{$a->tocontext}\"</strong>?<br /> Vi har oppdaget <strong>{$a->urlcount} filer</strong> lenket fra disse spørsmålene i {$a->fromareaname}, ønsker du å kopiere eller flytte disse til {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Er du sikker på at du vil flytte spørsmålene {$a->questions} til konteksten for <strong>\"{$a->tocontext}\"</strong>?<br /> Vi ikke oppdaget <strong>noen filer</strong> lenket fra disse spørsmålene i {$a->fromareaname}.';
$string['needtochoosecat'] = 'Du må velge en kategori å flytte spørsmålene til eller klikke \'Avbryt\'.';
$string['nopermissionadd'] = 'Du har ikke tillatelse til å legge til spørsmål her.';
$string['nopermissionmove'] = 'Du har ikke tillatelse til å flytte spørsmål herfra. Du må lagre spørsmålene her i denne kategorien eller lagre det som et nytt spørsmål.';
$string['noprobs'] = 'Fant ingen problemer i spørsmålsdatabasen.';
$string['notenoughdatatoeditaquestion'] = 'Hverken spørsmålsid, eller kategori-id og spørsmålstype eller blitt angitt.';
$string['notenoughdatatomovequestions'] = 'Du må ta med spørsmålsID på spørsmål du ønsker å flytte.';
$string['permissionedit'] = 'Endre dette spørsmålet';
$string['permissionmove'] = 'Flytt dette spørsmålet';
$string['permissionsaveasnew'] = 'Lagre som et nytt spørsmål';
$string['permissionto'] = 'Du har tillatelse til:';
$string['published'] = 'delt';
$string['questionaffected'] = '<a href=\"$a->qurl\">Spørsmål \"$a->name\" ($a->qtype)</a> er i denne kategorien, men er også benyttet i <a href=\"$a->qurl\">test \"$a->quizname\"</a> i kurset  \"$a->coursename\".';
$string['questionbank'] = 'Testbank';
$string['questioncategory'] = 'Spørsmålskategori';
$string['questioncatsfor'] = 'Spørsmålskategorier for \'$a\'';
$string['questiondoesnotexist'] = 'Spørsmålet finnes ikke';
$string['questionsmovedto'] = 'Spørsmål som er i bruk er flyttet til \"$a\" i overordnet kurskategori';
$string['questionsrescuedfrom'] = 'Spørsmål lagret fra kontekst $a';
$string['questionsrescuedfrominfo'] = 'Disse spørsmålene (noen av dem kan være skjult) ble lagret da kontekst $a ble slettet fordi de er fremdeles i bruk av noen prøver eller aktiviteter.';
$string['questionuse'] = 'Bruk spørsmål i denne aktiviteten';
$string['shareincontext'] = 'Del i konteksten for $a';
$string['tofilecategory'] = 'Skriv kategorien til fil';
$string['tofilecontext'] = 'Skriv konteksten til fil';
$string['unknown'] = 'Ukjent';
$string['unknownquestiontype'] = 'Ukjent spørsmålstype: $a.';
$string['unpublished'] = 'privat';
$string['upgradeproblemcategoryloop'] = 'Problem oppdaget ved oppgradering av spørsmålskategorier. Det er en loop i kategoritreet. De berørte kategori ID-ene er $a.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Kunne ikke oppdatere spørsmålskategorien  $a->name ($a->id).';
$string['upgradeproblemunknowncategory'] = 'Problem oppdaget ved oppgradering av spørsmålskategorier. Kategorien $a->id peker til overordnet $a->parent, som ikke eksisterer. Overordnet kategori er endret for å fikse problemet.';
$string['yourfileshoulddownload'] = 'Eksportfilen din blir nå lastet ned. Dersom intet skjer, vennligst <a href=\"$a\">klikk her</a>. Overordnet kategori er endret for å fikse problemet.';

?>
