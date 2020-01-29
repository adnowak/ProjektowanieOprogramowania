<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Menu page">
    <meta name="keywords" content="html, web, programming, menu, root, main, control, room, control_room">
    <link rel="stylesheet" href="style.php" type="text/css" />
    <link rel="stylesheet" href="<?=$this->asset('css/style.php') ?>" type="text/css" />

    <title>All cases</title>
</head>

<body id="menubody">
    <header>
        <h1>
            Lista spraw
        </h1>
    </header>
    <a class="back2" href="/">Powrót</a>
    <table>
        <thead>
            <tr>
                <th>Id lokalny</th>
                <th>Treść</th>
                <th>Zdjęcie</th>
                <th>Czy usunięto</th>
                <th>Czy wysłano</th>
                <th>Płeć</th>
                <th>Data urodzenia</th>
                <th>Miejsce urodzenia</th>
                <th>Adres</th>
                <th>Obywatelstwo</th>
                <th>Dane przodków</th>
                <th>Id Dokumentu</th>
                <th>Wydaj decyzję</th>
                <th>Edytuj</th>
                <th>Usuń</th>
            </tr>
        </thead>
        <tbody>
            <?= $this->createTable() ?>
        </tbody>
</body>

</html>