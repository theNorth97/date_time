<?php
// $text = "У меня есть кот, и он очень милый кот.";
// preg_match_all("/кот/", $text, $matches);
// print_r($matches[0]);


// $text = "Привет кот, кит, крот , торт, круг";
// if (preg_match_all("/\bк\w+/u", $text, $matches)) {
//     print_r($matches[0]);
// } else {
//     echo "нету таких слов ,на такую букву ";
// }

// $text = "у меня есть 777 едениц золота , а у Максима 999 едениц золота" ;
// preg_match_all("/\d+/u", $text, $matches);
// print_r($matches[0]);

// $email = "Моя почта - on1ytrue@ikcloud.com , а вот моя запаснаяпочта valerik224@mail.ru";
// if (preg_match_all("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/u", $email, $array)) {
//     print_r($array[0]);
// } else {
//     echo "почта не обнаружена";
// }

// $text = "у меня honda , но я бы хотел поменять машину на tayota";
// $newText = preg_replace("/honda/u", "tayota", $text);
// echo $newText;

// $date = "18.02.1997, 19.04.2000, 07.06.1957. ";
// preg_match_all("/\d{2}\.\d{2}\.\d{4}/u", $date, $array);
// print_r($array[0]);

// $strinng = "Ищем все кот слова длинной в 3 буквы!";
// preg_match_all("/\b\w{3}\b/u", $strinng, $array);
// print_r($array[0]);

// $strinng = "bab";
// $q = preg_replace('#a#', 'o', $strinng); 
// echo $q;


// $strinng = "bab";
// $q = preg_replace('#a#', 'o', $strinng); 
// echo $q;

// $string =  "https://www.google.com , https://www.facebook.com , www.vk.ru, https://www.google1.com, google2.ru";
// if (preg_match_all('/\b(?:https?:\/\/)?(?:www\.)?[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*\.[a-zA-Z]{2,}\b/', $string, $array)) {
//     var_dump($array[0]);
// } else {
//     echo "нету ссылок";
// }


// $str = 'aa aba abba abbba abca abea';
// if (preg_match_all("#\bab*a\b#u", $str, $matches)) {
//     print_r($matches[0]);
// } else {
//     echo "нету таких слов";
// }

// $str = 'ab abab abab abababab abea';
// if (preg_match_all("#\b(ab)+\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "нет таких слов!";
// }

// $str = 'a.a aba aea';
// if (preg_match_all("#\ba\.a\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "not info";
// }


// $str = '[abc] {abc} abc (abc) [abc]';
// if (preg_match_all("#\[\w+\]#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "not info";
// }


// $str = '[abc] {abc} abc (abc) [abc]';
// $print = preg_replace("#\[\w+\]#u", "!", $str);
// echo $print;

// $str = 'aa aba abba abbba abbbba abbbbba';
// if (preg_match_all("#\bab{4,}a\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "not info";
// }

// $str = 'aba accca azzza wwwwa';
// $print = preg_replace("#\ba.+a\b#u", "!", $str);
// echo $print;

// $str = 'qreq qrq qpppq qewp qewewewewq';
// $print = preg_replace("#q.+?q#u", "!", $str);
// echo $print;

// $str = 'ave a#a a2a a$a a4a a5a a-a aca';
// $string = preg_replace("#\b\s\b#u", "!", $str);
// echo $string;

// $str = 'x1z xaz xdxcz xAz xhhhhhhhz xhhhz xrrrz';
// if (preg_match_all("#\bx[^a-g\d]{3,7}z\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "not info";
// }

// $str = 'x[]z x{}z x.z x()z';
// if (preg_match_all("#\bx[\[\]{}()]+z\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "not info";
// }


// $str = '[abc] {abc} abc (abc) [abc]';
// $string = preg_replace("#\[[^\]]*\]|\{[^\}]*\}|\([^\)]*\)#u", "!", $str);
// echo $string;


// $str = '^xx ajj ^ttt bkk @ss @aaadddd';
// if (preg_match_all("#\b[^\^][a-zA-Z]{2}\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "not info";
// }


// $str = 'xaz x$z x-z xcz x+z x%z x*z';
// if (preg_match_all("#\bx[$+-]z+\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "not info";
// }


// $str = 'aeea aeeea aea axa axxa axxa';

// if (preg_match_all("#\ba(e{2}|x+)a\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "error";
// }

// $str = 'http://youtube.com https://avito.ru https://vk.ru';
// if (preg_match_all("#\b(http:\/\/.+)\b|\b(https:\/\/.+)\b#u", $str, $array)) {
//     print_r($array[0]);
//     // echo "Есть совпадение!";
// } else {
//     echo "error!";
// }


// $string =  "https://www.google.com , https://www.facebook.com , www.vk.ru, https://www.google1.com, google2.ru";
// if (preg_match_all('/\b(?:https?:\/\/)?(?:www\.)?[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*\.[a-zA-Z]{2,}\b/', $string, $array)) {
//     print_r($array[0]);
// } else {
//     echo "нету ссылок";
// }

// $str = '12.txt avito.html vk.php';
// if (preg_match_all("#\b\w+[\.?]txt\b|\b\w+[\.]php\b|\b\w+[\.]html\b#u", $str, $array)) {
//     print_r($array[0]);
//     // echo "Есть совпадение!";
// } else {
//     echo "error!";
// }

// $str = "vk.com, yuotube.php, rehub.txt, repic.doc";

// if (preg_match_all("#\b[a-zA-Z0_9-]+\.(?:php|txt|doc)\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "error !";
// }


// $str = "12d fff 124  12f3";

// if (preg_match_all("#\b\d{3}\b#u", $str, $array)) {
//     print_r($array[0]);
// } else {
//     echo "error !";
// }


// $nameRegular = "#-?(?:\d+\.\d+)|(?:\d+)#u";
// $arr[] = '10 12.3 -12.4';
// $arr[] = '-0.11 dddd 0.5';
// $arr[] = '-99 ccc  bbb';
// $arr[] = 'aaa bbb ccc';

// foreach ($arr as $str) {

//     echo $str . ' value - ' . preg_match_all($nameRegular, $str) . '<br>';
// }

// $nameRegular = "#^[a-zA-Z0-9_+.%-]+@[a-zA-Z0-9.-]{4,}\.[a-zA-Z]{2,}$#";
// $arr[] = 'addr@mail.ru';    // +
// $arr[] = 'addr123@mail.ru'; // +
// $arr[] = 'my-addr@mail.ru'; // +
// $arr[] = 'my_addr@mail.ru'; // +
// $arr[] = 'addr@site.ru';    // +
// $arr[] = 'addr.ru';         // -
// $arr[] = 'addr@.ru';        // -
// $arr[] = 'my@addr@mail.ru'; // -

// foreach ($arr as $str) {
//     echo $str . " qyantity - " . preg_match($nameRegular, $str) . "<br>";
// }



// if (preg_match_all('#(\d+)-(\d+)-(\d+)#', '2025-12-31', $res)) {
//     print_r($res);
// } else {
//     echo "error !";
// }


// $pattern = '#(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])#';
// $subject = '2023-02-30 2024-11-31 2025-12-29';;

// if (preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER)) {
//     echo "<pre>";
//     print_r($matches);
//     echo "</pre>";
// } else {
//     echo "error !";
// }

// $pattern = '#(\w+)(?:\$@)+(\w+)#';
// $subject = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';;

// if (preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER)) {
//     echo "<pre>";
//     print_r($matches);
//     echo "</pre>";
// } else {
//     echo "error !";
// }

// $subject = 'aaa aaa bbb bbb ccc ddd';
// $pattern = '#([a-zA-Z])[a-zA-Z]+\1{2}#';

// $res = preg_replace($pattern, '!', $subject);
// echo $res;


//срочно закрепить при возвращении!!!!
// $subj = 'aaa aaa bbb bbb ccc ddd';
// $pattern = '#(\b\w+\b)\s+\g1#';

// if (preg_match_all($pattern, $subj, $array)) {
//     print_r($array[0]);
// } else {
//     echo 'нет совпадений';
// }


// $subject = '12:59:59';
// $pattern  = '#(?<hours>\d{2}):(?<minutes>\d{2}):(?<second>\d{2})#';
// preg_match($pattern, $subject, $array);
// echo "<pre>";
// print_r($array);
// echo "</pre>";


// $subject = '12:59:59 12:59:12 09:45:45';
// $pattern  = '#(?<hours>\d{2}):(?<minutes>\d{2}):(\k<minutes>)#';

// preg_match_all($pattern, $subject, $array);

// echo "<pre>";
// print_r($array);
// echo "</pre>";


// $str = '01-12-2025 30-11-1995 29-10-1990'; # даты
// $reg = '#(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-(?|19(9\d)|20(\d\d))#';  # регулярное выражение
// preg_match_all($reg, $str, $res);  # поиск всех совпадений 

// echo "<pre>";
// print_r($res);
// echo "</pre>";


// $str =  'func1() func2() func3()';
// $reg = '#(?:[\w]+[\d])\(\)#';  # регулярное выражение
// preg_match_all($reg, $str, $res);  # поиск всех совпадений 

// echo "<pre>";
// print_r($res);
// echo "</pre>";


// $str = '<a href="" class=eee id="zzz">';
// $reg = '#\w+(?=\s*=)#';  # регулярное выражение
// preg_match_all($reg, $str, $res);  # поиск всех совпадений 

// echo "<pre>";
// print_r($res);
// echo "</pre>";


// $str = '$aaa $bbb $ccc';
// $reg = '#\w+(?<!$)#';  # регулярное выражение
// preg_match_all($reg, $str, $res);  # поиск всех совпадений 

// echo "<pre>";
// print_r($res);
// echo "</pre>";

// $str = '2+3= 3+5= 7+8=';

// $res = preg_replace_callback('#(\d+)\+(\d+)=#', function ($match) {

//     return $match[0] . $match[1] + $match[2];
// }, $str);
// echo $res;

// $str = '10 3 7';

// $res = preg_replace_callback('#(\d+)#', function ($match) {

//     return $match[1] * $match[1];
// }, $str);
// echo $res;



// $presset = '#\b[A-Z][a-zA-Z0-9_.-]{7,}\b#';
// $subject = 'QWERTYYY123 qwerty123 qwerty_123 Qwerty_1_2_3 Qwerty__123@s_';

// preg_match_all($presset, $subject, $array);

// foreach ($array[0] as $arr) {
//     if (preg_match('#[^a-zA-Z0-9_.-]#', $arr)) {
//         continue;
//     }
//     echo $arr . "\n";
// }


// $text = '2.jpeg.png';
// echo '<img src="' . $text . '" alt="Описание изображения">';
// echo '<input type="go">';
// echo '<textarea name="ИМЯ" id="1">введите текст</textarea>';

// $text1 = 'abcde';

// echo $text1[0] . $text1[4];
