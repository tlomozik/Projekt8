<?php

require_once 'init.php';


switch ($action) {
	default : 
		include 'check.php'; 
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCredit' :
		include 'check.php';  // KONTROLA
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;

	case 'login': // akcja PUBLICZNA - brak check.php
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogin();
	break;

	case 'logout' : // akcja NIEPUBLICZNA
		include 'check.php';  // KONTROLA
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogout();
	break;
}
