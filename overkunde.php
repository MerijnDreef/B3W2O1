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
        <br>
        <p class="textResult">Er zijn veel mensen die niet kunnen <?=$_SESSION['vraag1']?>. Neem nou <?=$_SESSION['vraag2']?>. Zelfs met de hulp van een <?=$_SESSION['vraag4']?> of zelfs <?=$_SESSION['vraag3']?> kan <?=$_SESSION['vraag2']?> niet <?=$_SESSION['vraag1']?>. Daar heeft niet te maken met een gebrek aan <?=$_SESSION['vraag5']?>, maar met een te veel aan <?=$_SESSION['vraag6']?>. Te veel <?=$_SESSION['vraag6']?> leidt tot <?=$_SESSION['vraag7']?> en dat is niet goed als je wilt <?=$_SESSION['vraag1']?>. Helaas voor <?=$_SESSION['vraag2']?>.</p><br>
    </div>
    <p id="footer">Deze website is gemaakt door &copy; Merijn Dreef, 2020</p>
</body>
</html>