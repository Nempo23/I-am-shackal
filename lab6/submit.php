<?php
// Параметри для збереження файлу
$directory = "survey"; // Папка для збереження
if (!is_dir($directory)) {
    mkdir($directory); // Створення папки, якщо вона не існує
}

// Збір даних з форми
$name = $_POST['name'];
$email = $_POST['email'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];

// Створення унікального імені файлу
$date = date("Y-m-d_H-i-s");
$filename = $directory . "/survey_$date.txt"; // Назва файлу з датою та часом

// Форматування даних для запису
$content = "Ім'я: $name\n";
$content .= "Email: $email\n";
$content .= "Улюблена мова програмування: $question1\n";
$content .= "Частота програмування: $question2\n";
$content .= "Улюблене хобі: $question3\n";
$content .= "Дата і час заповнення: $date\n";

// Запис у файл
file_put_contents($filename, $content);

// Виведення результатів
echo "<h2>Дякуємо за заповнення анкети!</h2>";
echo "<p>Дата і час заповнення: $date</p>";
