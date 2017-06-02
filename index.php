<?php
/*
*	Заготовка под алгорим генерации уникальных ID для сокращения ссылок
*/$short = 'a1b99';
echo "Исходная строка {$short}<br>";
//количество уникальных строк при длинне в 5 знаков = 992436543 шт
$characterArray = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w',
    'x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y',
    'Z','0','1','2','3','4','5','6','7','8','9');
// -1 т.к. идексы массива идут с 0, а count считает с 1
$countArray = count($characterArray) - 1;
$shortRev = strrev($short);
for ($i = 0; $i < 61; $i++) {
    $indexKey = array_search($shortRev[$i], $characterArray);
    if ($indexKey < $countArray) {
        $indexKey += 1;
        $shortRev[$i] = $characterArray[$indexKey];
        break;
    } elseif ($indexKey == $countArray) {
        $shortRev[$i] = $characterArray[0];
    }
}
$short = strrev($shortRev);
echo "Конечная строка {$short}";
