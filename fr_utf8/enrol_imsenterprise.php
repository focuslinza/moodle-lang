<?php  // $Id$

$string['enrolname'] = 'Fichier IMS Enterprise';

// Subheadings which divide up the config page
$string['basicsettings'] = 'R�glages de base';
$string['usersettings'] = 'Options utilisateurs';
$string['coursesettings'] = 'Options cours';
$string['miscsettings'] = 'Divers';

// Labels in the config page
$string['description'] = 'Cette m�thode v�rifiera r�guli�rement si un fichier texte de format particulier existe � un emplacement d�termin� et le traitera. Ce fichier doit �tre conforme aux <a href=\'../help.php?module=enrol/imsenterprise&file=formatoverview.html\' target=\'_blank\'>sp�cifications IMS Enterprise</a>, et contenir des �l�ments XML person, group et membership.';
$string['createnewusers'] = 'Cr�er des comptes utilisateur pour les utilisateurs pas encore enregistr�s dans Moodle';
$string['deleteusers'] = 'Supprimer les comptes utilisateurs comme sp�cifi� dans les donn�es IMS';
$string['fixcaseusernames'] = 'Mettre les noms d\'utilisateur en minuscules';
$string['fixcasepersonalnames'] = 'Mettre en majuscules les initiales des noms r�els';
$string['truncatecoursecodes'] = 'Tronquer les codes de cours � cette longueur';
$string['createnewcourses'] = 'Cr�er de nouveaux cours (cach�s) si inexistants dans Moodle';
$string['createnewcategories'] = 'Cr�er de nouvelles cat�gories de cours (cach�es) si inexistantes dans Moodle';
$string['zeroisnotruncation'] = '0 indique pas de troncature';
$string['cronfrequency'] = 'Fr�quence de traitement';
$string['allowunenrol'] = 'Permettre aux donn�es IMS de <strong>d�sinscrire</strong> les participants';
$string['sourcedidfallback'] = 'Utiliser le �&nbsp;sourcedid&nbsp;� comme identifiant pour les personnes dont le champ �&nbsp;userid&nbsp;� est introuvable';
$string['usecapitafix']= 'Cocher cette case lors de l\'utilisation de �&nbsp;Capita&nbsp;� (leur format XML n\'est pas tout � fait correct)';
$string['location'] = 'Emplacement du fichier';
$string['mailusers'] = 'Informer les utilisateurs par courriel';
$string['mailadmins'] = 'Informer l\'administrateur par courriel';
$string['processphoto'] = 'Ajouter la photo de l\'utilisateur � son profil';
$string['processphotowarning'] = 'Attention&nbsp;! Le traitement des images est susceptible de charger le seveur de fa�on significative. Nous vous recommandons de n\'activer pas cette option si un grand nombre d\'�tudiants doit �tre trait�.';
$string['logtolocation'] = 'Emplacement de l\'historique d\'importation (vide pour ne pas avoir d\'historique)';
$string['restricttarget'] = 'Ne traiter les donn�es que si la cible suivante est sp�cifi�e';

$string['aftersaving...']= 'Une fois ces r�glages enregistr�s, vous voudrez peut-�tre';
$string['doitnow']= 'effectuer imm�diatement une importation IMS Enterprise';

$string['filelockedmailsubject'] = 'Erreur important&nbsp;: fichier d\'inscription';
$string['filelockedmail'] = 'Le fichier texte utilis� pour les inscriptions bas�es sur un fichier IMS ($a) ne peut pas �tre supprim� par le script cron. Cela signifie habituellement que les droits sont mal r�gl�s. Veuillez corriger les droits de telle sorte que Moodle puisse effacer le fichier, sans quoi il sera trait� de fa�on r�p�titive.';

?>
