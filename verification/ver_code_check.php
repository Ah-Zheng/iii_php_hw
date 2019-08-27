<?php

session_start();

if (isset($_POST['refresh'])) {
    header('refresh: 0, url = ver_code_view.html');
}

if (isset($_POST['verCode']) && isset($_POST['btn'])) {
    $verCode = $_POST['verCode'];
    if ($verCode == $_SESSION['verCode']) {
        echo '驗證成功<br>';
        echo $_SESSION['verCode'];
        header('refresh: 5, url = ver_code_view.html');
        session_destroy();
    } else {
        echo '驗證失敗';
        session_destroy();
        header('refresh: 3, url = ver_code_view.html');
    }
}
