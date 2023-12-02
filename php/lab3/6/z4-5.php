<?php
if(@$_POST['site'] != "") {
    header("Location: https://" . $_POST['site']);
    exit;
} else {
    $sites = array(
        "www.yandex.ru", 
        "www.rambler.ru", 
        "www.google.com", 
        "www.yahoo.com", 
        "www.altavista.com"
    );
    $array_size = count($sites);
    ?>

    <html>
    <head>
        <title> z4-5.php </title>
    </head>

    <body>

    <form action = "<?php print $_SERVER['PHP_SELF'] ?>" method="post">
        <select name="site">
            <option value = "">Поисковые системы

    
    <?php
    $i = 0;
    while($i < $array_size) {
        print "<option value = \"$sites[$i]\">$sites[$i]";
        $i++;
    }
    ?>

    </select>
    <input type="submit" value="Перейти">
    </form>

    </body>
    </html>

    <?php
}
?>
