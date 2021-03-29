<?php


require_once 'CalcData.class.php';
require_once 'CalcResult.class.php';



class CalcCtrl {

    private $data;
    private $result;

    public function __construct(){
	
		$this->data = new CalcData();
		$this->result = new CalcResult();
	
	}


    public function getParams(){
		$this->data->amount = getFromRequest('amount');
		$this->data->years = getFromRequest('years');
		$this->data->percentage = getFromRequest('percentage');
	}




    public function validate()
{
if ( ! (isset($this->data->amount) && isset($this->data->years) && isset($this->data->percentage))) {
	
	return false;
}


if ( $this->data->amount == "") {
	getMessages()->addError('Nie podano kwoty');
}
if ( $this->data->years == "") {
	getMessages()->addError('Nie podano lat');
}

if ( $this->data->percentage == "") {
	getMessages()->addError('Nie podano oprocentowania');
}

if (! getMessages()->isError()) {

	
	if (! is_numeric( $this->data->amount )) {
		getMessages()->addError('Kwota nie jest liczbą całkowitą');
	}
	
	if (! is_numeric( $this->data->percentage )) {
		getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
	}

    if (! is_numeric( $this->data->years )) {
	getMessages()->addError('Lata nie są liczbą całkowitą');
	}
   } 
return ! getMessages()->isError();




}

public function process(){

		$this->getparams();

if ($this->validate()) {

      	 $this->data->amount = floatval($this->data->amount);
    	 $this->data->years = intval( $this->data->years);
    	 $this->data->percentage = floatval( $this->data->percentage);
		getMessages()->addInfo('Parametry poprawne.');

     $cost=  $this->data->amount + ( $this->data->amount*( $this->data->percentage/100));
	 $this->result->result= $cost/( $this->data->years*12);
     

     getMessages()->addInfo('Wykonano obliczenia.');
}
$this->generateView();
}



public function generateView(){
		global $conf;
		
		
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Kalkulator słuzący do obliczania miesięcznego oprocentowania');
		getSmarty()->assign('page_header','Kalkulator kredytowy');
				
		getSmarty()->assign('data',$this->data);
		getSmarty()->assign('result',$this->result);
		
		getSmarty()->display('CalcView.html');
	}

}