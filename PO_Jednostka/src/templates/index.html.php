<head>
    <meta charset="utf-8">
    <meta name="description" content="Menu page">
    <meta name="keywords" content="html, web, programming, menu, root, main, control, room, control_room">
    <link rel="stylesheet" href="menuStyle.php" type="text/css" />
    <link rel="stylesheet" href="<?=$this->asset('css/main.css') ?>" />
    <link rel="stylesheet" href="<?=$this->asset('css/menustyle.php') ?>" type="text/css" />
    <title>Main page</title>
</head>

<body id="menubody">
    <header>
        <h1>
            Konsulat
        </h1>
    </header>
    <div style="clear: both;"></div>
    <main>
        <a href="#"><img src="<?=$this->asset('img/parametr.png')?>" /></a>
        <a href="/showcases"><img src="<?=$this->asset('img/raport.svg')?>" /></a>
        <a href="/addcase/"><img src="<?=$this->asset('img/dodanieTypu.png')?>" /></a>
    </main>
</body>

</html>