<?php
require_once 'init.php';


getConf()->login_action = 'login'; 

switch ($action) {
	default :
		control(null, 'CalcCtrl',	'process',		['user','admin']);
	case 'login': 
		control('app\\controllers', 'LoginCtrl',	'doLogin');
	case 'calcCompute' : 
		
		
	case 'logout' : 
		control(null, 'LoginCtrl',	'doLogout',		['user','admin']);
}
