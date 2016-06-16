<?php
    include_once dirname(__FILE__)."/../include/functions.php";
    include_once dirname(__FILE__)."/../include/templates/meta.php";
    include_once dirname(__FILE__)."/../include/templates/mainTemp.php";


    $todayNow = date("Y-m-d H:i:s");

// logout


// form post switch

switch (ture) {

	// POST type

	// index
	case isset($_POST['F_exit']):
		$_SESSION = array();
	    if (isset($_COOKIE["PHPSESSID"])) {
	        setcookie("PHPSESSID", '', time() - 1800, '/');
	    }
	    setcookie("visited", $count, time() - 1800);
	    session_destroy();
	    header("Location:{$rpsc}index.php?logout=ok");
		break;

	case isset($_POST['F_login']):
		$result = mysqlConSql("SELECT * FROM stable WHERE s_code = '{$_POST['F_id']}'");
		if ($result->num_rows == 0) {
            $_SESSION['s_code']     = "{$_POST['F_id']}";
            $_SESSION['s_name']     = "";
            $_SESSION['s_login']    = "ng";
		}else{
			$row = $result->fetch_assoc();
            $_SESSION['s_code']     = "{$_POST['F_id']}";
            $_SESSION['s_name']     = "{$row['s_name']}";
            $_SESSION['s_login']    = "ok";
		}
		header("Location:{$rpsc}index.php");
		break;

	case isset($_POST['F_check']):
        $_SESSION['s_code'] 	= "{$_POST['F_id']}";
        $_SESSION['s_name'] 	= "{$_POST['F_name']}";
        $_SESSION['s_login']	= "check";
		header("Location:{$rpsc}index.php");
		break;

	case isset($_POST['F_check_login']):
		$_SESSION['s_login'] = "ok";
		mysqlConSql("INSERT INTO stable(s_code,s_name) VALUES('{$_POST['F_id']}','{$_POST['F_name']}')");
		header("Location:{$rpsc}index.php");
		break;


	//task
	case isset($_POST['F_task_submit']):
		$sql = <<<EOT
		INSERT INTO
			stasks(
				s_code,
				task_title,
				task_body,
				status,
				update_time
			)
			VALUES(
				'{$_POST['F_task_submit']}',
				'{$_POST['F_task_title']}',
				'{$_POST['F_task_body']}',
				{$_REQUEST['F_task_status']},
				'{$todayNow}'
			);
EOT;
		mysqlConSql($sql);
		header("Location:{$rpsc}task.php?task_add=ok");
		break;

	case isset($_POST['F_task_update']):
		$sql = <<<EOT
		UPDATE stasks
			SET		task_title = '{$_POST['F_task_title']}',
					task_body = '{$_POST['F_task_body']}',
					status = '{$_REQUEST['F_task_status']}',
					status_vol = '{$_POST['F_task_status_vol']}',
					update_time = '{$todayNow}'
			WHERE	id = '{$_POST['F_task_update']}';
EOT;
		mysqlConSql($sql);
		header("Location:{$rpsc}task.php?task_edit=ok");
		break;

	case isset($_POST['F_task_del']):
		$sql = <<<EOT
		UPDATE stasks
			SET		dis = 1
			WHERE	id = '{$_POST['F_task_del']}';
EOT;
		mysqlConSql($sql);
		header("Location:{$rpsc}task.php?task_del=ok");
		break;


	//default
	default:
		# code...
		break;
}








?>