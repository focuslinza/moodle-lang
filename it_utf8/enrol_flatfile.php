<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.6 development (2006022400)


$string['description'] = 'Questo metodo controlla ripetutamente e elabora un file di testo scritto in un formato speciale e rintracciabile nel percorso specificato.
Il file &egrave; un testo separato da virgole con quattro o sei campi per linea:
<pre>
* operazione, ruolo, identificativo(utente), identificativo(corso) [, tempoinizio, tempofine]
where:
* operazione = add | del
* ruolo = student | teacher | teacheredit
* identificativo(utente) = identificativo nella tabella utenti NB non id
* idnumber(course) = identificativo nella tabella corsi NB non id
* tempoinizio = tempo di inizio (in secondi da epoch) - opzionale
* tempofine = tempo di fine (in secondi da epoch) - opzionale
</pre>
Il file può avere un aspetto simile a questo:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'File di testo';
$string['filelockedmail'] = 'Il file di testo che stai utilizzando per le registrazioni ($a) non può essere rimosso dal processo di cron. Questo normalmente significa che i permessi sono sbagliati. Prego correggi i permessi in modo che Moodle possa cancellare il file, altrimenti potrebbe essere processano ripetutamente.';
$string['filelockedmailsubject'] = 'Errore grave: file registrazione';
$string['location'] = 'Percorso del file';
$string['mailadmin'] = 'Notifica all\'amministratore con una email';
$string['mailusers'] = 'Notifica agli utenti con una email';

?>
