<?php
function tabuada ($numeroDaTabuada,$numero = 1){

	if ($numero <=20) {

		echo $numeroDaTabuada . "x" . $numero . "=" . $numeroDaTabuada * $numero;

		echo "<br/>";

		$numero++;
		tabuada($numeroDaTabuada,$numero);
	}
}
tabuada(11);

?>