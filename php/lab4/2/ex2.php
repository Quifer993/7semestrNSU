<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Задание №2</title>
</head>

<body>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
        <table>
            <tr>
                <td>Имя:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Город:</td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>Адрес:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Дата рождения:</td>
                <td><input type="date" name="birthday"></td>
            </tr>
            <tr>
                <td>E-Mail:</td>
                <td><input type="text" name="mail" required></td>
            </tr>
        </table>
        <button type="submit">Добавить</button>
        <button type="reset">Очистить</button>
    </form>
    
    <?php
        if (isset($_POST['name']) && isset($_POST['mail'])) {
            $name = "'" . $_POST['name'] . "'";
            $mail = "'" . $_POST['mail'] . "'";

            if (!isset($_POST['city'])  || empty($_POST['city'])) {
                $city = "NULL";
            }else{
                $city = "'" . $_POST['city'] . "'";
            }

            if (!isset($_POST['address'])  || empty($_POST['address'])) {
                $address = "NULL";
            }else{
                $address = "'" . $_POST['address'] . "'";
            }

            if (!isset($_POST['birthday']) || empty($_POST['birthday'])) {
                $birthday = "NULL";
            }else{
                $birthday = "'" . $_POST['birthday'] . "'";
            }

            include("init.inc");
            $queryInsert = "INSERT INTO `notebook` (`name`, `city`, `address`, `birthday`, `mail`) VALUES ($name, $city, $address, $birthday, $mail)";
            

            $resultInsert = mysqli_query($conn, $queryInsert);

            if(!$resultInsert)
                die("<p>Не удалось добавить запись в таблицу notebook</p>" . mysqli_error($conn));
        }


    ?>
</body>

</html>