<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.7+ (2006101007)


$string['aftersaving...'] = 'N�r du har gemt dine indstillinger kan det t�nkes at';
$string['allowunenrol'] = 'Tillad IMS data at <strong>framelde</strong> elever/undervisere';
$string['basicsettings'] = 'Basale indstillinger';
$string['coursesettings'] = 'Kursusdata indstillinger';
$string['createnewcategories'] = 'Opret nye (skjulte) kursuskategorier hvis de ikke findes i Moodle';
$string['createnewcourses'] = 'Opret nye (skjulte) kurser hvis de ikke findes i Moodle';
$string['createnewusers'] = 'Opret brugerkonti for brugere der endnu ikke er registreret i Moodle';
$string['cronfrequency'] = 'Opdateringsfrekvens';
$string['deleteusers'] = 'Slet brugerkonti hvis det er angivet i IMS data';
$string['description'] = 'Denne metode vil med j�vne mellemrum gennemg� og behandle en specielt formateret tekstfil et sted du angiver. Filen skal overholde <a href=\'../help.php?module=enrol/imsenterprise&file=formatoverview.html\' target=\'_blank\'>IMS Enterprise specifikationen</a> indeholdene person, gruppe og tilmedinger i XML format.';
$string['doitnow'] = 'udf�r en IMS Enterprise import nu';
$string['enrolname'] = 'IMS Enterprise fil';
$string['filelockedmail'] = 'Den tekstfil der bruges til IMS-filbaseret tilmeldinger ($a) kan ikke slettes af cron-jobbet. Dette skyldes ofte et problem med rettigheder da Moodle ikke har rettigheder til at slette filen. I modsat fald vil den blive behandlet flere gange.';
$string['filelockedmailsubject'] = 'Alvorlig fejl: Tilmeldingsfejl';
$string['fixcasepersonalnames'] = 'Ret personnavne til stort forbogstav';
$string['fixcaseusernames'] = 'Ret brugernavne til sm� bogstaver';
$string['imsrolesdescription'] = 'IMS Enterprise specifikationen indeholder 8 forskellige rolletyper. V�lg venligst hvordan de skal sammenk�des med rollerne i Moodle og om nogle af dem skal ignoreres.';
$string['location'] = 'Filplacering';
$string['logtolocation'] = 'Placering af logfilen (hvis blank vil der ikke blive logget)';
$string['mailadmins'] = 'Advis�r admins med email';
$string['mailusers'] = 'Advis�r brugere med email';
$string['miscsettings'] = 'Forskelligt';
$string['processphoto'] = 'Tilf�j brugerfoto til profil';
$string['processphotowarning'] = 'Advarsel: Billedbehandling vil sansynligvis belaste serveren en del. Du b�r overveje om du vil aktivere denne indstilling, hvis det er et meget stort antal elever, der skal behandles.';
$string['restricttarget'] = 'Behandl kun data hvis de f�lgende steder er defineret';
$string['sourcedidfallback'] = 'Brug &quot;kildeid&quot; som en persons brugerid hvis personens &quot;brugerid&quot; felt ikke kunne findes.';
$string['truncatecoursecodes'] = 'Afkort kursuskoder til denne l�ngde';
$string['usecapitafix'] = 'Afm�rk dette felt hvis der bruges &quot;Capita&quot; (deres XMLformat er en smule ukorrekt)';
$string['usersettings'] = 'Brugerdata indstillinger';
$string['zeroisnotruncation'] = '0 angiver at der ikke skal ske afkortning';

?>
