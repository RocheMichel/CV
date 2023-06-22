<?php
    $page = $_GET["page"];

    if($page == 'cv'){
        include 'cv.php';
    }elseif ($page == 'hobbie'){
        include 'hobbie.php';
    }elseif ($page == 'contact'){
        include 'contact.php';
    }else{
        include 'cv.php';
    }
