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
        <h1 id="keuzeh1">Er heerst paniek...</h1>
       <p>Er heerst een paniek in het koninkrijk<?= $_POST['vraag3']?>. Koning <?= $_POST['vraag6']?> is ten einde raad en als koning <?=$_POST['vraag6']?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?=$_POST['vraag2']?>.</p><br>
       <p>"<?=$_POST['vraag2']?>! Het is een ramp! Het is een schande!"</p><br>
       <p>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p><br>
       <p>"Mijn <?=$_POST['vraag1']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$_POST['vraag5']?> voor hem gekocht!"</p><br>
       <p>"Majesteit, uw <?=$_POST['vraag1']?> komt vast vanzelf weer terug?"</p><br>
       <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$_POST['vraag8']?> leren?"</p><br>
       <p>"Maar Sire, daar kunt u toch uw <?=$_POST['vraag7']?> voor gebruiken."</p><br>
       <p>"<?=$_POST['vraag2']?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p><br>
       <p>"Mij vervelen, Sire"</p>
    </div>
    <p id="footer">Deze website is gemaakt door &copy; Merijn Dreef, 2020</p>
</body>
</html>