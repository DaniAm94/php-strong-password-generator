<?php

// Array di lettere sia maiuscole che minuscole
$letters = array_merge(range('a','z'), range('A','Z'));
// Array di numeri da 0 a 9
$numbers= range(0,9);
// Array di simboli scritti da me ç_ç (più o meno tutti)
$symbols = ['.',',',';',':','!','?','-','<','>','/','*','+','=','%','&','$','£','#','@','€'];
if($has_letters){
    if($has_numbers){
        if($has_symbols){
            // Tutti e 3 inclusi
            $characters= array_merge($letters, $numbers, $symbols);
            
        }else{
            // Lettere e numeri
            $characters= array_merge($letters, $numbers);
        }
    }else {
        if($has_symbols){
            // Lettere e simboli
            $characters= array_merge($letters, $symbols);
            
        }else{
            // Lettere
            $characters= $letters;
        }
    }
} else{
    if($has_numbers){
        if($has_symbols){
            // Numeri e simboli
            $characters= array_merge( $numbers, $symbols);
            
        }else{
            // Numeri
            $characters= $numbers;
        }
    }else {
        if($has_symbols){
            // Simboli
            $characters= $symbols;
            
        }else{
            // Nessuno
            $characters=[];
        }
    }
}

// Calcolo il numero totale di caratteri
$num_of_characters= count($characters);