# php-strong-password-generator
## Oggi creeremo una pagina in grado di generare una password per gli utenti.
- L'utente potrà scegliere la lunghezza password e ricevere in un alert una password con il numero di caratteri casuali da lui richiesto!
- Lo screen allegato è un riferimento, ma potete variare la grafica.
### Milestone 1:
    Creare un form che invii in GET la lunghezza della password.
    Una nostra funzione utilizzerà questo dato per generare una password casuale
    (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
    Scriviamo tutto (logica e layout) in un unico file index.php
### Milestone 2: 
    Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php
    che includeremo poi nella pagina principale
### Milestone 3: 
    Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
### Milestone 4 `BONUS`: 
    Gestire ulteriori parametri per la password:
    permettere o meno la ripetizione dello stesso carattere
    Scegliere il set di caratteri tra numeri, lettere, simboli o qualsiasi combinazione di essi (anche tutti, ma almeno uno)
### Milestone 5 `BONUS`: 
    Aggiungere la validazione