<?php
require 'config.php'; // Подключение файла конфигурации

// Если сессия 'user_id' не установлена, перенаправляем на страницу входа
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// В противном случае, выводим контент для залогиненного пользователя
?>
<html>
<!-- Структура HTML для панели администратора -->
</html>