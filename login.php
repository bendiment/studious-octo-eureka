<?php 
	foreach ($_POST as $key => $value) {
		echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
	}

	require_once "recaptchalib.php";

	$secret = 6LdEOxUTAAAAAGOP9387ud7pe7UPUYv6LUHy2_zS;
	$response = null;
	$reCaptcha = new reCaptcha($secret);

	if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
			$_SERVER["null"],
			$_POST["g-recaptcha-response"]
		);
	}
?>
