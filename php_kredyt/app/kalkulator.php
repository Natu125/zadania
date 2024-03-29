<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$lat = $_REQUEST ['lat'];
$opr = $_REQUEST ['opr'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($lat) && isset($opr))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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

/*//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

}
*/

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	/*//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	
	//wykonanie operacji
	switch ($operation) {
		case 'minus' :
			$result = $x - $y;
			break;
		case 'times' :
			$result = $x * $y;
			break;
		case 'div' :
			$result = $x / $y;
			break;
		default :
			$result = $x + $y;
			break;
	}
	*/
	$result = $kwota/($lat*12)*(1+$opr/100);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'bank.php';