<?php
    session_start();
    if(!isset($_SESSION['cod'])){
        header("location: http://localhost:8080/TCC_II");
    }  
?>