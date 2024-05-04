<?php
// 1. Crea due variabili che rappresentano la base e l'altezza di un rettangolo. Calcola L'area del rettangolo ed il perimetro. //

$base = 10;
$altezza = 5;

$area = $base * $altezza;
echo "l'area rettangolo è $area.\n";

$perimetro = (2 * $base) + (2 * $altezza);
echo "il perimetro del rettangolo è $perimetro.\n";

echo "\n";  

// 2. Assegna ad una variabile un importo in dollari, convertilo in € e visualizzalo nella pagina. Supponiamo un tasso di cambio fisso. //

$valuta1 = 1.2;
$valuta2 = 1;

$valeur = $valuta1 * $valuta2;
echo "un dollaro costa $valeur euro.\n";

$tasso = $valuta2 / $valuta1;
echo "Il valore tasso di cambio euro dollaro è $tasso.\n" ;

echo "\n";  
//3. Crea una variabile che rappresenta il prezzo originale di un prodotto e un'altra variabile per lo sconto ppercentuale. Calcola il prezzo scontato e stampa il risultato. 
// volendo arrotondare uso la funzione round come sotto 
//echo "il prezzo scontato è: " . round($prezzoscontato, 2);////

$price = 100;
$sconto = 20;

$prezzoscontato = $price - (($price * $sconto) / 100);
echo "Il prezzo scontato articolo è $prezzoscontato euro.\n";

echo "\n";  

                              /*  Istruzioni Condizionali  */
  /* 1. Calcola il massimo fra due numeri (si può usare anchela funzione matematica max: echo max($numero1, $numero2);) */

  $x = 30;
  $y = 20;
  
  if($x > $y) {
      echo "Il numero maggiore è $x.\n";
  }   else {
      echo "Il numero maggiore è $y.\n";
  }
  echo "\n";  
  /* 2. Convertire una valutazione numerica in una lettera corrispondente. (es. se 10 scrivi A, ecc) */

$voto1 = 5;

if($voto1 >= 9) {
     echo "Il tuo voto è A, complimenti!.\n";
} elseif($voto1 == 8){
    echo "il tuo voto è B, bravo continua cosi!\n";
} elseif($voto1 == 7){
        echo "Il tuo voto è C, puoi migliorare!\n";
} elseif($voto1 >= 6){
            echo "Il tuo voto è D, devi sforzarti un pò di più!\n";
} else {
    echo "il tuo voto è E, contatta il docente!\n";
}

echo "\n";      

/* 3. Verifica se un numero è multiplo di 3.  */
  
$a = -3;

if($a % 3 == 0 ) {
    echo "il numero è multiplo di 3!\n";
} else {
    echo "il numero NON è multiplo di 3!\n";

}
echo "\n"; 

// Operatori di identità: (===) oppure non identità, verifico non sono se i dati sono uguali ma anche che tipo è se è uguale e non magari un int e una str ! //

$c = 5;
$d = "5";

//soluzione 1//
if($c === $d)
    echo "I numeri sono uguali, anche nel tipo.\n";
else {
    echo "I numeri non sono uguali.\n";

}
echo "\n";
//soluzione 2 uso l'operatore di confronto (!=) a negazione di uguaglianza anche di tipologia (!==) //

if($c !== $d)
    echo "I numeri sono diversi.\n";
else {
    echo "I numeri sono uguali anche nel tipo.\n";
}

echo "\n";

  /* 4. Calcola il massimo fra tre numeri. */

$numero1 = 10;
$numero2 = 20;
$numero3 = 250;

//soluzione 1//
if($numero1 > $numero2) {
    if($numero1 < $numero3){
        echo "il numero maggiore è $numero1\n.";
    } else {
        echo "il numero maggiore è $numero3\n.";
    }
}
echo "\n";

//soluzione 2 //

$massimo = $numero1;
 if($numero2 > $massimo) {
    $massimo = $numero2;
 }
  if($numero2 > $massimo){
    $massimo = $numero2;
  }
echo $massimo;

echo "\n";

echo max($numero1, $numero2, $numero3,);
;
echo "\n";

                                 /*  Operatori Logici AND &&(shift+6) OR NOT */

 /* 1. Assegna ad una variabile numero un valore e verifica se è compreso tra 50 e 100. */

 $a = 55;
 
 if($a >= 50 && $a <= 100) {
    echo "Il valore di a è compreso tra 50 e 100.\n";
 } else {
    echo "Il valore di a non è compreso tra 50 e 100.\n";
 }
 echo "\n";  

 /* 2. Assegna ad una variabile anno un valore e verifica se è bisestile.; 
 
 // gli ANNI NON SECOLARI il cui numero è divisibile per 4 
 (anni non secolari sono quelli che non sono divisibili per 100, ma divisibili per 4)
  QUI HO DUE CONDIZIONI: 
  1. NON DIVISIBILE PER 100; 
  2. DIVISIBILE PER 4, 
                      E DEVONO ESSERE VERIFICATE ENTRAMBE,  quindi uso AND (&&) per verificare che entrambe siano vere) ;
 
 // gli ANNI SECOLARI il cui numero è divisibile per 400.
 (gli anni secolari sono divisibili per 100 e anche per 400 quindi) 
 
 Per risolvere l'esercizio uso OR (||) per verificare o una condizione o l'altra, in quanto la verifica avviene su una delle due, l'anno quindi o è bisestile, o non lo è! */

 $anno = 1969;
 
 if (($anno % 4 === 0 && $anno % 100 !==0) ||  ($anno % 400 === 0)) {
    echo "L'Anno $anno è bisestile.\n";
 } else {
    echo "L'anno $anno non è bisestile.\n";
 } 
 echo "\n";  
 
 /* 3. determina se una persona può guidare un'auto in base all'età e alla presenza di una patente. 
 (attenzione a 0 e 1 valori booleani dove a true (0) e false (1) sono assegnati 0 e 1 come valore.) */

$eta = 19;
$patente = 0;

if($eta > 18 && $patente == 0) {
    echo "Puoi guidare l'auto, in quanto hai la patente e l'età adeguata.\n";
} elseif($eta < 18 && $patente ==1) {
    echo "NON Puoi guidare l'auto senza patente, hai meno di $eta\n";
} elseif($eta < 18 && $patente ==0) {
    echo "NON Puoi guidare l'auto, in quanto NON hai l'età per conseguire la patente B.\n";
} else {
    echo "Devi conseguire la patente B per guidare un'auto!\n";
}
echo "\n";  

//****//



?>


