<?php
    include("init.inc");

    $insertQueries = [
        "INSERT INTO notebook (name, city, address, birthday, mail) VALUES ('Иванов', 'Кемерово', 'ул. Ленина, 51', '1990-05-14', 'ivanov@ggg.com')",
        "INSERT INTO notebook (name, city, address, birthday, mail) VALUES ('Петров', 'Санкт-Петербург', 'пр. Невский, 42', '1974-08-20', 'petrov@ggg.com')",
        "INSERT INTO notebook (name, city, address, birthday, mail) VALUES ('Сидоров', 'Екатеринбург', 'ул. Пражская, 102', '1985-01-12', 'sidorov@ggg.com')"
    ];

    foreach ($insertQueries as $query) {
        if ($conn->query($query) === TRUE) {
            echo "Запись успешно добавлена.<br>";
        } else {
            echo "Ошибка при добавлении записи: " . $conn->error . "<br>";
        }
    }

    $conn->close();
?>
