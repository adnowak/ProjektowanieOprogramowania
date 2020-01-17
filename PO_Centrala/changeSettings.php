<?php
    if(!isset($_SESSION['logged'])||(!$_SESSION['logged']))
    {
        header('Location: index.php');
    }
?>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Menu page">
    <meta name="keywords" content="html, web, programming, menu, root, settings, control room">
    <link rel="stylesheet" href="menuStyle.php" type="text/css" />
    <title>Change settings</title>
</head>

<body id="menubody">
    <a class="back2" href='index.php?page=mainMenu'>Back</a>
    <header>
        <h1>Change settings</h1>
    </header>
    <div style="clear: both;"></div>
    <main>
        <h3 style="margin-bottom: 0px">Theme color:</h3>
        <section id="colors">
            <a href="index.php?page=changeSettings&color=4a2653">
                <div class="colorPicker" style="background-color: rgb(74, 38, 83);"></div>
            </a>
            <a href="index.php?page=changeSettings&color=000000">
                <div class="colorPicker" style="background-color: black;"></div>
            </a>
            <a href="index.php?page=changeSettings&color=3f773f">
                <div class="colorPicker" style="background-color: rgb(63, 119, 63);"></div>
            </a>
            <a href="index.php?page=changeSettings&color=16147d">
                <div class="colorPicker" style="background-color: rgb(22, 20, 125);"></div>
            </a>
            <a href="index.php?page=changeSettings&color=a87e00">
                <div class="colorPicker" style="background-color: rgb(168, 126, 0);"></div>
            </a>
            <a href="index.php?page=changeSettings&color=661832">
                <div class="colorPicker" style="background-color: rgb(102, 24, 50);"></div>
            </a>
            <div style="clear: both;"></div>
        </section>
    </main>
</body>

</html>