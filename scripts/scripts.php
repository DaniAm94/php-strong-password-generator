<?php

require __DIR__.'/../data/data.php';


/* 
Funzione che restituisce una password
argomenti: lunghezza password, array di caratteri , numero di caratteri, flag per i duplicati    
*/
function get_password ($pass_length, $characters, $noc, $no_dup){
    if(empty($noc)){
        return 'Devi sceglire almeno un insieme di caratteri';
    }
    if($no_dup && $pass_length>$noc){
        return 'La lunghezza della password non può superare il numero di caratteri';
    } 
    $password=[];
    while(count($password) < $pass_length){
        $rand_character = $characters[rand(0,$noc-1)];
        if($no_dup){
            if(!in_array($rand_character, $password)){
                $password[] = $rand_character;
            }
        }else{
            $password[] = $rand_character;
        }
    }
    return implode('',$password);
}