<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Menu page">
    <meta name="keywords" content="html, web, programming, menu, root, main, control, room, control_room">
    <link rel="stylesheet" href="style.php" type="text/css" />
    <link rel="stylesheet" href="style.php" type="text/css" />
    <link rel="stylesheet" href="<?=$this->asset('css/style.php') ?>" type="text/css" />

    <title>Dodawanie sprawy</title>
</head>

<body id="menubody">
    <header>
        <h1>
            Dodawanie sprawy
        </h1>
    </header>
    <a class="back2" href="/">Powrót</a>
    <form method="POST" action="/savecase/" style="margin: auto; width: 80%; height: 80%;">
        <div style="float: left; width: 70%">
            <input id="content" type="text" placeholder="treść" name="content"/><br/>
            <div style="width: 20%; margin-left: 5%; padding: 2%;">
                <input id="male" type="radio" name="gender" value="Mężczyzna" style="width: 40%; float: left;"> <label for="male" style="width: 40%;">Mężczyzna</label><br/>
                <input id="female" type="radio" name="gender" value="Kobieta" style="width: 40%;  float: left;"> <label for="female" style="width: 40%; clear: both;">Kobieta</label><br/>
            </div>
            <input id="birthDate" name="birthDate" type="date" placeholder="dataUr"/><br/>
            <input id="birthPlace" name="birthPlace" type="text" placeholder="miejsce urodzenia"/><br/>
            <input id="address" name="address" type="text" placeholder="adres"/><br/>
            <input id="citizenship" name="citizenship" type="text" placeholder="obywatelstwo"/><br/>
            <input id="ancestorsInfo" name="ancestorsInfo" type="text" placeholder="dane przodków"/><br/>
            <input id="documentNumber" name="documentNumber" type="text" placeholder="numer dokumentu identyfikacyjnego"/><br/>
            <input id="name" name="name" type="text" placeholder="imię"/><br/>
            <input id="surname" name="surname" type="text" placeholder="nazwisko"/><br/>
            <p class="selectLabel">Document type:</p>
            <select name="Id">
                <?=$this->getDocumentTypes()?>
            </select>
        </div>
        <input type="hidden" name="page" value="addACase" />
        <div style="float: right; width: 20%; text-align: center;">
            <img src="<?=$this->asset('img/zdjecie.png') ?>" style="max-width: 100%;" alt="Nic"/>
            <input type="file" id="picture" name="picture" value="Wybierz Zdjęcie" ><br/><br/><br/><br/>
            <input type="hidden" name="page" value="addACase" />
            <br/>
            <a class="buttonA" href="/addcase/">Kasuj wszystko</a><br/><br/>
            <br/><br/>
            <input type="submit" value="Dodaj" style="margin: 0;"/><br/>
        </div>
        <div style="clear: both;"></div>
    </form>
    <?=$this->showResult()?>
</body>

</html>