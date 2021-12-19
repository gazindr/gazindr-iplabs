<HTML>
    <TITLE> Таблица</TITLE>
    <BODY>
        <TABLE border=1>
            <?php
            for ($i=0; $i<10; $i++) { // запускаем первый цикл
                 echo ("<tr>"); // начало строки таблицы
                 for ($k=0; $k<10; $k++) { // запускаем второй цикл
                     if (($i*10+$k+1) % 2 == 0)
                     	echo ("<td style='color: red;'>". ($i*10+$k+1) ."</td>");
                     else
                     	echo ("<td>".($i*10+$k+1)."</td>");

                 }
                 echo ("</tr>"); // конец строки таблицы
            }
            ?>
        </TABLE>
    </BODY>
</HTML>