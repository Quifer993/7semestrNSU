<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Задание №3</title>
</head>
<body>
    <table cellpadding=0 border="1" style="border-collapse: collapse; border: 1px green">
        <tr>
            <td>Имя</td>
            <td>Город</td>
            <td>Адрес</td>
            <td>Дата рождения</td>
            <td>E-Mail</td>
        </tr>
        <?php
            include("init.inc");

            $querySelect = "SELECT name, city, address, birthday, mail FROM `notebook`";
            
            $resultSelect = mysqli_query($conn, $querySelect);

            if(!$resultSelect)
                die("<p>Не удалось выбрать записи из таблицы notebook</p>" . mysqli_error($conn));


            foreach ($resultSelect as $row) {
                print "<tr>";
                foreach ($row as $column){
                    print "<td>$column</td>";
                }
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>