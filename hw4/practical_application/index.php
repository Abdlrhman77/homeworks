<?php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
// -------------------
// echo $_SERVER['REQUEST_METHOD']; // GET أو POST
// echo $_SERVER['REMOTE_ADDR'];    // IP
// echo $_SERVER['HTTP_USER_AGENT']; // نوع المتصفح


// ------------------------------------------------------------------------------------------------------------------


// echo "<h2>خصائص السيرفر:</h2>";

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// echo "<h3>أهم الاستخدامات:</h3>";

// echo "✔ نوع الطلب: " . $_SERVER['REQUEST_METHOD'] . "<br>";
// echo "✔ الصفحة الحالية: " . $_SERVER['SCRIPT_NAME'] . "<br>";
// echo "✔ الرابط الكامل: " . $_SERVER['REQUEST_URI'] . "<br>";
// echo "✔ IP المستخدم: " . $_SERVER['REMOTE_ADDR'] . "<br>";
// echo "✔ معلومات المتصفح: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";


// ------------------------------------------------------------------------------------------------------------------



// if ($_SERVER['REQUEST_METHOD'] == "POST") {

//     $name = $_POST['name'];
//     echo "مرحبًا $name ، تم إرسال البيانات بنجاح.";

// } else {

//     echo '
//         <form method="post">
//             <input type="text" name="name" placeholder="اسمك">
//             <button>ارسال</button>
//         </form>
//     ';

// }

// ------------------------------------------------------------------------------------------------------------------

// print_r($_FILES);
// أهم قيم:
// الاسم الحقيقي
// الحجم
// الامتداد
// مكان التخزين المؤقت
// كود الخطأ
// -------------------------------------

// مثال نقل الملف:
// move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);



// -----------------------------------------------------------------------------------------------------------------------

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $name = $_POST['name'] ?? '';
//     $age = $_POST['age'] ?? '';
//     echo "<h3>تم استقبال البيانات عبر POST:</h3>";
//     echo "اسمك: $name <br>";
//     echo "عمرك: $age <br>";
// } elseif ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['name'])) {
//     $name = $_GET['name'];
//     $age = $_GET['age'] ?? '';
//     echo "<h3>تم استقبال البيانات عبر GET:</h3>";
//     echo "اسمك: $name <br>";
//     echo "عمرك: $age <br>";
// } else {
//     // النموذج
//     echo '
//         <h3>نموذج GET:</h3>
//         <form method="get">
//             <input type="text" name="name" placeholder="اسمك">
//             <input type="number" name="age" placeholder="عمرك">
//             <button>ارسال عبر GET</button>
//         </form>
//         <hr>
//         <h3>نموذج POST:</h3>
//         <form method="post">
//             <input type="text" name="name" placeholder="اسمك">
//             <input type="number" name="age" placeholder="عمرك">
//             <button>ارسال عبر POST</button>
//         </form>
//     ';
// }


// ------------------------------------------------------------------------------------------------------------------

// لرفع ملفات الصور ننشا ملف اسمه uploads داخل مجلد المشروع واول مانرفع صوره باتتخزن في المجلد 
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// $targetDir = "uploads/";
// $targetFile = $targetDir . basename($_FILES['myfile']['name']);

// if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetFile)) {
//     echo "تم رفع الملف بنجاح!";
// } else {
//     echo "حدث خطأ أثناء الرفع.";
// }
//  -----------------------------------------------------------------------------------------


session_start();

$_SESSION['user_id'] = 10;
$_SESSION['name'] = "Ahmed";
echo $_SESSION['name']; 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="post" action="index.php" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <button type="submit">رفع</button>
</form> -->


<!-- ----------------------------------------------------------------------------------------- -->
    <!-- <form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
</form> -->
<!-- ----------------------------------------------------------------------------------------- -->


</body>
</html>