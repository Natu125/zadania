<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów
function getParams(&$kwota,&$lat,&$opr){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;	
}



// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$lat,&$opr,&$messages){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($lat) && isset($opr))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $lat == "") {
	$messages [] = 'Nie podano lat';
}
if ( $opr == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (isset($messages)) return false;
	else return true;
}


// 3. wykonaj zadanie jeśli wszystko w porządku
function process(&$kwota,&$lat,&$opr,&$message,&$result){
 // gdy brak błędów
 global $role;
	
	if($kwota<=10000 || $role=='admin'){
		$result = $kwota/($lat*12)*(1+$opr/100);
	}else{
		$messages [] = 'Tylko administrator może obliczać dla kwot powyżej 10000 !';
	}
}

getParams($kwota,$lat,$opr);
if ( validate($kwota,$lat,$opr,$messages) ) { // gdy brak błędów
	process($kwota,$lat,$opr,$message,$result);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'bank.php';