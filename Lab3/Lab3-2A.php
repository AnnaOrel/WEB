<?php
    $text = $_POST['textArea'];
    echo "Количество слов - " . str_word_count($text) . "<br>Количество символов - " . strlen($text);
?>


