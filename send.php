<?php
header("Content-type: text/html; charset=utf-8");
//**********************************************
if(empty($_POST['js'])){

$log =="";
$error="no"; //флаг наличия ошибки

        $form_appeal = addslashes($_POST['form_appeal']);
		$form_appeal = htmlspecialchars($form_appeal);
		$form_appeal = stripslashes($form_appeal);
		$form_appeal = trim($form_appeal);

		$posSurname = addslashes($_POST['posSurname']);
		$posSurname = htmlspecialchars($posSurname);
		$posSurname = stripslashes($posSurname);
		$posSurname = trim($posSurname);

		$posName = addslashes($_POST['posName']);
		$posName = htmlspecialchars($posName);
		$posName = stripslashes($posName);
		$posName = trim($posName);

		$posMiddleName = addslashes($_POST['posMiddleName']);
		$posMiddleName = htmlspecialchars($posMiddleName);
		$posMiddleName = stripslashes($posMiddleName);
		$posMiddleName = trim($posMiddleName);

		$posAge = addslashes($_POST['posAge']);
		$posAge = htmlspecialchars($posAge);
		$posAge = stripslashes($posAge);
		$posAge = trim($posAge);

		$posEmail = addslashes($_POST['posEmail']);
		$posEmail = htmlspecialchars($posEmail);
		$posEmail = stripslashes($posEmail);
		$posEmail = trim($posEmail);

		$posMail = addslashes($_POST['posMail']);
		$posMail = htmlspecialchars($posMail);
		$posMail = stripslashes($posMail);
		$posMail = trim($posMail);

		$posPhone = addslashes($_POST['posPhone']);
		$posPhone = htmlspecialchars($posPhone);
		$posPhone = stripslashes($posPhone);
		$posPhone = trim($posPhone);

		$posText = addslashes($_POST['posText']);
		$posText = htmlspecialchars($posText);
		$posText = stripslashes($posText);
		$posText = trim($posText);

//Проверка правильность имени
//if(strlen($posName)>15 || strlen($posName)<3) {
//$log.="<li>Неправильно заполнено поле \"Ваше имя\" (3-15 символов)!</li>"; $error="yes"; }

if(!$posName or strlen($posName)<4)
{
$log.="<li>Неправильно заполнено поле \"Ваше имя\" (менее 3 символов)!</li>"; $error="yes";
}

//Проверка правильность фамилии
//if(!$posSurname || strlen($posSurname)>15 || strlen($posSurname)<3) {
//	$log.="<li>Неправильно заполнено поле \"Ваша фамилия\" (3-15 символов)!</li>"; $error="yes"; }
//if(!$posSurname || !(strlen($posSurname)>3 && strlen($posSurname)<15))
//{
//$log.="<li>Неправильно заполнено поле \"Ваша фамилия\" (3-15 символов)!</li>"; $error="yes";
//}

if(!$posSurname or strlen($posSurname)<4)
{
$log.="<li>Неправильно заполнено поле \"Ваша фамилия (менее 3 символов)!</li>"; $error="yes";
}

if(!$posAge)
{
$log.="<li>Незаполнено поле \"Дата рождения!</li>"; $error="yes";
}

//Проверка правильность отчества
//if(!$posMiddleName || strlen($posMiddleName)>15 || strlen($posMiddleName)<3) {
//	$log.="<li>Неправильно заполнено поле \"Ваше отчество\" (3-15 символов)!</li>"; $error="yes"; }
//if(!$posMiddleName || !(strlen($posMiddleName)>3 && strlen($posMiddleName)<15))
//{
//$log.="<li>Неправильно заполнено поле \"Ваше отчество\" (3-15 символов)!</li>"; $error="yes";
//}

//if(!$posMiddleName or strlen($posMiddleName)<2)
//{
//$log.="<li>Неправильно заполнено поле \"Ваше отчество\" (менее 3 символов)!</li>"; $error="yes";
//}

//Проверка правильности телефона
if(!$posPhone || strlen($posPhone) >15 || strlen($posPhone)<7) {
	$log.="<li>Неправильно заполнено поле \"Ваш телефон\" (8-15 символов)!</li>"; $error="yes";
}
if (!preg_match("/(?:8|\+7)? ?\(?(\d{3})\)? ?(\d{3})[ -]?(\d{2})[ -]?(\d{2})/",$posPhone)) {
	$log.="<li>Неправильно заполнено поле \"Телефон\"!</li>"; $error="yes"; }


//Проверка email адреса
function isEmail($posEmail)
            {
                return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
                        ,$posEmail));
            }

if($posEmail == '')
                {
	$log .= "<li>Пожалуйста, введите Ваш email!</li>";
	$error = "yes";

                }

else if(!isEmail($posEmail))
                {

	$log .= "<li>Вы ввели неправильный e-mail. Пожалуйста, исправьте его!</li>";
	$error = "yes";
                }

//Проверка наличия введенного текста комментария
if (empty($posText))
{
	$log .= "<li>Необходимо указать текст сообщения!</li>";
	$error = "yes";
}

//Проверка длины текста комментария
if(strlen($posText)>10100)
{
	$log .= "<li>Слишком длинный текст, в вашем распоряжении 10000 символов!</li>";
	$error = "yes";
}

//Проверка на наличие длинных слов
$mas = preg_split("/[\s]+/",$posText);
foreach($mas as $index => $val)
{
  if (strlen($val)>60)
  {
	$log .= "<li>Слишком длинные слова (более 60 символов) в тексте записи!</li>";
	$error = "yes";
	break;
  }
}
sleep(2);

//Если нет ошибок отправляем email
if($error=="no")
{
//Отправка письма админу о новом комментарии
$to = "tfoms.rk.oa@yandex.ru";//Ваш e-mail адрес
//$mes = "Человек по имени $posName возрастом $posAge отправил Вам сообщение из формы обратной связи Вашего сайта: \n\n$posText";
//$mes = "Тип обращения: $form_appeal\n Фамилия: $posSurname\n Имя: $posName\n Отчество: $posMiddleName\n Возраст: $posAge\n Email: $posEmail\n Почтовый адрес: $posMail\n Телефон: $posPhone\n Сообщение из обратной связи с сайта oms.karelia.ru: \n $posText";
$mes = "Я, $posName $posMiddleName $posSurname дата рождения: $posAge, проживающий по адресу: $posMail сообщаю следующее:\n \n <br> <hr>  $posText \n <br> <hr>";
//$mes = "<div style='background-color: #DFE9F0;color: #2A5594;font-size: 12px !important;font-weight: normal;margin: 0px 1px 0px 0px;padding: 3px 8px;text-decoration: none;white-space: nowrap;'>Hello, world!</div>";

$from = $posEmail;
$sub = '=?utf-8?B?'.base64_encode('Новое сообщение с обратной связи').'?=';
$headers = 'From: '.$from.'
';
$headers .= 'MIME-Version: 1.0
';
$headers .= 'Content-type: text/html; charset=utf-8
';
mail($to, $sub, $mes, $headers);
echo "1"; //Всё Ok!
}
else//если ошибки есть
{
		echo "<p style='font: 13px Verdana;'><font color=#FF3333><strong>Ошибка !</strong></font></p><ul style='list-style: none; font: 11px Verdana; color:#000; border:1px solid #c00; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; background-color:#fff; padding:5px; margin:5px 10px;'>".$log."</ul><br />"; //Нельзя отправлять пустые сообщения

}
}