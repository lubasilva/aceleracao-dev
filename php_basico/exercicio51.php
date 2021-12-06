<?php

$cookArr = [];

setcookie("cookie1",
        "3ccf14a4ba03a48c7882ec74b88b02b971bb4cae53b778737d80dc8cd6db06f7",
        time() + 3600
);
setcookie("cookie2",
        "bab79420eb01d8aa19e9d02cf5d2c1e9143a2251e934b85f94d9ae1818ec89f9",
        time() + 3600
);
setcookie("cookie3",
        "d8d10dc32127d9194116c976be57bf2030c25395b7cb016087f93095a23e41bb",
        time() + 7200
);
setcookie("cookie4",
        "274073b041a0615b3b6b6286c97e18a9aec41d1229c7501c122c3f7fa969419b",
        time() + 7200
);

$cookArr['cookie 1'] = $_COOKIE['cookie1'];
$cookArr['cookie 2'] = $_COOKIE['cookie2'];
$cookArr['cookie 3'] = $_COOKIE['cookie3'];
$cookArr['cookie 4'] = $_COOKIE['cookie4'];

$json = json_encode($cookArr);

$file = fopen("cookies.txt", "w+");
fwrite($file, $json);
fclose($file);

echo "Arquivo cookies criado";

?>