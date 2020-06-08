<?php
function count_word($name_file) {
    if (file_exists($name_file)) {
        $file = fopen($name_file, 'r');
        if ($file) {
            $text = file_get_contents($name_file);
            fclose($file);
            $arr = array();
            $vowels = array(".", '"', ",", "?", "!", ";", ":", "-", "+", "~", "`", "#", "#","$","%","^","&","*","(",")","=","[","]","{","}","'","<",">","|","/");
            $text = str_replace($vowels, "", $text );
            //echo $text."\n"; preg_match('/\w?/', $text)
            
            while ($text!="") { 
                $text = trim($text);
                preg_match('/^\b\w+\b/', $text, $matches);
                //echo $matches[0]."\n";
                $first_word = $matches[0];
                //echo $first_word."\n";
                $arr[$first_word] = preg_match_all('/(?i)\b'.$first_word.'\b/',$text)."\n";
                $text = preg_replace('/(?i)\b'.$first_word.'\b/',"",$text);
                //echo $text."\n";
                //print_r($arr);
            }
            print_r($arr);
        }
        else echo "Ошибка при открытии файла";
    } 
    else {
        echo "Файл $filename не существует";
    }
}

$file_name = 'test.txt';
count_word($file_name)
?>