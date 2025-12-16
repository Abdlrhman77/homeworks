<?php

$allowed = ['jpg', 'png', 'pdf'];

$fileName = $_FILES['myfile']['name'];
$fileSize = $_FILES['myfile']['size'];
$tmpName  = $_FILES['myfile']['tmp_name'];

$ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

if (!in_array($ext, $allowed)) {
    die("نوع الملف غير مسموح");
}

if ($fileSize > 2 * 1024 * 1024) {
    die("الملف كبير جدًا");
}

$newName = time() . "_" . $fileName;

if (move_uploaded_file($tmpName, "uploads/" . $newName)) {
    echo "تم رفع الملف بنجاح";
} else {
    echo "حدث خطأ أثناء الرفع";
}