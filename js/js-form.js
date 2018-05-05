// JavaScript Document

$(document).ready(function() {
// Форма обратной связи................................./

var regVr22 = "<div><img style='margin-bottom:-4px;' src='../load.gif' alt='Отправка...' width='16' height='16'><span style='font: 11px Verdana; color:#333; margin-left:6px;'>Сообщение отправляется...</span></div><br />";

$("#send").click(function(){
		$("#loadBar").html(regVr22).show();
		var posSurname = $("#posSurname").val();
		var posName = $("#posName").val();
		var posMiddleName = $("#posMiddleName").val();
		var posAge = $("#posAge").val();
		var posEmail = $("#posEmail").val();
		var posMail = $("#posMail").val();
		var posPhone = $("#posPhone").val();
		var posText = $("#posText").val();
		$.ajax({
			type: "POST",
			url: "../send.php",
			data: {"posSurname": posSurname, "posName": posName, "posMiddleName": posMiddleName, "posAge": posAge, "posEmail": posEmail, "posMail": posMail, "posPhone": posPhone, "posText": posText},
			cache: false,
			success: function(response){
		var messageResp = "<p style='font-family:Verdana; font-size:11px; color:green; border:1px solid #00CC00; padding:10px; margin:20px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; background-color:#fff;'>Спасибо, <strong>";
		var resultStat = "!</strong> Ваше сообщение отправлено!</p>";
		var oll = (messageResp + posSurname + resultStat);
				if(response == 1){
				$("#loadBar").html(oll).fadeIn(3000);
				$("#posSurname").val("");
				$("#posName").val("");
				$("#posMiddleName").val("");
				$("#posAge").val("");
				$("#posEmail").val("");
				$("#posMail").val("");
				$("#posPhone").val("");
				$("#posText").val("");
				} else {
		$("#loadBar").html(response).fadeIn(3000); }
										}
		});
		return false;
});


});