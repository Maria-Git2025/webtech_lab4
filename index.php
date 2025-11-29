<?php
include 'header.html';

if(isset($_GET['fio'])){
    $fio = $_GET['fio'];
    $email = $_GET['email'];
    $source = $_GET['source'];
} else {
    $fio = '';
    $email = '';
    $source = '';
}
?>

<div class="main-content">
    <div class="form-container">
        <h2>Форма обратной связи</h2>
        
        <form action="home.php" method="post" enctype="multipart/form-data">
            
            <!-- Группа ФИО -->
            <div class="form-group">
                <label for="fio">ФИО:</label>
                <input type="text" id="fio" name="fio" required value="<?php echo $fio; ?>">
            </div>

            <!-- Группа Email -->
            <div class="form-group">
                <label for="email">Ваш e-mail:</label>
                <input type="email" id="email" name="email" placeholder="example@mail.com" value="<?php echo $email; ?>">
            </div>

            <!-- Группа Сообщение -->
            <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <!-- Группа Селектор (Тема обращения) -->
            <div class="form-group">
                <label for="topic">Тема обращения:</label>
                <select id="topic" name="topic">
                    <option value="Предложение">Предложение</option>
                    <option value="Жалоба">Жалоба</option>
                </select>
            </div>

            <!-- Группа Радио-кнопки -->
            <div class="form-group">
                <label>Как узнали о нас:</label>
                <div class="radio-group-container">
                    <div class="radio-group">
                        <input type="radio" id="source_internet" name="source" value="Реклама из интернета"
                            <?php echo ($source == 'Реклама из интернета') ? 'checked' : ''; ?>>
                        <label for="source_internet">Реклама из интернета</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" id="source_friends" name="source" value="Рассказали друзья"
                            <?php echo ($source == 'Рассказали друзья') ? 'checked' : ''; ?>>
                        <label for="source_friends">Рассказали друзья</label>
                    </div>
                </div>
            </div>

            <!-- Группа Флажок (Согласие) -->
            <div class="form-group">
                <div class="checkbox-group">
                    <input type="checkbox" id="consent" name="consent" value="yes">
                    <label for="consent">Даю согласие на обработку данных</label>
                </div>
            </div>

            <!-- Группа Выбор файла -->
            <div class="form-group">
                <label for="attachment">Выбор файла:</label>
                <input type="file" id="attachment" name="attachment">
            </div>

            <!-- Кнопка отправки -->
            <button type="submit" class="submit-btn">Отправить</button>
        </form>
    </div>
</div>

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