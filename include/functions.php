<?php
ini_set('display_errors','Off');
session_start();
include_once dirname(__FILE__)."/constant.php";

//login mailadd add in cookies
//3days email timef

// session start check
// if (empty($_SESSION)) {
// 	$_SESSION['s_login'] = '';
// 	header("Location:{$rpsc}index.php");
// }else{
// 	switch ($_SESSION['s_login']) {
// 		case '':
// 			header("Location:{$rpsc}index.php");
// 			break;
// 		case 'ng':
// 			header("Location:{$rpsc}index.php");
// 			break;
// 		case 'check':
// 			header("Location:{$rpsc}index.php");
// 			break;
// 	}
// }

// session start check
// SESSION START CHECK
// if (preg_match("/login.php/", $_SERVER["REQUEST_URI"])){
// 	//none
// }elseif (preg_match("/chk.php/", $_SERVER["REQUEST_URI"])) {
// 	//none
// }elseif (preg_match("/logout.php/", $_SERVER["REQUEST_URI"])) {
// 	//none
// }else{
// 	if (empty($_SESSION)) {
// 		header("Location:{$rps}login.php?session=no");
// 	}
// }

//=========================
//functions
//=========================

function h($str){
	return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

//MySQL connnections

function mysqlConSql($sqlstr){
	$link = new mysqli('localhost','root','','ryukoshanw_DB');
	if(!$link){
		die('接続できませんでした。'.mysql_error());
	}

	$result = $link->query($sqlstr);
	if (!$result) {
		die('クエリが失敗しました。');
	}

	return $result;
}


function mysqlDiscon(){
	$dislink = new mysqli('localhost','root','','ryukoshanw_DB');
	mysql_close($dislink);
}

function browserChk(){
	$ua = getenv('HTTP_USER_AGENT');
	return "{$ua}";
}

function dateNow(){
	$months     = date("m");
    $days       = date("d");
    $week		= date("(D)");
	return $months."/".$days.$week;
}

function loginChk(){
	if (empty($_SESSION['s_login'])) {
		echo<<<EOT
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						このページはログイン後にご利用出来ます。
					</div>
				</div>
			</div>
EOT;
		mainPageContentEnd();
		mainContentEnd();
		mainPageEnd();
		mainMsg();
		mainHtmlFooter();
		die();
	}
}







