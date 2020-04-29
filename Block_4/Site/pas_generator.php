<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    var arreyNumbers = [];
    var numbers = [];
    var arrey = ["a","b","c","d","e","f","g","h","t","m","l"]
    


    //Рандомное число
    function getRandomNumber(askNumber) {
        return Math.round(Math.random() * askNumber);
    }

    function readInt() {
            var askNumber = document.getElementById("userAnswer").value;
            return askNumber;
  }
    function getPasssword(){
    //Просьба пользователя ввести число и проверка на ноль
    askNumber = readInt();
    if(isNaN(askNumber) || askNumber == 0){
        write("Введите число n больше нуля:");
    }else if(askNumber > 0){
        // hide("button");
        // hide("userAnswer");
        document.write("Пароль: ");
        for (var i = 0; i < askNumber; i++) {
        numbers = getRandomNumber(askNumber);
        arreyNumbers.push(arrey[numbers]);
        document.write(arreyNumbers[i]);
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

                    <h1>Генератор паролей</h1>

                    <div class="box">

                        <p id="info">Введите число n больше нуля:</p>
                        <input type="text" id="userAnswer">
                        <br>
                        <a href="#" onClick="getPasssword();" id="button">Генерировать</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <div class="footer">
        Copyright &copy; <?php echo date("Y")?> Aleksandr Duhnovskiy
    </div>div>


</body>

</html>