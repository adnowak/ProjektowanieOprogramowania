<!DOCTYPE html>
<html lang="pl">

<head>
    <link rel="stylesheet" href="<?= $this->asset('css/main.css') ?>" />
    <link rel="stylesheet" href="<?= $this->asset('css/chooseRaport.css') ?>" />
    <link rel="stylesheet" href="<?=$this->asset('css/style.php')?>" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header>
        <h1>
            Generowanie raportu
        </h1>
    </header>
    <a class="back2" href="/">Powrót</a>
    <br>
    <div id="container">
        Interwał czasowy
        <br>
        <select id="select" name="interval" style="width: 300px;" form="raportForm">
            <!-- add available time intervals -->
            <?= $this->availableIntervals() ?>
        </select>
    </div>
    <br>
    </div>
    <form id="raportForm">
        <div class='wrapper'>
            <input id="submitBtn" type="submit" value="Generuj" formaction="/displayraport/">
        </div>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nazwa placówki</th>
                    <th>Wybierz</th>
                </tr>
            </thead>
            <tbody>
                <!-- get units from view and insert table rows -->
                <?= $this->populateTable() ?>
            </tbody>
        </table>

    </form>


</body>

</html>