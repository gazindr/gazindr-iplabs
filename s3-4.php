<HTML>
    <HEAD>
        <TITLE> ГазинДР, Вход в систему</TITLE>
    </HEAD>
<BODY>
    <FORM  method="post" action="<?php print $PHP_SELF ?>">
      Здравствуйте! Введите ваш логин:
      <br><INPUT type="text" name="a" size="20">
      <P> <INPUT type="submit" name="obr" value="Войти">
    </FORM>
    <?php
            if (isset($_POST["obr"])) {
                if (($_POST["a"]=="ГазинДР")||($_POST["a"]=="ДРГазин")||($_POST["a"]=="Даниэль")||($_POST["a"]=="Данила")) { echo("Здравствуйте, " . $_POST["a"]);
                } else {
                    echo "Вы не зарегистрированный пользователь!";
                }
            }
    ?>
</BODY>
</HTML>
