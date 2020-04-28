<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
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

    </script>
</head>

<body>

    <div class="content">
        <div class="header">
            <?php
    include "menu.php";
    ?>

            <div class="contentWrap">
                <div class="content">
                    <div class="center">

                        <h1>Игра в загадки</h1>

                        <div class="box">

                            <p>Туда, сюда, обратно - тебе и мне приятно.</p>
                            <input type="text" id="userAnswer1">

                            <p>Речка спятила с ума -По домам пошла сама.</p>
                            <input type="text" id="userAnswer2">

                            <p>Ах, не трогайте меня: Обожгу и без огня!</p>
                            <input type="text" id="userAnswer3">

                            <br>
                            <a href="#" onClick="checkAnswers();">Ответить</a>

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
