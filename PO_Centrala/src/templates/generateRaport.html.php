<!DOCTYPE html>
<html lang="pl">

<head>
    <link rel="stylesheet" href="<?= $this->asset('css/main.css') ?>" />
    <link rel="stylesheet" href="<?= $this->asset('css/raport.css') ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div id="raportTitle"> Raport </div>
    <div id="timestamp"> <?= $this->currentDateTime() ?> </div>
    <br>
    </div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa placówki</th>
                <th>Ilość spraw</th>
            </tr>
        </thead>
        <tbody>
            <!-- get units from view and insert table rows -->
            <?= $this->createTable() ?>
        </tbody>
    </table>



</body>

</html>