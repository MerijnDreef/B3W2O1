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
    <title>Onkunde</title>
</head>
<body>
<h1 id="logo">Mad Libs</h1>
    <ul class="menu">
        <li><a href="index.html">Er heerst paniek...</a></li>
        <li><a href="onkunde.html">Onkunde</a></li>
    </ul>
    <div class="backgroundForm">
        <h1 id="keuzeh1">Onkunde</h1>
        <p>Er zijn veel mensen die niet kunnen <?=$_POST['vraag1']?>. Neem nou <?=$_POST['vraag2']?>. Zelfs met de hulp van een <?=$_POST['vraag4']?> of zelfs <?=$_POST['vraag3']?> kan <?=$_POST['vraag2']?> niet <?=$_POST['vraag1']?>. Daar heeft niet te maken met een gebrek aan <?=$_POST['vraag5']?>, maar met een te veel aan <?=$_POST['vraag6']?>. Te veel <?=$_POST['vraag6']?> leidt tot <?=$_POST['vraag7']?> en dat is niet goed als je wilt <?=$_POST['vraag1']?>. Helaas voor <?=$_POST['vraag2']?>.</p>
    </div>
    <p id="footer">Deze website is gemaakt door &copy; Merijn Dreef, 2020</p>
</body>
</html>