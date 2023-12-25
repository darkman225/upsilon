<?php
if (!isset($_SESSION)) {
    session_start();
    $_SESSION['content']= 'home';
    $_SESSION['lang']='fr';
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang']='fr';
}elseif(isset($_GET['lang'])&&$_SESSION['lang']!=$_GET['lang']&&!empty($_GET['lang'])){
    if ($_GET['lang']=='fr') {
        $_SESSION['lang']='fr';
    } else {
        $_SESSION['lang']='en';
    }
    
}

require_once ('lang/'.$_SESSION['lang'].'.php')

?>