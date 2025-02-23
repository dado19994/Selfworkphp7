<?php


// Regole
// 1. La password deve essere lunga almeno 8 caratteri
// 2. La password deve contenere almeno un numero
// 3. La password deve contenere almeno un carattere Maiuscolo
// 4. La password deve contenere almeno un carattere speciale

// readline() => permette di leggere una riga da tastiera input dell'utente

$password = readline("Inserisci la tua password: ");

echo "Password inserita:" . $password . "\n";

// 1.

// if(strlen($password) < 8){
//     echo "La password deve essere lunga almeno 8 caratteri";
//     exit;
// }else{
//     echo "Password corretta";
// }

// 2.

// for($i = 0; $i < strlen($password); $i++){
//     if(is_numeric($password[$i])){
//         echo "La password contiene almeno un numero";
//         break; // mi permette di uscire dalle condizioni e cicli
//     }
// }

// 3.

// for($i = 0; $i < strlen($password); $i++){
//     if(ctype_upper($password[$i])){
//         echo "La password contiene almeno un carattere maiuscolo";
//         break;
//     }
// }

// 4.

// $specialChars = ["!", "@", "#", "$"];

// for($i = 0; $i < strlen($password); $i++){
//     if(in_array($password[$i], $specialChars)){
//         echo "La password contiene almeno un carattere speciale";
//         break;
//     }
// }

// 1.
function checkLength($password){
    if(strlen($password) < 8){
        echo "La password deve essere lunga almeno 8 caratteri\n";
        return false;
    }else{
        echo "Password corretta";
        return true;
    }
}
// 2.
function checkNumber($password){
    for($i = 0; $i < strlen($password); $i++){
        if(is_numeric($password[$i])){
            echo "La password contiene almeno un numero\n";
            return true;
        }
    }
    echo "La password non contiene numeri\n";
    return false;
}

// 3.

function checkUppercase($password){
    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i])){
            echo "La password contiene almeno un carattere maiuscolo\n";
            return true;
        }
    }
    echo "La password non contiene caratteri maiuscoli\n";
    return false;
}

// 4.

const SPECIAL_CHARS = ["!", "@", "#", "$"];

function checkSpecialChars($password){

    for($i = 0; $i < strlen($password); $i++){
        if(in_array($password[$i], SPECIAL_CHARS)){
            echo "La password contiene almeno un carattere speciale\n";
            return true;
        }
    }
    echo "La password non contiene caratteri speciali\n";
    return false;
}

function checkPassword($password){
    $checkLength = checkLength($password); // single responsability
    $checkNumber = checkNumber($password);
    $checkUppercase = checkUppercase($password);
    $checkSpecialChars = checkSpecialChars($password);

    if($checkLength && $checkNumber && $checkUppercase && $checkSpecialChars){
        echo "Password corretta";
    }else{
        echo "Password non corretta";
    }
}

checkPassword($password);


?>