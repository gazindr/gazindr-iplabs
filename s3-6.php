<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
  echo "<h1>Газин Д.Р.</h1><br>";
  echo "<form method='post' action='$PHP_SELF'>";
  echo "<h2>6. Подсчитать число различных гласных, входящих в данный текст.</h2>";
  echo "Введите текст:<br><textarea type='text' name='text6' cols='30' rows='5'></textarea><br>";
  echo "<input type='submit' name='submit6' value='Обработать'></form>";

  if(isset($_POST["submit6"])) {
   $arr = array("а", "у", "о", "и", "э", "ы", "я", "ю", "е", "ё");
   $set = array();
   $chars = str_split($_POST["text6"]);
   foreach($chars as $char) {
     $char = strtolower($char);
     if(in_array($char, $arr) && !in_array($char, $set)) $set[] = $char;
   }

   echo "Количество различных гласных в тексте: ".count($set)." (".implode(", ", $set).")";
  }
  echo "<br><br><br>";
  
  echo "<form method='post' action='$PHP_SELF'>";
  echo "<h2>9. Подсчитать число предложений в тексте. Предложение оканчивается символами «.», «!», «?», «...».</h2>";
  echo "Введите текст:<br><textarea type='text' name='text9' cols='30' rows='5'></textarea><br>";
  echo "<input type='submit' name='submit9' value='Обработать'></form>";

  if(isset($_POST["submit9"])) {
    $sentences = 0;

    preg_match_all("/\w[.]/", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    preg_match_all("/\w[?]/", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    preg_match_all("/\w[!]/", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    echo "Число предложений в тексте: ".$sentences;
  }
  echo "<br><br><br>";

  echo "<form method='post' action='$PHP_SELF'>";
  echo "<h2>12. Пользователем задается произвольный текст и два символа. Перепечатать заданный текст, удалив из него все вхождения второго символа, непосредственно перед которыми находится первый символ.</h2>";
  echo "Введите текст:<br><textarea type='text' name='text12' cols='30' rows='5'></textarea><br>";
  echo "Первый символ: <input type='text' name='before' size='5'><br>";
  echo "Второй символ: <input type='text' name='after' size='5'><br>";
  echo "<input type='submit' name='submit12' value='Обработать'></form>";
  
  if(isset($_POST["submit12"])) {
    $symbols = str_split($_POST["text12"]);
    $before = strtolower($_POST["before"]);
    $after = strtolower($_POST["after"]);

    for($i = 0; $i < count($symbols); $i++) {
      if(strtolower($symbols[$i - 1]) == $before && strtolower($symbols[$i]) == $after) continue;
      echo $symbols[$i];
    }
  }
?>