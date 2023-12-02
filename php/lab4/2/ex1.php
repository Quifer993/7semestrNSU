<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Задание №1</title>
</head>
<body>
    <?php
        include("init.inc");
        $queryDropTable = "DROP TABLE IF EXISTS notebook";

        $resultDropTable = mysqli_query($conn, $queryDropTable);

        if(!$resultDropTable)
            die("<p>Нельзя уничтожить таблицу notebook</p>" . mysqli_error($conn));

        $queryCreateTable = "CREATE TABLE notebook (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(50) NOT NULL, city VARCHAR(50), address VARCHAR(50), birthday DATE, mail VARCHAR(50) NOT NULL)";

        $resultCreateTable = mysqli_query($conn, $queryCreateTable);

        if(!$resultCreateTable)
            die("<p>Нельзя создать таблицу notebook</p>" . mysqli_error($conn));

    ?>
</body>
</html>