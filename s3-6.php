<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
  $PHP_SELF = $_SERVER["PHP_SELF"];

  echo "<h1>Ôàìèëèÿ È. Î.</h1><br>";
  echo "<form method='post' action='".$PHP_SELF."'>";
  echo "<h2>6. Ïîäñ÷èòàòü ÷èñëî ðàçëè÷íûõ ãëàñíûõ, âõîäÿùèõ â äàííûé òåêñò.</h2>";
  echo "Ââåäèòå òåêñò:<br><textarea type='text' name='text6' cols='30' rows='5'></textarea><br>";
  echo "<input type='submit' name='submit6' value='Îáðàáîòàòü'></form>";

  if(isset($_POST["submit6"])) {
   $arr = array("à", "ó", "î", "è", "ý", "û", "ÿ", "þ", "å", "¸");
   $set = array();
   $chars = str_split($_POST["text6"]);
   foreach($chars as $char) {
     $char = strtolower($char);
     if(in_array($char, $arr) && !in_array($char, $set)) $set[] = $char;
   }

   echo "Êîëè÷åñòâî ðàçëè÷íûõ ãëàñíûõ â òåêñòå: ".count($set)." (".implode(", ", $set).")";
  }
  echo "<br><br><br>";
  
  echo "<form method='post' action='".$PHP_SELF."'>";
  echo "<h2>9. Ïîäñ÷èòàòü ÷èñëî ïðåäëîæåíèé â òåêñòå. Ïðåäëîæåíèå îêàí÷èâàåòñÿ ñèìâîëàìè «.», «!», «?», «...».</h2>";
  echo "Ââåäèòå òåêñò:<br><textarea type='text' name='text9' cols='30' rows='5'></textarea><br>";
  echo "<input type='submit' name='submit9' value='Îáðàáîòàòü'></form>";

  if(isset($_POST["submit9"])) {
    $sentences = 0;

    preg_match_all("/[à-ÿÀ-ßa-zA-Z0-9]\./", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    preg_match_all("/[à-ÿÀ-ßa-zA-Z0-9]\?/", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    preg_match_all("/[à-ÿÀ-ßa-zA-Z0-9]\!/", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    echo "×èñëî ïðåäëîæåíèé â òåêñòå: ".$sentences;
  }
  echo "<br><br><br>";

  echo "<form method='post' action='".$PHP_SELF."'>";
  echo "<h2>12. Ïîëüçîâàòåëåì çàäàåòñÿ ïðîèçâîëüíûé òåêñò è äâà ñèìâîëà. Ïåðåïå÷àòàòü çàäàííûé òåêñò, óäàëèâ èç íåãî âñå âõîæäåíèÿ âòîðîãî ñèìâîëà, íåïîñðåäñòâåííî ïåðåä êîòîðûìè íàõîäèòñÿ ïåðâûé ñèìâîë.</h2>";
  echo "Ââåäèòå òåêñò:<br><textarea type='text' name='text12' cols='30' rows='5'></textarea><br>";
  echo "Ïåðâûé ñèìâîë: <input type='text' name='before' size='5'><br>";
  echo "Âòîðîé ñèìâîë: <input type='text' name='after' size='5'><br>";
  echo "<input type='submit' name='submit12' value='Îáðàáîòàòü'></form>";
  
  if(isset($_POST["submit12"])) {
    $symbols = str_split($_POST["text12"]);
    $before = strtolower($_POST["before"]);
    $after = strtolower($_POST["after"]);

    $symbols = array_reverse($symbols);
    echo $symbols[count($symbols) - 1];
    for($i = count($symbols) - 1; $i > 0; $i--) {
      if(strtolower($symbols[$i - 1]) == $after && strtolower($symbols[$i]) == $before) continue;
      echo $symbols[$i - 1];
    }
  }
?>
