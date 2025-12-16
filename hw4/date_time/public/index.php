<?php

require_once "../config/database.php";
require_once "../functions/datetime.php";
require_once "../functions/file_helper.php";

// تجربة الوقت والتاريخ
echo "التاريخ: " . current_date() . "<br>";
echo "الوقت: " . current_time() . "<br>";
echo "التاريخ والوقت: " . full_datetime() . "<hr>";

// تجربة الملفات
write_file("../uploads/test.txt", "هذا ملف تجريبي");
echo read_file("../uploads/test.txt") . "<br>";
echo file_size_kb("../uploads/test.txt") . "<hr>";

// تجربة الاتصال بقاعدة البيانات
$conn = db_connect();
echo "تم الاتصال بقاعدة البيانات بنجاح ";
