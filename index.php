<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script type="text/javascript" src="js/js-form.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Форма обратной связи</title>
</head>

<body>

<center><div align="left" id="cor5" class="sidebarForm">
<h4>В целях объективного и всестороннего рассмотрения Вашего обращения в установленные сроки необходимо в тексте обращения указать адрес описанного Вами места действия, факта или события, а также указать телефон для возможного уточнения содержания Вашего обращения:</h4>
<div align="center" id='loadBar'></div>
<form action="#" method="post" id="cForm2">

        <label for="destination">Кому адресовано обращение:</label>
        <div class="select" id="cor5">
            <select id="destination">
                <option value="general">Руководство ТФОМС РК</option>
            </select>
        </div>
    
    
    <label for="form_appeal">Форма обращения:</label>
    <div class="select" id="cor5">
        <select id="form_appeal">
            <option value="Благодарность">Благодарность</option>
            <option value="Вопрос">Вопрос</option>
            <option value="Жалоба">Жалоба</option>
            <option value="Сообщение">Сообщение</option>
        </select>
    </div>

   <label>Ваша фамилия:</label>
   <div class="input" id="cor5">
   <input value="" id="posSurname" type="text" />
   </div>

   <label>Ваше имя:</label>
   <div class="input" id="cor5">
   <input value="" id="posName" type="text" />
   </div>

   <label>Ваше отчество (при наличии):</label>
   <div class="input" id="cor5">
   <input value="" id="posMiddleName" type="text" />
   </div>

   <label>Дата вашего рождения:</label>
   <div class="input" id="cor5">
   <input value="" id="posAge" type="date" />
   </div>

   <label>Ваш email:</label>
   <div class="input" id="cor5">
   <input value="" id="posEmail" type="text" />
   </div>

   <label>Ваш почтовый адрес:</label>
   <div class="input" id="cor5">
   <input value="" id="posMail" type="text" />
   </div>

   <label>Ваш телефон:</label>
   <div class="input" id="cor5">
   <input value="" id="posPhone" type="text" />
   </div>
   
   <label>Ваше сообщение:</label>
   <div class="textarea" id="cor5">
   <textarea id="posText"></textarea></div>
   

<button type="button" id="send">Отправить --></button><br>
<input type="checkbox" id="check" onchange="document.getElementById('button').disabled = !this.checked">С порядком приёма и рассмотрения обращений ознакомлен(а), а также подтверждаю свою дееспособность, даю согласие на обработку своих персональных данных в соответствии с ФЗ № 152-ФЗ</a>

</form></div></center>


</body>
</html>
