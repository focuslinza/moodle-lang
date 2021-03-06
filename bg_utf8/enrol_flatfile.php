<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.4.1+ (2004083101)


$string['description'] = 'При този метод, периодично ще бъде проверяван и обработван външен файл (намиращ се на указано от вас място). Файлът трябва да е специално форматиран и може да изглежда по следния начин:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Обикновен файл';
$string['filelockedmail'] = 'Текстовия файл, който използвате за конторл на записванията ($a), не може да бъде изтрит от процеса cron. Това обикновенно означава, че са объркани правата за достъп. Моля, коригирайте правата за достъп до файла, за да може Moodle да изтрие файла. В противен случай е много вероятно файлът да бъде обработен многократно.';
$string['filelockedmailsubject'] = 'Important error: Enrolment file';
$string['location'] = 'Местоположение на файла';
$string['mailadmin'] = 'Уведоми администратора по пощата';
$string['mailusers'] = 'Уведоми потребителите по пощата';

?>
