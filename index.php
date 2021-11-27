<?php
$lenght = 0;                //$x кол-во введеных символов
$index = 0;                 //индекс для выбора картинки из массива
$output = "Entered text";   //строка вывода
$imageArr = array   ("https://souvenirclock.ru/wp-content/uploads/prirda049.jpg",
                    "https://i08.fotocdn.net/s116/a12aeff86aeacdff/gallery_xl/2648186076.jpg",
                    "https://zastavok.net/main/priroda/163639622317.jpg",
                    "https://zastavok.net/main/priroda/163639580681.jpg",
                    "https://zastavok.net/main/priroda/163639308198.jpg"
                    );

if(isset($_POST["button"])) {
    $index = rand(0,count($imageArr) - 1);
    $lenght = mb_strlen($_POST["input_string"]);
    if($lenght == 0) {
        $output = "Nothing was entered";
    }
    else {
        $output = $_POST["input_string"];
    }
}


$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <script>window.onload = function(){autosize(document.querySelectorAll("textarea")); } </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="style/js/jquery-3.3.1.slim.min.js" defer></script>
    <script src="style/js/popper.min.js" async></script>
    <script src="https://dwweb.ru/__a-data/__all_for_scripts/__examples/js/autosize_textarea/autosize.min.js"></script>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <script src="style/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="text-center">
        <img src="'.$imageArr[$index].'" class="rounded mx-auto d-block">
        <form method="post">
            <input type="text" class="input form-control" name="input_string"> 
            <button type="submit" class="btn btn-outline-primary" name="button">Primary</button>
            <div><textarea class="result">'.$output.'</textarea></div>
            <p class="lenght">We entered '.$lenght.' symbols</p>
        </form>
    </div>
</body>
</html>';
echo $html;