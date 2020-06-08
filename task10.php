<?php
function conv_to_Kb($name_file, $word, $reword) {
    if (file_exists($name_file)) {
        $file = fopen($name_file, 'r');
        if ($file) {
            $text = file($name_file);
            fclose($file);
            $file = fopen($name_file, 'w');
            for($i = 0; $i < sizeof($text); $i++) {
                fwrite($file, preg_replace($word, $reword,  $text[$i]));
            }
        }
        else echo "Ошибка при открытии файла";
        fclose($file);
    } 
    else {
        echo "Файл $filename не существует";
    }
}

$file_name = 'test.txt';
$word = '/(?i)\bthe\b/';
$reword = 'THE';
conv_to_Kb($file_name, $word, $reword)

?>