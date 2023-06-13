<?php 
	include_once 'controllers/Comment.php';
	$com = new Comment();
	if (isset($_POST['submit'])) {
		$name    = $_POST['name'];
		$comment = $_POST['comment'];

		if ($name === '#123123') {
			header('Location: menu.php?msg='.urlencode('Такого заказа не существует'));
		} else {
			if (empty($name) || empty($comment)) {
				echo "<span style='color:red;font-size:20px'>Field must not be empty !</span>";
			} else {
				$com->setData($name, $comment);
				if ($com->create()) {
					header('Location: menu.php?msg='.urlencode('Ваш комментарий опубликован!'));
				}
			}
		}

		// if (empty($name) || empty($comment)) {
		// 	echo "<span style='color:red;font-size:20px'>Field must not be empty !</span>";
		// } else {
		// 	$com->setData($name, $comment);
		// 	if ($com->create()) {
		// 		header('Location: menu.php?msg='.urlencode('Ваш комментарий опубликован!'));
		// 	}
		// }
	}
 ?>