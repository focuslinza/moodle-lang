<?PHP // $Id$ 
      // chat.php - created with Moodle 1.6.3 (2006050530)


$string['beep'] = 'เรียก';
$string['chatintro'] = 'คำนำ';
$string['chatname'] = 'ชื่อห้อง';
$string['chatreport'] = 'กำหนดการสนทนา';
$string['chattime'] = 'เวลาสนทนาครั้งต่อไป';
$string['configmethod'] = 'โดยปกติแล้วในการดำเนินการสนทนา คอมพิวเตอร์ของผู้ใช้จะทำการติดต่อกับเซิร์ฟเวอร์ทุกครั้งที่มีการอัพเดท ไม่จำเป็นต้องตั้งค่าใด ๆ และจะทำงานในทุก ๆ ที่ แต่ทั้งนี้อาจจะเป็นการเพิ่มโหลดให้กับเซิร์ฟเวอร์ได้ในกรณีที่มีผู้สนทนาจำนวนมาก  การใช้แชทเซิร์ฟเวอร์อาศัยการใช้ shell access ไปยังระบบยูนิกซ์ แต่จะทำให้อัตราเร็วของการสนทนาเพิ่มขึ้น';
$string['confignormalupdatemode'] = 'ห้องสนทนาปกติจะมีการอัพเดท โดยใช้คุณสมบัติ
<em>Keep-Alive</em> ของ HTTP 1.1 แต่วิธีการนี้ทำให้เซิร์ฟเวอร์ทำงานหนัก ท่านสามารถเลือกใช้วิธีชั้นสูงกว่านี้โดยการเลือก  
<em>Stream</em> วิธีการคือเซิร์ฟเวอร์จะทำการป้อนข้อมูลที่มีการอัพเดทให้แก่สมาชิกการใช้งาน<em>Stream</em> นั้นดีกว่าแบบแรกมากแต่เซิร์ฟเวอร์ของท่านอาจไม่สนับการใช้งานวิธีนี้';
$string['configoldping'] = 'สมาชิกหายไปกี่นาทีถึงจะถือว่าออกจากห้องสนทนาแล้ว';
$string['configrefreshroom'] = 'ควรรีเฟรชแชทรูมบ่อยขนาดไหน ถ้าตั้งค่าช้าจะทำให้ห้องสนทนาดูเร็วขึ้นแต่ว่าจะทำให้เว็บเซิร์ฟเวอร์ทำงานหนัก ถ้ามีคนสนทนาจำนวนมาก';
$string['configrefreshuserlist'] = 'ควรทำการรีเฟรชรายชื่อผู้ร่วมสนทนาบ่อยแค่ไหน (เป็นวินาที)';
$string['configserverhost'] = 'ชื่อของโฮสท์ของคอมพิวเตอร์ที่เป็นที่อยู่ของแชทเซิร์ฟเวอร์';
$string['configserverip'] = 'หมายเลขไอพีของเครื่องที่ระบุข้างบน';
$string['configservermax'] = 'จำนวนผู้สนทนาสูงสุด';
$string['configserverport'] = 'พอร์ทที่ใช้บนเซิร์ฟเวอร์';
$string['currentchats'] = 'การสนทนาที่มีอยู่ขณะนี้';
$string['currentusers'] = 'ผู้ที่กำลังสนทนา';
$string['deletesession'] = 'ลบการสนทนานี้';
$string['deletesessionsure'] = 'แน่ใจนะคะว่าต้องการลบการสนทนานี้';
$string['donotusechattime'] = 'ไม่ระบุเวลาสนทนา';
$string['enterchat'] = 'คลิกที่นี่เพื่อสนทนา';
$string['errornousers'] = 'ไม่พบสมาชิก';
$string['explaingeneralconfig'] = 'ใช้ค่านี้ตลอด';
$string['explainmethoddaemon'] = 'ใช้ค่านี้เมื่อมีการเลือก chatserver daemon เป็นวิธีการติดต่อกับเซิร์ฟเวอร์';
$string['explainmethodnormal'] = 'ใช้ค่านี้เมื่อเลือกวิธีปกติในการติดต่อกับเซิร์ฟเวอร์';
$string['generalconfig'] = 'การตั้งค่าทั่วไป';
$string['helpchatting'] = 'ช่วยเหลือ';
$string['idle'] = 'นิ่ง';
$string['messagebeepseveryone'] = '$a เรียกทุกคน';
$string['messagebeepsyou'] = '$a เรียกคุณ';
$string['messageenter'] = '$a  เข้าห้องสนทนา';
$string['messageexit'] = '$a ออกห้องสนทนา';
$string['messages'] = 'ข้อความ';
$string['methoddaemon'] = 'แชทเซิร์ฟเวอร์';
$string['methodnormal'] = 'วิธีปกติ';
$string['modulename'] = 'ห้องสนทนา';
$string['modulenameplural'] = 'ห้องสนทนา';
$string['neverdeletemessages'] = 'ไม่มีการลบข้อความ';
$string['nextsession'] = 'ตารางการสนทนาครั้งต่อไป';
$string['noguests'] = 'บุคคลทั่วไปไม่สามารถเข้าสนทนาได้';
$string['nomessages'] = 'ยังไม่มีข้อความ';
$string['normalkeepalive'] = 'รักษาสภาพออนไลน์';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'ไม่มีตารางนัดหมาย';
$string['repeatdaily'] = 'เวลาเดียวกันนี้ทุกวัน';
$string['repeatnone'] = 'ไม่มีการซ้ำหัวข้อเสวนา  เฉพาะเวลาที่ระบุเท่านั้น';
$string['repeattimes'] = 'เสวนาเรื่องนี้ซ้ำ';
$string['repeatweekly'] = 'เวลาเดียวกันนี้ทุกสัปดาห์';
$string['savemessages'] = 'บันทึกการเสวนาครั้งที่ผ่านมา';
$string['seesession'] = 'ดูการเสวนาครั้งนี้';
$string['sessions'] = 'การเสวนา';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'ทุกคนสามารถดูการเสวนาครั้งที่ผ่านมาได้';
$string['viewreport'] = 'ดูการเสวนาครั้งที่ผ่านมา';

?>
