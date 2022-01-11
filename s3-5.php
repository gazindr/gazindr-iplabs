<HTML>
    <HEAD>
        <TITLE> ГазинДР, задание 5</TITLE>
    </HEAD>
<BODY>
    <FORM  method="post" action="<?php print $PHP_SELF ?>">
        Здравствуйте! Введите ваше имя:
        <br><INPUT type="text" name="a" size="20">
            <p>1. Считаете ли Вы, что у многих ваших знакомых хороший характер? <p> да <INPUT type="checkbox" name="1"> <p> нет <INPUT type="checkbox" name="12">
            <p>2. Раздражают ли Вас мелкие повседневные обязанности? <p> да  <INPUT type="checkbox" name="2">  <p> нет <INPUT type="checkbox" name="22">
            <p>3. Верите ли Вы, что ваши друзья преданы Вам? <p> да  <INPUT type="checkbox" name="3">  <p> нет <INPUT type="checkbox" name="32">
            <p>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? <p> да  <INPUT type="checkbox" name="4">  <p> нет <INPUT type="checkbox" name="42">
            <p>5. Способны ли Вы ударить собаку или кошку? <p> да  <INPUT type="checkbox" name="5">  <p> нет <INPUT type="checkbox" name="52">
            <p>6. Часто ли Вы принимаете лекарства? <p> да  <INPUT type="checkbox" name="6">  <p> нет <INPUT type="checkbox" name="62">
            <p>7. Часто ли Вы меняете магазин, в который ходите за продуктами? <p> да  <INPUT type="checkbox" name="7">  <p> нет <INPUT type="checkbox" name="72">
            <p>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? <p> да  <INPUT type="checkbox" name="8">  <p> нет <INPUT type="checkbox" name="82">
            <p>9. Тяготят ли Вас общественные обязанности? <p> да  <INPUT type="checkbox" name="9">  <p> нет <INPUT type="checkbox" name="92">
            <p>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? <p> да  <INPUT type="checkbox" name="10">  <p> нет <INPUT type="checkbox" name="102">
            <p>11. Часто ли Вам приходят в голову мысли о Вашей невезучести? <p> да  <INPUT type="checkbox" name="11">  <p> нет <INPUT type="checkbox" name="112">
            <p>12. Сохранилась ли у Вас фигура по сравнению с прошлым? <p> да  <INPUT type="checkbox" name="12">  <p> нет <INPUT type="checkbox" name="122">
            <p>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?  <p> да <INPUT type="checkbox" name="13">  <p> нет <INPUT type="checkbox" name="132">
            <p>14. Нравится ли Вам семейная жизнь? <p> да  <INPUT type="checkbox" name="14">  <p> нет <INPUT type="checkbox" name="142">
            <p>15. Злопамятны ли Вы? <p> да  <INPUT type="checkbox" name="15">  <p> нет <INPUT type="checkbox" name="152">
            <p>16. Находите ли Вы, что стоит погода, типичная для данного времени года? <p> да  <INPUT type="checkbox" name="16">  <p> нет <INPUT type="checkbox" name="162">
            <p>17. Случается ли Вам с утра быть в плохом настроении? <p> да  <INPUT type="checkbox" name="17">  <p> нет <INPUT type="checkbox" name="172">
            <p>18. Раздражает ли Вас современная живопись? <p> да  <INPUT type="checkbox" name="18">  <p> нет <INPUT type="checkbox" name="182">
            <p>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?  <p> да <INPUT type="checkbox" name="19">  <p> нет <INPUT type="checkbox" name="192">
            <p>20. Надоедает ли Вам делать лабораторные по PHP?  <p> да <INPUT type="checkbox" name="20">  <p> нет <INPUT type="checkbox" name="202">
            <br>
            <P> <INPUT type="submit" name="chk" value="Проверить">
    </FORM>
    <?php
    if (isset($_POST["chk"])) {
        $i = 0;
        if (isset($_POST["3"])) {
            $i++;
        }
        if (isset($_POST["9"])) {
            $i++;
        }
        if (isset($_POST["10"])) {
            $i++;
        }
        if (isset($_POST["13"])) {
            $i++;
        }
        if (isset($_POST["14"])) {
            $i++;
        }
        if (isset($_POST["19"])) {
            $i++;
        }
        if (isset($_POST["12"])) {
            $i++;
        }
        if (isset($_POST["22"])) {
            $i++;
        }
        if (isset($_POST["42"])) {
            $i++;
        }
        if (isset($_POST["52"])) {
            $i++;
        }
        if (isset($_POST["62"])) {
            $i++;
        }
        if (isset($_POST["72"])) {
            $i++;
        }
        if (isset($_POST["82"])) {
            $i++;
        }
        if (isset($_POST["112"])) {
            $i++;
        }
        if (isset($_POST["122"])) {
            $i++;
        }
        if (isset($_POST["152"])) {
            $i++;
        }
        if (isset($_POST["162"])) {
            $i++;
        }
        if (isset($_POST["172"])) {
            $i++;
        }
        if (isset($_POST["182"])) {
            $i++;
        }
        if (isset($_POST["202"])) {
            $i++;
        }
        if ($i > 15){
        echo 'У Вас покладистый характер! Вы хороший чел, позитивный';}
        if ($i >= 8 || $i <= 15){
        echo 'Вы не лишены недостатков, но с вами можно ладить. Вы нормальный чел, нейтральный';}
        if ($i <8){
        echo 'Вашим друзьям можно посочувствовать. Вы плохой чел, негативный';}
    }
    ?>
</BODY>
</HTML>
