<!-- 
Snack 2

Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
Snack Bonus
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
Se concludete e vi avanza tempo potete curare maggiormente la UI oppure migliorare il codice PHP con controlli sui dati :faccia_leggermente_sorridente: -->

<!-- Snack 1

Olimpia Milano - Cantù | 55-60 -->

<h1  style="color: red">Snack 1</h1>
<h3 style="color: purple">Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.</h3>
<?php
$partitaBasket = [
    [
        "squadra1" => "Italia",
        "squadra2" => "Germania",
        "Punteggio1" => "92",
        "punteggio2" => "82",
    ],
    [
        "squadra1" => "Germania",
        "squadra2" => "Italia",
        "Punteggio1" => "75",
        "punteggio2" => "84",
    ]
    ];

    echo('<pre>');
    var_dump($partitaBasket);
    echo('</pre>');
?>

<h1  style="color: red">Snack 2</h1>
<h3 style="color: purple">Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato”</h3>
<?php
$partitaBasket = [
    [
        "squadra1" => "Italia",
        "squadra2" => "Germania",
        "Punteggio1" => "92",
        "punteggio2" => "82",
    ],
    [
        "squadra1" => "Germania",
        "squadra2" => "Italia",
        "Punteggio1" => "75",
        "punteggio2" => "84",
    ]
    ];

    echo('<pre>');
    var_dump($partitaBasket);
    echo('</pre>');
?>


