<?php

// FUNZIONI
 // una funzione è una porzione di codice che può essere eseguita più volte all'interno di un programma
 // di solito restituiscono un valore o mostrano qualcosa all'utente
 // Le funzioni si dividono principalemte in due tipo : Built-in e User functions

 // Definire una funzione
 // 1. Dichiarazione della funzione

//  function nomeFunzione() {
     // Istruzioni che deve eseguire la mia funzione

//  } 

 // 2. Invocazione di una funzione
//  nomeFunzione();

// dichiarazionw

// function saluta(){
//     echo "Ciao a tutti! \n";
// }

// invocazione
// saluta();

 // Voglio creare una funziona che mi somma due numeri

//  function somma($num1, $num2){ // Parametri formali
//     echo $num1 + $num2;
//  }

// somma(10, 20); // Parametri reali

// SOTTRAZIONE

// function sottrazione($num1, $num2){  
//     echo $num1 - $num2;
// }

// sottrazione(10, 5); // hanno valore posizionale


// SCOPE => la visibilità di una variabile all'interno del nostro codice

// $x = 10; 

// const X = 5; // la costante ha scope globale

// function somma($y){
//     // SCOPE LOCALE DI PHP
//     $y = 20;
//     echo $y + $y;
// }

// somma($x);
//-------------------------------------------
// $x = 4;
// $y = 6;

// function somma($num1, $num2){ // passaggio per valore
    

//     echo $num1 + $num2 . "\n"; // stampa 10

//     $num1++; // 5
//     $num2++; // 7


// }

// somma($x, $y); 

// echo $x . " " . $y; // 4 6

// --------------------------------------------
// $x = 4;
// $y = 6;

// function somma(&$num1, &$num2){ // passaggio per riferimento
    

//     echo $num1 + $num2 . "\n"; // stampa 10

//     $num1++; // 5
//     $num2++; // 7


// }

// somma($x, $y); 

// echo $x . " " . $y; // 5 7


// --------------------------------------------

// $x = 10;
// $y = 40;


// function somma($num1, $num2 = 5){ // parametro di default

//     echo $num1 + $num2;
// }

// somma($x, $y); // 50
// somma($x); // 15


// --------------------------------------------


// function somma(...$numbers){ // SPLAT OPERATOR 

//     // var_dump($numbers);
//     // $somma = 0; // Accumulatore
//     // foreach($numbers as $number){
//     //     $somma += $number;
//     // }
//     // echo $somma;

//     // $somma = 0; // Accumulatore
//     // for ($i = 0; $i < count($numbers); $i++){
//     //     $somma += $numbers[$i];
//     // }

//     return $somma; // return mi permette di restituire un valore

    
    
// }

// $risultato = somma(10, 20, 30, 40, 50, 60, 70);

// echo $risultato / 100;









?>