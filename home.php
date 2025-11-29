<?php
include 'header.html';

if(isset($_POST['fio'])) {
    
    echo '<div class="main-content">';
    echo '<div class="response-container">';
    echo '<h2>Ответ на ваше обращение</h2>';
    
    echo '<div class="response-data">';
    
    // Выводим ФИО
    echo '<div class="data-field"><strong>ФИО:</strong> ' . $_POST['fio'] . '</div>';
    
    // Выводим текст обращения в зависимости от типа
    echo '<div class="data-field">';
    if ($_POST['topic'] == 'Предложение'){
        echo '<strong>Спасибо за ваше предложение:</strong><br>';
    } else {
        echo '<strong>Мы рассмотрим Вашу жалобу:</strong><br>';
    }
    echo nl2br($_POST['message']);
    echo '</div>';
    
    // Выводим информацию о файле
    echo '<div class="data-field">';
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
        echo '<strong>Прикрепленный файл:</strong> ' . $_FILES['attachment']['name'];
    } else {
        echo '<strong>Прикрепленный файл:</strong> Файл не был загружен';
    }
    echo '</div>';
    
    echo '</div>';
    
    // Кнопка "Заполнить снова"
    $fio = urlencode($_POST['fio']);
    $email = urlencode($_POST['email'] ?? '');
    $source = urlencode($_POST['source'] ?? '');
    
    echo '<a class="back-btn" href="index.php?fio=' . $fio . '&email=' . $email . '&source=' . $source . '">Заполнить снова</a>';
    
    echo '</div>'; 
    echo '</div>';
    
} else {
    echo '<div class="main-content">';
    echo '<p>Форма не была отправлена</p>';
    echo '</div>';
}
?>

    <!-- ФУТЕР -->
    <div class="footer">
        <p>&copy; 2025 Мой Киноблог</p>
        <p>Сформировано <?php 
          date_default_timezone_set('Europe/Moscow');
          echo date('d.m.Y \в H-i:s'); ?>
        </p>
    </div>

</body>
</html>