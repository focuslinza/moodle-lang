<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.4.3 + (2004083131)


$string['description'] = '<p>Možete koristiti LDAP server za kontrolu Vašeg upisa. To simulira Vaš LDAP mrežu da obuhvati grupe planirane za kurs, i svaka od tih grupa / kurseva će imati broj članova u kolonama planiranih kao studenati.</p>

<p>To simulira te kurseve da se definišu kao grupe u LDAP, sa svakom grupom imate višestruko polje broja članova (<em>member</em> or <em>memberUid</em>) to obuhvata jedinsvenu indentifikaciju za korisnike.</p>

<p>Koristeći LDAP upis, Vaši korisnici <strong>must</strong> imaju validan id broj u polju. LDAP grupe moraju imati taj id broj u polju članova da bi korisnik bio upisan na kurs. Ovo će obično raditi dobro ako već koristite LDAP Autorizaciju.</p>

<p>Upis će biti nadograđen kada se korisnik prijavi. Takođe možete postaviti skriptu da čuva spisak u vidu. Pogledajte u <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>

<p>Ovaj utikač takođe može biti postavljen da automatski kreira novi kurs kada nove grupe budu očigledno u LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Kurs može biti automatski kreiran ako upisivanje na kurs još na postoji na Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Automatsko podešavanje kreiranja kursa';
$string['enrol_ldap_bind_dn'] = 'Ako želite da koristite obaveznog korisnika za traženje korisnika, navedite to ovdje. Nešto kao \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Lozinka za obaveznog korisnika.';
$string['enrol_ldap_category'] = 'Kategorija za automatsko kreiranje kursa.';
$string['enrol_ldap_course_fullname'] = 'Opcija: dati LDAP polju puno ime iz.';
$string['enrol_ldap_course_idnumber'] = 'Planirati jedinstveni indentifikator LDAP, obično <em>cn</em> or <em>uid</em>. To je preporučeno da zaključate vrijednost ako ste koristili automatsko kreiranje kursa.';
$string['enrol_ldap_course_settings'] = 'Podesite upis kursa';
$string['enrol_ldap_course_shortname'] = 'Opcija: dati LDAP polju kratko ime iz.';
$string['enrol_ldap_course_summary'] = 'Opcija: dati LDAP polju kratak pregled iz.';
$string['enrol_ldap_editlock'] = 'Zaključajte vrijednosti';
$string['enrol_ldap_host_url'] = 'Naznačite glavni LDAP u URL-obliku kao \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass koristi za traženje kursa. Obično \'posixGroup\'.';
$string['enrol_ldap_server_settings'] = 'LDAP podešavanja servera';
$string['enrol_ldap_student_contexts'] = 'Spisak objašnjenja gdje grupe sa studentima lociraju spiskove. Odvojite različite sadržaje sa \';\'. Na primjer \'ou=kurs,o=org; ou=ostali,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Dio atributa, gdje korisnik pripada (je spisak) u grupi. Obično \'član\' ili \'članUid\'.';
$string['enrol_ldap_student_settings'] = 'Podesite upis studenta';
$string['enrol_ldap_teacher_contexts'] = 'Spisak objašnjenja gdje grupe sa nastavnicima lociraju spiskove. Odvojite različite sadržaje sa \';\'. Na primjer \'ou=kurs,o=org; ou=ostali,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Dio atributa, gdje korisnik pripada (je spisak) u grupi. Obično \'član\' ili \'članUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Podesite upis nastavnika';
$string['enrol_ldap_template'] = 'Opcija: auto-kreiranje kursa može kopirati njihova podešavanja iz uzorka kursa.';
$string['enrol_ldap_updatelocal'] = 'Nadogradite lokalne podatke';
$string['enrol_ldap_version'] = 'Verzija LDAP protokola koju Vaš server koristi.';
$string['enrolname'] = 'LDAP';

?>
