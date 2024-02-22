<?php

function set_characters($allowed_characters){
// Array di lettere sia maiuscole che minuscole
$letters = array_merge(range('a','z'), range('A','Z'));
// Array di numeri da 0 a 9
$numbers= range(0,9);
// Array di simboli scritti da me ç_ç (più o meno tutti)
$symbols = ['.',',',';',':','!','?','-','/','*','+','=','%','&','$','£','#','@','€'];

$characters=[];
if(in_array('L',$allowed_characters)) $characters=array_merge($characters, $letters);
if(in_array('N',$allowed_characters)) $characters=array_merge($characters, $numbers);
if(in_array('S',$allowed_characters)) $characters=array_merge($characters, $symbols);
return $characters;
}


/* 
Funzione che restituisce una password
argomenti: lunghezza password, array di caratteri , numero di caratteri, flag per i duplicati    
*/
function get_password ($pass_length, $no_dup, $allowed_characters){
    // Se non sono stati selezioni caratteri
    if(empty($allowed_characters)) return 'Devi selezionare almeno un set di caratteri!';
    
    $min_length= 5;

    // Genero il set di caratteri
    $characters= set_characters($allowed_characters);
    // Numero di caratteri utilizzabili
    $total_characters= count($characters);

    if(!$pass_length) return 'Non è stata inserita alcuna lunghezza';
    if(!is_numeric($pass_length) || $pass_length < 0) return 'La lunghezza inserita non è valida';
    if($pass_length < $min_length) return "La lunghezza della password non può essere infieriore a $min_length";
    if($no_dup && $pass_length>$total_characters) return "Hai disattivato la ripetizione di caratteri.<br> La lunghezza della password non può superare i $total_characters caratteri di lunghezza!";
    
    $password=[];
    while(count($password) < $pass_length){
        $rand_character = $characters[rand(0,$total_characters-1)];
        if(!$no_dup || !in_array($rand_character, $password)){
                $password[] = $rand_character;
        }
    }
    session_start();
    $_SESSION['password']= implode('',$password);


    return false;
}