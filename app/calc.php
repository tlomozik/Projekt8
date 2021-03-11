<?php

require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

include _ROOT_PATH.'/app/security/check.php';


function getParams(&$amount, &$years, &$percentage)
{

$amount = isset($_REQUEST ['amount']) ? $_REQUEST['amount'] : null;
$years = isset($_REQUEST ['years']) ? $_REQUEST['years'] : null;
$percentage = isset($_REQUEST ['percentage']) ? $_REQUEST['percentage'] : null;
}

function validate(&$amount, &$years, &$percentage, &$messages)
{
if ( ! (isset($amount) && isset($years) && isset($percentage))) {
	
	return false;
}


if ( $amount == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $years == "") {
	$messages [] = 'Nie podano lat';
}

if ( $percentage == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (count ($messages) !=0) return false;

	
	if (! is_numeric( $amount )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $percentage )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}

    if (! is_numeric( $years )) {
		$messages [] = 'Lata nie są liczbą całkowitą';
	}
    

 if (count ($messages)!=0) return false;
 else return true;



}

function proccess(&$amount, &$years, &$percentage, &$messages, &$result)
{

	
	$amount = floatval($amount);
	$years = intval($years);
	$percentage = floatval($percentage);
	

    $cost= $amount + ($amount*($percentage/100));
	$rate= $cost/($years*12);
    $result=$rate;
}

$amount=null;
$years=null;
$percentage=null;
$result=null;
$messages=array();

getParams($amount, $years, $percentage);

{

	if(validate($amount, $years, $percentage,$messages))
	proccess($amount, $years, $percentage, $messages, $result);

}

$smarty = new Smarty();
$smarty->assign('app_root',_APP_ROOT);
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Kalkulator słuzący do obliczania miesięcznego oprocentowania');
$smarty->assign('page_header','Kalkulator kredytowy');


$smarty->assign('amount',$amount);
$smarty->assign('years',$years);
$smarty->assign('percentage',$percentage);
$smarty->assign('messages',$messages);
$smarty->assign('result',$result);

$smarty->display(_ROOT_PATH.'/app/calc.html');