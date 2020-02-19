<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="opdracht.css">
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <title>Er heerst paniek...?</title>
</head>
<body>
<h1 id="logo">Mad Libs</h1>
    <ul class="menu">
        <li><a href="index.html">Er heerst paniek...</a></li>
        <li><a href="onkunde.html">Onkunde</a></li>
    </ul>
    <div class="backgroundForm">
        <h1 id="keuzeh1">Er heerst paniek...</h1><br>
       <p class="textResult">Er heerst een paniek in het koninkrijk<?= $_SESSION['vraag3']?>. Koning <?= $_SESSION['vraag6']?> is ten einde raad en als koning <?=$_SESSION['vraag6']?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?=$_SESSION['vraag2']?>.</p><br>
       <p class="textResult">"<?=$_SESSION['vraag2']?>! Het is een ramp! Het is een schande!"</p><br>
       <p class="textResult">"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p><br>
       <p class="textResult">"Mijn <?=$_SESSION['vraag1']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$_SESSION['vraag5']?> voor hem gekocht!"</p><br>
       <p class="textResult">"Majesteit, uw <?=$_SESSION['vraag1']?> komt vast vanzelf weer terug?"</p><br>
       <p class="textResult">"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$_SESSION['vraag8']?> leren?"</p><br>
       <p class="textResult">"Maar Sire, daar kunt u toch uw <?=$_SESSION['vraag7']?> voor gebruiken."</p><br>
       <p class="textResult">"<?=$_SESSION['vraag2']?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p><br>
       <p class="textResult">"Mij vervelen, Sire"</p><br>
    </div>
    <p id="footer">Deze website is gemaakt door &copy; Merijn Dreef, 2020</p>
</body>
</html>