<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';



function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lat'] = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$form['opr'] = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;	
}

function validate(&$form,&$hide_intro,&$messages,&$result,&$er){
	if ( ! (isset($form['kwota']) && isset($form['lat']) && isset($form['opr']))) {
		return false;
	}
	$hide_intro = true;

	if ( $form['kwota'] == "") {
		$messages [] = 'Nie podano kwoty';
		$er = true;
	}
	if ( $form['lat'] == "") {
		$messages [] = 'Nie podano lat';
		$er = true;
	}
	if ( $form['opr'] == "") {
		$messages [] = 'Nie podano oprocentowania';
		$er = true;
	}


	if ($er == false) {
		
		$result = $form['kwota']/($form['lat']*12)*(1+$form['opr']/100);
	}else{
		return false;
	}
}
	//inicjacja zmiennych
	$form = null;
	$messages = array();
	$result = null;
	$hide_intro = false;
	$er = false;
		
	getParams($form);
	validate($form,$hide_intro,$messages,$result,$er);

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','kalkulator kredytowy');
$smarty->assign('page_description','coś');
$smarty->assign('page_header','coś');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');