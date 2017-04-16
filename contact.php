<?php
//проверяем значения полученые при проверке скриптом формы
if (trim($_POST['valTrFal'])!='valTrFal_true') {
	echo 'fasle';
}
else {

		$txtname = trim($_POST['txtname']);

		$txtNameValue = trim($_POST['name_class_value']);

		$txtemail = trim($_POST['txtemail']);

		$txtphone = trim($_POST['txtphone']);

		$txtmessage = trim($_POST['txtmessage']);

		// от кого
		$fromMail = 'info@tester_mailerds.ru';
		$fromName = 'NameSendler';

		// Сюда введите Ваш email
		$emailTo = 'info@tester_mailerds.ru';

		$subject = 'Форма обратной связи';
		$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
		$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
		$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

		// тело письма
		$body = "Получено письмо с сайта МойСайт.рф\n\nИмя: $txtname\nТелефон: $txtphone\ne-mail: $txtemail \nСообщение: $txtmessage";
		$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );


		echo 'ok';
}
?>
