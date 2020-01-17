<!DOCTYPE html>
<html>

<head>
    <title>Generate a raport</title>
    <link rel="stylesheet" href="style.php" type="text/css" />
</head>

<body>
    <a class="back2" href="index.php?page=mainMenu">Back</a>

    <div class="formWrapper">
        <form method="POST" action="index.php">
            Przedzial czasowy:<input type="text" name="P"/>
            Jednostka do porównania:<input type="text" name="J"/>
            <input type="hidden" name="page" value="generateARaport" />
            <input class="submit" type="submit" name="submit" value="Generuj"><br>
        </form>
    </div>
</body>

</html>
