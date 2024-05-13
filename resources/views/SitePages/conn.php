<?php
// Подключение к базе данных (замени данные на свои)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "disciplines";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Запрос к базе данных для выборки данных из таблицы sabaqtar
$sql = "SELECT * FROM sabaqtar";
$result = $conn->query($sql);

// Проверка наличия данных и их формирование в формат JSON
if ($result->num_rows > 0) {
    $output = array();
    while ($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
    echo json_encode($output);
} else {
    echo "Нет данных";
}

$conn->close(); // Закрытие соединения с базой данных
?>
