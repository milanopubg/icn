<?php

//-------------------------
// Dev : @DevMrAmir
// Channel : @Sourrce_Kade
//-------------------------

//------- Sql DataBase -------
$serverName = "localhost"; // ادیت نشود
$db_name    = ""; // نام دیتابیس
$db_user    = ""; // یوزر دیتابیس
$db_pass    = ""; // پسورد دیتابیس

$conn = mysqli_connect($serverName, $db_user, $db_pass, $db_name);

if(!$conn){

    die('failed ' . mysqli_connect_error());
}
//------- Data -------
$token        = "17907"; // توکن ربات
$admin        = "63455"; // عددی ادمین
$perCoin      = "1";
$supportRo    = "ESRRSR"; //// ایدی پشتیبانی بدون@
$bot_id       = "1";
$web          = "https://domin/file"; /// دامنه همراه با پوشه با http
//------- Function -------  
function bot($method, $user = []){
    global $token;
$url = "https://api.telegram.org/bot$token"."/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $user);
$res = curl_exec($ch);
if (curl_error($ch)) {
    var_dump(curl_error($ch));
} else {
    return json_decode($res);
}
}

?>