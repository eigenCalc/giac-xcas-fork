<?php
header("Location: ./fr/index.php");
exit;

$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang = str_replace(",", ";", $lang);
$langs = explode(";", $lang) ;
$lang = "en";
for($n=0; $n<sizeof($langs); $n++)
{
    if($langs[$n]=="fr")
    {
        header("Location: ./fr/index.php");
        exit;
    }
}
header("Location: ./en/index.php");
exit;
?>