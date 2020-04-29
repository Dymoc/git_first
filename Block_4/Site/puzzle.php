<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        /*
        var score = 0;

        function checkAnswer(inputId, answers) {
            var userAnswer = document.getElementById(inputId).value;
            userAnswer = userAnswer.toLowerCase();
            for (var i = 0; i < answers.length; i++) {
                if (userAnswer == answers[i]) {
                    score++;
                    break;
                }
            }
        }

        function checkAnswers() {

            checkAnswer("userAnswer1", ["качели"]);
            checkAnswer("userAnswer2", ["водопровод", "трубопровод"]);
            checkAnswer("userAnswer3", ["крапива"]);

            alert("Вы отгадали " + score + " загадок");

        }
        */

    </script>
</head>

<body>

    <div class="content">
        <?php
    include "menu.php";
    ?>
        <div class="contentWrap">
            <div class="content">
                <div class="center">

                    <h1>Игра в загадки</h1>

                    <div class="box">

                        <?php

                           if(isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])){
                            $userAnswer = $_GET["userAnswer1"];
                            $score = 0;
                            if(mb_strtolower($userAnswer) == "качели"){
                                $score++;
                            }
                            $userAnswer = $_GET["userAnswer2"];                            
                            if(mb_strtolower($userAnswer) == "водопровод" || $userAnswer == "трудопровод"){
                                $score++;
                            }
                            $userAnswer = $_GET["userAnswer3"];                            
                            if(mb_strtolower($userAnswer) == "крапива"){
                                $score++;
                            }


                            echo "Вы угадали" . $score . " загадок";
                        }
                       ?>

                        <form method="GET">

                            <p>Туда, сюда, обратно - тебе и мне приятно.</p>
                            <input type="text" name="userAnswer1">

                            <p>Речка спятила с ума -По домам пошла сама.</p>
                            <input type="text" name="userAnswer2">

                            <p>Ах, не трогайте меня: Обожгу и без огня!</p>
                            <input type="text" name="userAnswer3">

                            <br>
                            <input type="submit" value="Ответ" name="">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        Copyright &copy; <?php echo date("Y")?> Aleksandr Duhnovskiy
    </div>

</body>

</html>
