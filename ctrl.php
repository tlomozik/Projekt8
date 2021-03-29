<?php

require_once 'init.php';


switch ($action) {
	default : 
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
	
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCredit' :
		
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
	
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	
}
