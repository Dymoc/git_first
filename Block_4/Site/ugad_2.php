<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        var answer = parseInt(Math.random() * 100);
        //var tryCount = 0;
        var player = 1;

        function readInt() {
            var number = document.getElementById("userAnswer").value;
            return parseInt(number);
            // return +document.getElementById("userAnswer").value;
        }

        function write(text) {
            document.getElementById("info").innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function guess() {
            //tryCount++;

            var userAnswer = readInt();
            if (userAnswer == answer) {
                write("<b>Поздравляю!</b><br>Победил игрок " + player);
                hide("button");
                hide("userAnswer");

            } else if (userAnswer > answer) {
                if (player == 1) {
                    write("Игрок " + player + " ввел слишком большое число<br>Угадывает игрок 2<br>Введите число от 1 до 100");
                    player = 2;
                } else if (player == 2) {
                    write("Игрок " + player + " ввел слишком большое число<br>Угадывает игрок 1<br>Введите число от 1 до 100");
                    player = 1;
                }

            } else if (userAnswer < answer) {
                if (player == 1) {
                    write("Игрок " + player + " маленькое число<br>Угадывает игрок 2<br>Введите число от 1 до 100");
                    player = 2;
                } else if (player == 2) {
                    write("Игрок " + player + " маленькое число<br>Угадывает игрок 1<br>Введите число от 1 до 100");
                    player = 1;
                }
            }
        }

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

                    <h1>Игра угадайка</h1>

                    <div class="box">

                        <p id="info">Угадайте число от 0 до 100</p>
                        <input type="text" id="userAnswer">
                        <br>
                        <a href="#" onClick="guess();" id="button">Начать</a>
                    </div>

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
