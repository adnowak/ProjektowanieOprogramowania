<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Menu page">
    <meta name="keywords" content="html, web, programming, menu, root, main, control, room, control_room">
    <link rel="stylesheet" href="style.php" type="text/css" />
    <title>Dodawanie sprawy</title>
</head>

<body id="menubody">
    <header>
        <h1>
            Dodawanie sprawy
        </h1>
    </header>
    <a class="back2" href="index.php?page=mainMenu">Powrót</a>
    <form method="POST" action="index.php" style="margin: auto; width: 80%; height: 80%;">
        <div style="float: left; width: 70%">
            <input id="content" type="text" placeholder="treść" name="content"/><br/>
            <div style="width: 20%; margin-left: 5%; padding: 2%;">
                <input id="male" type="radio" name="gender" value="male" style="width: 40%; float: left;"> <label for="male" style="width: 40%;">Mężczyzna</label><br/>
                <input id="female" type="radio" name="gender" value="female" style="width: 40%;  float: left;"> <label for="female" style="width: 40%; clear: both;">Kobieta</label><br/>
            </div>
            <input id="birthDate" type="date" placeholder="dataUr"/><br/>
            <input id="birthPlace" type="text" placeholder="miejsce urodzenia"/><br/>
            <input id="address" type="text" placeholder="adres"/><br/>
            <input id="citizenship" type="text" placeholder="obywatelstwo"/><br/>
            <input id="ancestorsData" type="text" placeholder="dane przodków"/><br/>
            <input id="documentId" type="text" placeholder="dokument"/><br/>
        </div>
        <input type="hidden" name="page" value="addACase" />
        <div style="float: right; width: 20%; text-align: center;">
            <img src="img\zdjecie.png" style="max-width: 100%;" alt="Nic"/>
            <input id="picture" type="hidden" placeholder="zdjecie"/><br/><br/><br/><br/>
            <a class="buttonA" href="index.php?page=addACase">Wybierz zdjęcie</a>
            <br/><br/><br/>
            <a class="buttonA" href="index.php?page=addACase">Kasuj wszystko</a><br/><br/>
            <br/><br/>
            <input type="submit" value="Dodaj" style="margin: 0;"/><br/>
        </div>
        <div style="clear: both;"></div>
    </form>
</body>

</html>