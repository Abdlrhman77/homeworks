<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $allowed = ['jpg', 'png', 'pdf'];
    $fileName = $_FILES['file']['name'];
    $fileTmp  = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];

    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
        die("امتداد غير مسموح ❌");
    }

    if ($fileSize > 2 * 1024 * 1024) {
        die("حجم الملف كبير ❌");
    }

    move_uploaded_file($fileTmp, "../uploads/" . $fileName);
    echo "تم رفع الملف بنجاح ✅";
}
