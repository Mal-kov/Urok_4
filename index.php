
<meta charset="utf8" />
<?php

$ini_string='
[игрушка мягкая мишка белый]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';
    
[одежда детская куртка синяя синтепон]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';
    
[игрушка детская велосипед]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';
';
$bd = parse_ini_string($ini_string, true);
print_r($bd);




 function dickont1($bd){
    global $bd;
    global $discont;
    if ($bd['игрушка мягкая мишка белый']['diskont'] == 'diskont0'){
        echo 'Скидка на товар отсутствует'. "\n";
        $discont=1;
        return $discont;
    }elseif ($bd['игрушка мягкая мишка белый']['diskont'] == 'diskont1') {
        echo 'Скидка на товар составляет = 10 %'. "\n";
        $discont=2;
        return $discont;
    }elseif ($bd['игрушка мягкая мишка белый']['diskont'] == 'diskont2'){
        echo 'Скидка на товар составляет = 20 %'. "\n";
        $discont=3;
        return $discont;
    }else{
        echo 'Ну вот, опять что-то не так...??? ';
    }
}

function dickont2($param){
    global $param;
    global $discont2;
    if ($param == 'diskont0'){
        echo 'Скидка на товар отсутствует'. "\n";
        $discont2=1;
        return $discont2;
    }elseif ($param == 'diskont1') {
        echo 'Скидка на товар составляет = 10 %'. "\n";
        $discont2=2;
        return $discont2;
    }elseif ($param == 'diskont2'){
        echo 'Скидка на товар составляет = 20 %'. "\n";
        $discont2=3;
        return $discont2;
    }else{
        echo 'Ну вот, опять что-то не так...??? ';
    }
}


function dickont3($unit){
    global $unit;
    global $discont3;
    
    if ($param == 'diskont0'){
        echo 'Скидка на товар отсутствует'. "\n";
        $discont3=1;
        return $discont3;
    }elseif ($param == 'diskont1') {
        echo 'Скидка на товар составляет = 10 %'. "\n";
        $discont3=2;
        return $discont3;
    }elseif ($param == 'diskont2'){
        echo 'Скидка на товар составляет = 20 %'. "\n";
        $discont3=3;
        return $discont3;
    }else{
        echo 'Ну вот, опять что-то не так...??? ';
    }
}













echo 'Корзина: ', "\n";
$cena1= (int)($bd['игрушка мягкая мишка белый']['цена']);
$zakaz1= (int)($bd['игрушка мягкая мишка белый']['количество заказано']);
$ostatok1= (int)($bd['игрушка мягкая мишка белый']['осталось на складе']);
switch ($bd){
    case ($ostatok1==0):
        echo 'Уведомление: К сожалению позиция "Игрушка мягкая мишка белый" в данный момент отсутсвует на складе'. "\n";
        break;
    case ($zakaz1 > $ostatok1):
        echo 'Наименование товара: " Игрушка мягкая мишка белый "', "\n";
        echo 'Уведомление: в настоящее время товар доступен в колличестве = ', $ostatok1, "\n";
        echo 'Цена за штуку = ', $cena1, "\n";
        dickont1($bd);
            if ($discont==1){
                echo 'Итоговая стоимость товара = ', $ostatok1 *$cena1;
            }elseif ($discont==2){
                echo 'Итоговая стоимость товара с учетом скидки = '. $ostatok1*$cena1*0.9, "\n";
            }elseif ($discont==3){
                echo 'Итоговая стоимость товара с учетом скидки = '. $ostatok1*$cena1*0.8, "\n";
            }else {
                echo 'Ну вот, опять что-то не так...??? ';
            }
        break;
    case ($zakaz1 <= $ostatok1):
        echo 'Наименование товара: " Игрушка мягкая мишка белый "', "\n";
        echo 'Товар доступен в колличестве = ', $zakaz1, "\n";
        echo 'Цена за штуку = ', $cena1, "\n";
        dickont1($bd);
            if ($discont==1){
                echo 'Итоговая стоимость товара = ', $zakaz1*$cena1;
            }elseif ($discont==2){
                echo 'Итоговая стоимость товара с учетом скидки = '. $zakaz1 *$cena1*0.9, "\n";
            }elseif ($discont==3){
                echo 'Итоговая стоимость товара с учетом скидки = '. $zakaz1 *$cena1*0.8, "\n";
            }else {
                echo 'Ну вот, опять что-то не так...??? ';
            }
        break;
}
echo "\n", "\n";
$param= ($bd['одежда детская куртка синяя синтепон']['diskont']);
$cena2= (int)($bd['одежда детская куртка синяя синтепон']['цена']);
$zakaz2= (int)($bd['одежда детская куртка синяя синтепон']['количество заказано']);
$ostatok2= (int)($bd['одежда детская куртка синяя синтепон']['осталось на складе']);
switch ($bd){
    case ($ostatok2==0):
        echo 'Уведомление: К сожалению позиция " Одежда детская куртка синяя синтепон " в данный момент отсутсвует на складе'. "\n";
        break;
    case ($zakaz2 > $ostatok2):
        echo 'Наименование товара: " Одежда детская куртка синяя синтепон "', "\n";
        echo 'Уведомление: в настоящее время товар доступен в колличестве = ', $ostatok2, "\n";
        echo 'Цена за штуку = ', $cena2, "\n";
        dickont2($param);
            if ($discont2==1){
                echo 'Итоговая стоимость товара = ', $ostatok2 *$cena2;
            }elseif ($discont2==2){
                echo 'Итоговая стоимость товара с учетом скидки = '. $ostatok2*$cena2*0.9, "\n";
            }elseif ($discont2==3){
                echo 'Итоговая стоимость товара с учетом скидки = '. $ostatok2*$cena2*0.8, "\n";
            }else {
                echo 'Ну вот, опять что-то не так...??? ';
            }
        break;
    case ($zakaz2 <= $ostatok2):
        echo 'Наименование товара: " Одежда детская куртка синяя синтепон "', "\n";
        echo 'Товар доступен в колличестве = ', $zakaz2, "\n";
        echo 'Цена за штуку = ', $cena2, "\n";
        dickont2($param);
            if ($discont2==1){
                echo 'Итоговая стоимость товара = ', $zakaz2*$cena2;
            }elseif ($discont2==2){
                echo 'Итоговая стоимость товара с учетом скидки = '. $zakaz2 *$cena2*0.9, "\n";
            }elseif ($discont2==3){
                echo 'Итоговая стоимость товара с учетом скидки = '. $zakaz2 *$cena2*0.8, "\n";
            }else {
                echo 'Ну вот, опять что-то не так...??? ';
            }
        break;
}       
?>
