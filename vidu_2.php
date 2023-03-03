<?php
if (isset($_SESSION['user_id'])) {

    if ($_SESSION['user_type'] == 'admin') {
        echo "cho phép truy cập vào trang quản trị";
    } else {
        echo "cho phép truy cập vào trang thông tin cá nhân";
    }
} else {

    header('Location: login.php');
    exit;
}
