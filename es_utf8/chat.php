<?PHP // $Id$ 
      // chat.php - created with Moodle 1.6 (2006050506)


$string['beep'] = 'beep';
$string['chat:chat'] = 'Charlar';
$string['chat:deletelog'] = 'Eliminar registros de chat';
$string['chat:readlog'] = 'Leer registros de chat';
$string['chatintro'] = 'Texto introductorio';
$string['chatname'] = 'Nombre de la sala';
$string['chatreport'] = 'Sesiones';
$string['chattime'] = 'Próxima cita';
$string['configmethod'] = 'El método normal de chat implica que los usuarios contactan con el servidor de forma regular para llevar a cabo las actualizaciones. No requiere configuración y funciona en cualquier parte, pero puede ocasionar una sobrecarga en el servidor cuando hay muchos usuarios simultáneamente en la sala. Utilizar un \'daemon\' (i.e., proceso de ejecución independiente en segundo plano) en el servidor requiere el acceso shell (de intérprete de comandos) a Unix, pero resulta en un ambiente de chat más rápido y escalable.';
$string['confignormalupdatemode'] = 'Las actualizaciones de la sala de chat normalmente son servidas eficientemente utilizando la característica de HTTP 1.1 <em>Keep-Alive</em>, pero esto resulta una tarea bastante pesada para el servidor. Un método más avanzado consiste en utilizar la estrategia <em>Stream</em> para enviar actualizaciones a los usuarios. Al utilizar <em>Stream</em> se consigue un escalamiento mucho mejor (es similar al método chatd), pero es posible que su servidor no tenga disponible esta opción.';
$string['configoldping'] = '¿Después de cuánto tiempo de inactividad debemos considerar que el usuario se retiró?';
$string['configrefreshroom'] = '¿Cada cuántos segundos se debe actualizar la página del chat?
Un valor bajo permitirá una conversación más ágil, pero puede ser mucha carga para el servidor cuando hay mucha gente en la sala';
$string['configrefreshuserlist'] = '¿Cada cuántos segundos se debe actualizar la lista de usuarios presentes en el chat?';
$string['configserverhost'] = '\'Hostname\' (nombre de anfitrión) del ordenador en el que reside el \'daemon\' (proceso de ejecución independiente) del servidor';
$string['configserverip'] = 'Dirección IP numérica equivalente al \'hostname\' (nombre de anfitrión)';
$string['configservermax'] = 'Número máximo de usuarios';
$string['configserverport'] = 'Puerto que usa el \'daemon\' en el servidor';
$string['currentchats'] = 'Salas activas';
$string['currentusers'] = 'Usuarios ';
$string['deletesession'] = 'Borrar esta sesión';
$string['deletesessionsure'] = '¿Está seguro de que desea borrar esta sesión?';
$string['donotusechattime'] = 'No publicar horas de chat';
$string['enterchat'] = 'Entrar a la sala';
$string['errornousers'] = '¡No puedo encontrar usuarios!';
$string['explaingeneralconfig'] = 'Estos ajustes están <strong>siempre</strong> en funcionamiento';
$string['explainmethoddaemon'] = 'Estos ajustes actúan <strong>solamente</strong> si ha seleccionado \"Daemon servidor de chat\" en chat_method';
$string['explainmethodnormal'] = 'Estos ajustes actúan <strong>solamente</strong> si ha seleccionado \"Método normal\" en chat_method';
$string['generalconfig'] = 'Configuración general';
$string['helpchatting'] = 'Ayuda del chat';
$string['idle'] = 'Inactivo';
$string['messagebeepseveryone'] = '$a envía un beep a todos';
$string['messagebeepsyou'] = '$a le acaba de enviar un beep';
$string['messageenter'] = '$a entró a la sala';
$string['messageexit'] = '$a salió de la sala';
$string['messages'] = 'Mensajes';
$string['methoddaemon'] = '\'Daemon\' del servidor de chat';
$string['methodnormal'] = 'Método normal';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nunca borrar mensajes';
$string['nextsession'] = 'Próxima sesión programada';
$string['noguests'] = 'El chat no está abierto a invitados';
$string['nomessages'] = 'Aún no hay mensajes';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'No hay sesión programada';
$string['repeatdaily'] = 'A la misma hora todos los días';
$string['repeatnone'] = 'Sin repeticiones, publicar sólo la hora especificada';
$string['repeattimes'] = 'Repetir sesiones';
$string['repeatweekly'] = 'A la misma hora todas las semanas';
$string['savemessages'] = 'Guardar sesiones pasadas';
$string['seesession'] = 'Ver esta sesión';
$string['sessions'] = 'Sesiones';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Todos pueden ver las sesiones pasadas';
$string['viewreport'] = 'Ver las sesiones anteriores';

?>
