<?php
date_default_timezone_set('Europe/Istanbul');
$saat = date("h");
if($saat>06 && $saat<=10){
    echo("Günaydın");
}
elseif($saat>10 && $saat<=17){
    echo("İyi Günler");
}
elseif($saat>17 && $saat<=20){
    echo("İyi Akşamlar");
}
elseif($saat>20 && $saat<=00){
    echo("İyi Geceler");
}
else{
    echo("Esenlikler Dilerim");
}
?>