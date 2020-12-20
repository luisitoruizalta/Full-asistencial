<?php

if (isset($_POST['enviar'])) ¨{
	if (!empty($_POST['Unitat']) && !empty($_POST['Tecnics'] !empty($_POST['Num. telefon'])) {
		$Unitat $_POST['Unitat'];
		$Tecnics $_POST['Tecnics'];
		$Telefon $_POST['Num. telefon'];
		$header = "From: noreply@example.com" . "\r\n";
		$header.= "Reply-To: noreply@example.com" . "\r\n";
		$header.= "X-Mailer: PHP/". phpversion();
		$mail = @luisitoruizalta  ($Unitat,$Tecnics,$Telefon,$header);
			echo "<h4>¡Mail enviat correctament!</h4>";
		}
	}
}
