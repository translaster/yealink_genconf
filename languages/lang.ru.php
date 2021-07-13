<?php
/*
------------------
Language: Russian
------------------
*/

$lang = array();

$lang['PAGE_TITLE'] = 'Инструмент создания файлов конфигов для Yealink';
$lang['HEADER_TITLE'] = '<h6>MAC ориентированный инструмент создания файлов конфигов<br>для IP телефонов Yealink</h6>';

$lang['HELP'] = ' Помощь и документация';

// Menu

$lang['MENU_HOME'] = 'Домой';
$lang['MENU_ABOUT_US'] = 'О программе';
$lang['MENU_OUR_PRODUCTS'] = 'Наши продукты';
$lang['MENU_CONTACT_US'] = 'Наши контакты';
$lang['MENU_ADVERTISE'] = 'Реклама';
$lang['MENU_SITE_MAP'] = 'Карта сайта';

//My Vars HOME PAGE

$lang['MODEL'] = 'Модель:';
$lang['SIP_PASS'] = 'Пароль SIP: &nbsp&nbsp';
$lang['SERVER_IP'] = 'IP сервера:';
$lang['SERVER_NM'] = 'Сет.маска:';
$lang['SERVER_GW'] = 'Шлюз:';
$lang['PHONE_VLAN'] = 'VLAN:';
$lang['PHONE_PW'] = 'Phone PW:';
$lang['SUBMIT'] = 'Генерировать';
$lang['BACK'] = ' Назад ';

//My Vars PROCEDED DATA PAGE

$lang['MSG1'] = 'Файл обработан!';
$lang['CREATED_FILE'] = 'Создание файла конфигурации';
$lang['EXTEN_MSG'] = 'EXT: ';
$lang['IP_MSG'] = 'IP-адрес: ';
$lang['CREATEDMSG1'] = 'Создание ';
$lang['CREATEDMSG2'] = ' файлов конфигурации для Yealink ';
$lang['ZIPPED'] = 'Скачать запакованные файлы (формат .zip) ';
$lang['HERE'] = ' ЗДЕСЬ ';


//Alerts

$lang['ALERT_GW_IP'] = 'НЕВЕРНЫЙ ШЛЮЗ И IP АДРЕС СЕРВЕРА';
$lang['ALERT_IP'] = 'НЕВЕРНОЕ ЗНАЧЕНИЕ IP СЕРВЕРА';
$lang['ALERT_GW'] = 'НЕВЕРНОЕ ЗНАЧЕНИЕ ШЛЮЗА';

//errors

$lang['ROW'] = ' В СТРОКЕ # ';
$lang['BLANK'] = "&nbsp &nbsp &nbsp &nbsp" ;
$lang['FIELDS_ERR'] = ' ';
$lang['EMPTY'] = ' &nbsp &nbsp &nbsp EMPTY ';
$lang['ALL_EMPTY'] = ' ВСЕ ПОЛЯ ПУСТЫ ';
$lang['ERR_MSG'] = 'Откройте файл CSV и <b>ИСПРАВЬТЕ</b> указанные ошибки';

//fields of CSV FILE

$lang['IP_PHONE'] = 'IP адреса, ';
$lang['MAC_PHONE'] = 'MAC адреса, ';
$lang['EXT_PHONE'] = 'Внутр.номер, ';

//doc

$lang['DOC'] =

'
============================================================<br>
<b>MAC ORIENTED config file generator tool for Yealink IP phones </b><br>
============================================================<br>
Author:<br>
Jose Miguel Marcano Mendoza<br>
jose@marcano.net.ve<br>
Apache 2.0 Licence<br>
============================================================<br>
<br>
Этот простой инструмент предназначен для облегчения процесса автоматической настройки IP-телефонов Yealink. В общих бизнес-сценариях, когда требуется установить большое количество телефонов, эта процедура необходима, поскольку ручная или веб-конфигурация каждого устройства повторяется и сильно задерживает процесс. Каждому телефону Yealink присвоен MAC-адрес и этот инструмент, предоставляя необходимые данные, создает файл .cfg УНИКАЛЬНОЙ конфигурации для каждого телефона. что после включения и подключения телефона к сети он находит свой уникальный файл конфигурации и применяет его за несколько секунд, без необходимости вручную вносить настройки на каждом устройстве<br>
<br>
The process is the following:<br>
<br>
1- Необходим файл CSV <br>
(Можно использовать Libre Office) с тремя столбцами в следующем порядке:<br>
MAC, Внутренний номер и IP<br>
<br>
<img src="../images/csv.png" alt="CSV File"><br>
<br>
<b>ПРОСТОЙ ФАЙЛ</b> может быть загружен <b><a href="../sample/file.csv">ЗДЕСЬ</a></b><br>
<br>
The MAC collection process of all the phones is easier using a USB bar code reader,<br>
since each phone in its box and on the back has a sticker with this data.<br>
<br>
2- Upload the CSV file to the WEB application and select the data in the form (this data is general for all the equipment contained in the file) as server IP address, SIP password, mask, gateway and VLAN (if applicable)<br>
<br>
<img src="../images/form_en.png" alt="Yealink config generator tool"><br>
<br>
3- Press the Submit button<br>
<br>
- The next screen shows the result where it indicates the generated files and details of the extension and IP address assigned to each MAC.<br>
<br>
<img src="../images/process_en.png" alt="Yealink config generator tool"><br>

<br>
- It allows to download all the generated configuration files of each phone contained in a compressed file (.zip)<br>
<br>
- The tool performs a check of empty fields in the three columns, if an error is detected, it must be corrected and the file re-uploaded
<br>
====================================================================================================
<br>
TECHNICAL DATA:<br>
====================================================================================================
<br>
В этой версии можно выбрать одну из четырех моделей устройств:<br>
<br>
Yealink T-20<br>
Yealink T21-E2<br>
Yealink T23<br>
Yealink T42<br>

<br>
If you need to manipulate a specific configuration option, add a model.. etc, you can manually edit the files located in: cfg directory according to your needs, for example .. change the time zone (default is for Colombia), button assignment .. or other options general.
<br>
if you have questions or requeriments.. Please contact ME! :)
=========================================================<br>
<br>
This tool is created to be modified according to your needs, if you need help .. you need the code SOURCE write me and I will gladly take care of you
=========================================================<br>
jose@marcano.net.ve<br>
=========================================================<br>
<br>
';


?>
