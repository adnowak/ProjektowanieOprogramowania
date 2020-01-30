<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Menu page">
    <meta name="keywords" content="html, web, programming, menu, root, main, control, room, control_room">
    <link rel="stylesheet" href="style.php" type="text/css" />
    <link rel="stylesheet" href="style.php" type="text/css" />
    <link rel="stylesheet" href="<?= $this->asset('css/style.php') ?>" type="text/css" />

    <title>Wydanie decyzji</title>
</head>

<body id="menubody">
    <header>
        <h1>
            Wydanie decyzji
        </h1>
    </header>
    <a class="back2" href="/">Powrót</a>
    <div style="float: left; width:70%">
        Identyfikator globalny: <?= $this->case['IdGlobal'] ? $this->case['IdGlobal'] : "brak" ?>
        <br>
        Identyfikator lokalny: <?= $this->case['IdLocal'] ? $this->case['IdLocal'] : "brak" ?>
        <br>
        Pracownik: <?= $this->worker['Name'] ?> <?= $this->worker['Surname'] ?>
        <br>
        <span style="text-align: left">Treść sprawy:</span>
        <br>
        <TEXTAREA Name="content" ROWS="10" COLS="100" disabled style="font-size: medium"><?= $this->case['Content'] ?></TEXTAREA>
        <br>
        <form id="decisionForm" method='POST' action="/savedecision/">
        <br>
        <select id="select" name="decisionType" style="width: 300px; text-align:center" form="decisionForm">
            <!-- add available time intervals -->
            <?=$this->decisionTypes() ?>
        </select>
        <input id="content" type="text" placeholder="treść" name="content" /><br/>
        <input type="hidden" name="worker" value="<?=$this->worker['Id']?>">
        <input type="hidden" name="caseid" value="<?=$this->case['Id']?>">
        <input type="submit" value="Dodaj"/><br/>

        </form>

    </div>
    
    <div style="float: right; width: 20%; text-align: center;">
        <span style="font-size:x-large">Wnioskodawca</span>
        <img src="<?= $this->asset('img/zdjecie.png') ?>" style="max-width: 100%;" alt="Nic" />
        <input type="hidden" name="page" value="addACase" />
        Imie: <?= $this->document['Name'] ?>
        <br>
        Nazwisko <?= $this->document['Surname'] ?>
        <br>
        Typ dokumentu: <?= $this->documentType['Name'] ?>
        <br>
        Nr dokumentu: <?= $this->document['Number'] ?>
        <br />
        <br /><br />
    </div>
    <div style="clear: both;"></div>
</body>

</html>