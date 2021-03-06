<?php


namespace app\controllers;

use app\forms\CalcData;
use app\transfer\CalcResult;

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

public function action_calcCompute(){

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
try{
$database = new \Medoo\Medoo([

	'type' => 'mysql',
	'host' => 'localhost',
	'database' => 'calc_db',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	'collation' => 'utf8_polish_ci',
	'port' => 3306,
	'option' => [
		\PDO::ATTR_CASE => \PDO::CASE_NATURAL,
		\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
	]
 
]);

$database->insert("wynik", [
	"kwota" => $this->data->amount,
	"lata" =>  $this->data->years,
	"oprocentowanie" =>  $this->data->percentage,
	"wynik"=> $this->result->result
]);






	}
	catch(\PDOException $ex){

		getMessages()->addError("DB ERROR: ".$ex->getMessage());
	}

$this->generateView();
}

public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

public function generateView(){
		
		
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Kalkulator słuzący do obliczania miesięcznego oprocentowania');
		getSmarty()->assign('page_header','Kalkulator kredytowy');
				
		getSmarty()->assign('data',$this->data);
		getSmarty()->assign('result',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}

}