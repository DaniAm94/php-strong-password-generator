<?php

// Array di lettere maiuscole
$uppercase_letters = range('A','Z');
// Array di lettere minuscole
$lowercase_letters = range('a','z');
// Array di numeri da 0 a 9
$numbers= range(0,9);
// Array di simboli scritti da me ç_ç (più o meno tutti)
$symbols = ['.',',',';',':','!','?','-','<','>','/','*','+','=','%','&','$','£','#','@','€'];
// Unisco tutti gli array di caratteri
$characters= array_merge($uppercase_letters, $lowercase_letters, $numbers, $symbols);
// Calcolo il numero totale di caratteri
$num_of_characters= count($characters);