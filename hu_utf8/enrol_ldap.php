<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.7 beta + (2006101003)


$string['description'] = '<p>Beiratkozásait kezelheti egy LDAP-szerver segítségével. Feltételezés szerint az Ön LDAP-fája olyan csoportokat tartalmaz, amelyek kurzusoknak vannak megfeleltetve, az egyes kurzusok/csoportok pedig tagjegyzékkel rendelkeznek a tanulók megfeleltetéséhez. </p> <p>A kurzusok csoportokként szerepelnek az LDAP-ben, mindegyik csoport több olyan tagsági <em>tag</em> vagy <em>tagazonosító</em>) mezővel rendelkezik, amely a  felhasználó egyedi azonosítóját tartalmazza.</p> <p>Az LDAP-beiratkozás használatához felhasználóinak érvényes azonosítószám-mezővel kell rendelkezni.  Ez általában akkor működik megfelelően, ha már használ LDAP-hitelesítést.</p> <p>A beiratkozások frissítése a felhasználó bejelentkezésekor történik. A beiratkozások naprakészen tartásához lefuttathat egy programkódot is. Lásd: <em>enrol/ldap/enrol_ldap_sync.php</em>.</p> <p>Ezt a kódrészletet beállíthatja úgy, hogy automatikusan új kurzusokat hozzon létre, ha új csoportok jelennek meg az LDAP-ben.</p>';
$string['enrol_ldap_autocreate'] = 'Automatikusan létrehozhatók kurzusok, ha a Moodle-ban még nem létező kurzusra iratkoznak fel.';
$string['enrol_ldap_autocreation_settings'] = 'Automatikus kurzus-létrehozási beállítások';
$string['enrol_ldap_bind_dn'] =  'Ha bind-user-t kíván felhasználók keresésére használni, állítsa be itt. Például: n=ldapuser,ou=public,o=org';
$string['enrol_ldap_bind_pw'] = 'A bind-user jelszava.';
$string['enrol_ldap_category'] = 'Automatikusan létrehozott kurzusok kategóriája.';
$string['enrol_ldap_contexts'] = 'LDAP-környezetek';
$string['enrol_ldap_course_fullname'] = 'Opcionális: LDAP-mező a teljes név eléréséhez';
$string['enrol_ldap_course_idnumber'] = 'Egyeztesse az LDAP egyedi azonosítójával, ez általában <em>cn</em> vagy <em>uid</em>. Automatikusan létrehozott kurzusok esetén célszerű az értéket zárolni.';
$string['enrol_ldap_course_settings'] = 'Beállítások a kurzusbeiratkozáshoz';
$string['enrol_ldap_course_shortname'] = 'Opcionális: LDAP-mező a rövid név eléréséhez';
$string['enrol_ldap_course_summary'] = 'Opcionális: LDAP-mező az összegzés eléréséhez';
$string['enrol_ldap_editlock'] = 'Érték zárolása';
$string['enrol_ldap_general_options'] = 'Általános lehetőségek';
$string['enrol_ldap_host_url'] = 'Az LDAP-gazdagépet URL-formában adja meg: ldap://ldap.myorg.com/ vagy ldaps://ldap.myorg.com/';
$string['enrol_ldap_memberattribute'] = 'LDAP-tag attribútuma';
$string['enrol_ldap_objectclass'] = 'Kurzusok keresésére használt objektumosztály. Általában posixGroup.';
$string['enrol_ldap_roles'] = 'Szerepek megfeleltetése';
$string['enrol_ldap_search_sub'] = 'Csoporttagság kikeresése alkörnyezet alapján';
$string['enrol_ldap_server_settings'] = 'Az LDAP-szerver beállításai';
$string['enrol_ldap_student_contexts'] = 'Azon környezetek felsorolása, ahol a tanulói beiratkozások csoportjai találhatók. A környezeteket válassza el pontosvesszővel. Például: ou=kurzusok, o=org; ou=egyebek,o=org';
$string['enrol_ldap_student_memberattribute'] = 'Tag jellemzője, ha a felhasználó egy csoporthoz tartozik (iratkozott be). Általában tag vagy tagazonosító.';
$string['enrol_ldap_teacher_memberattribute'] = 'Tag jellemzője, ha a felhasználó egy csoporthoz tartozik (iratkozott be). Általában tag vagy tagazonosító.';
$string['enrol_ldap_student_settings'] = 'Tanulók beiratkozásának beállításai';
$string['enrol_ldap_teacher_contexts'] = 'Azon környezetek felsorolása, ahol a tanulói beiratkozások csoportjai találhatók. A környezeteket válassza el pontosvesszővel. Például: ou=kurzusok, o=org; ou=egyebek,o=org';
$string['enrol_ldap_teacher_memberattribute'] = 'Tag jellemzője, ha a felhasználó egy csoporthoz tartozik (iratkozott be). Általában tag vagy tagazonosító.';
$string['enrol_ldap_teacher_settings'] = 'Tanári beiratkozások beállításai';
$string['enrol_ldap_template'] = 'Opcionális: az automatikusan létrehozott kurzusok a sablonkurzusból átmásolhatják beállításaikat.';
$string['enrol_ldap_updatelocal'] = 'Helyi adatok frissítése';
$string['enrol_ldap_version'] = 'A szervere által használt LDAP-protokoll verziója';
$string['enrolname'] = 'LDAP';

?>