<!-- 
Snack 2

Snack 3

Snack 4

Snack Bonus

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
        "Punteggio2" => "82",
    ],
    [
        "squadra1" => "Germania",
        "squadra2" => "Italia",
        "Punteggio1" => "75",
        "Punteggio2" => "84",
    ]
    ];

    echo('<pre>');
    var_dump($partitaBasket);
    echo('</pre>');

    for($i=0; $i < count($partitaBasket); $i++) {
        
        $partita = $partitaBasket[$i];
    echo($partita["squadra1"] . '-' . $partita["squadra2"] . '|' . $partita["Punteggio1"] . '-' . $partita["Punteggio2"]. "<br>");

    }

?>



<hr>

<h1  style="color: red">Snack 2</h1>
<h3 style="color: purple">Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato”</h3>

<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if (strlen($name) > 3 && strpos($mail,'@')==true && strpos($mail,'.')==true && is_numeric($age)){
    echo('<h4>ACCESSO RIUSCITO</h4>');
} else {
    echo('<h4>ACCESSO NON RIUSCITO</h4>');
}
?>

<hr>

<h1  style="color: red">Snack 3</h1>
<h3 style="color: purple">Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta</h3>

<?php

$array = [];

while (count($array) < 15 ) {
    $random = rand(1,100);

    if(!in_array($random, $array)){
        $array[] = $random;
    }
}
echo('<pre>');
var_dump($array);
echo('</pre>');

?>

<hr>

<h1  style="color: red">Snack 4</h1>
<h3 style="color: purple">Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.</h3>

<?php

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam magni provident nemo libero aspernatur debitis 
ratione rem maxime excepturi nesciunt, vel, eveniet cum quaerat accusantium facere quas commodi rerum null.
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas architecto quaerat nobis sint minima neque pariatur sunt tempora cumque 
quisquam nesciunt explicabo excepturi voluptatum incidunt aspernatur porro, aliquid optio consectetur!";

$succhia = explode(".", $paragrafo); 

for($i=0; $i < count($succhia); $i++) {
    echo ("<p>" . $succhia[$i] . "</p>");
}

?>

<hr>

<h1  style="color: red">Bonus Snack</h1>
<h3 style="color: purple">Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.</h3>

<?php
?>

da fare....
