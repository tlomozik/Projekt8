<?php


require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/app/Messages.class.php';
require_once $conf->root_path.'/app/CalcData.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';



class CalcCtrl {

    private $mess;
    private $data;
    private $result;

    public function __construct(){
	
		$this->mess = new Messages();
		$this->data = new CalcData();
		$this->result = new CalcResult();
	
	}


    public function getParams(){
		$this->data->amount = isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
		$this->data->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
		$this->data->percentage = isset($_REQUEST ['percentage']) ? $_REQUEST ['percentage'] : null;
	}




    public function validate()
{
if ( ! (isset($this->data->amount) && isset($this->data->years) && isset($this->data->percentage))) {
	
	return false;
}


if ( $this->data->amount == "") {
	$this->mess->addError('Nie podano kwoty');
}
if ( $this->data->years == "") {
	$this->mess->addError('Nie podano lat');
}

if ( $this->data->percentage == "") {
	$this->mess->addError('Nie podano oprocentowania');
}

if (! $this->mess->isError()) {

	
	if (! is_numeric( $this->data->amount )) {
		$this->mess->addError('Kwota nie jest liczbą całkowitą');
	}
	
	if (! is_numeric( $this->data->percentage )) {
		$this->mess->addError('Oprocentowanie nie jest liczbą całkowitą');
	}

    if (! is_numeric( $this->data->years )) {
	$this->mess->addError('Lata nie są liczbą całkowitą');
	}
   } 
return ! $this->mess->isError();




}

public function process(){

		$this->getparams();

if ($this->validate()) {

      	 $this->data->amount = floatval($this->data->amount);
    	 $this->data->years = intval( $this->data->years);
    	 $this->data->percentage = floatval( $this->data->percentage);
		$this->mess->addInfo('Parametry poprawne.');

     $cost=  $this->data->amount + ( $this->data->amount*( $this->data->percentage/100));
	 $this->result->result= $cost/( $this->data->years*12);
     

     $this->mess->addInfo('Wykonano obliczenia.');
}
$this->generateView();
}



public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','Kalkulator słuzący do obliczania miesięcznego oprocentowania');
		$smarty->assign('page_header','Kalkulator kredytowy');
				
		$smarty->assign('mess',$this->mess);
		$smarty->assign('data',$this->data);
		$smarty->assign('result',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}

}