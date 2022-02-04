<?php

namespace owner\VKbot;
include 'src/TroublesMenu.php';
?>
<html>
<body>
<form action="Handler.php" formmethod="get">
    <input type="text" name="city" id="city" placeholder="Введите город" required>
    <input type="text" name="adress" placeholder="Введите адресс" required>
    <input type="text" name="name" placeholder="Введите своё ФИО">
    <input type="text" name="e-mail" placeholder="Введите e-mail" required>
    <p>
    <textarea rows="10" cols="45" name="text" value="Подробное описание проблемы"></textarea>
    <input type="file" enctype="multipart/form-data" name="file" value="Загрузить файл!">
    </p>
    <p>  <input type="submit" name="complain" value="Пожаловаться"> </p>
</form>
</body>
</html>
