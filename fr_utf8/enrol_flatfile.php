<?php // $Id$ 

$string['enrolname'] = 'Fichier plat';

$string['description'] = 'Cette méthode permet une vérification systématique à partir d\'un fichier texte spécialement mis en forme disposé un emplacement que vous choisissez. Le fichier peut ressembler à ceci :
<pre>
    add, student, 5, CF101
    add, teacher, 6, CF101
    add, teacheredit, 7, CF101
    del, student, 8, CF101
    del, student, 17, CF101
    add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['filelockedmailsubject'] = 'Erreur importante : fichier d\'inscriptions';
$string['filelockedmail'] = 'Le fichier texte que vous utilisez pour l\'inscription ($a) ne pourra pas être effacé par le cron. Cela signifie la plupart du temps que ses permissions ne sont pas correctement réglées. Veuillez corriger ces permissions, de sorte que Moodle puisse effacer le fichier. Sans cela les inscriptions pourraient être effectuées à plusieurs reprises.';
$string['location'] = 'Emplacement du fichier';
$string['mailusers'] = 'Avertir les utilisateurs par courriel';
$string['mailadmin'] = 'Avertir l\'administrateur par courriel';

?>
