<?php
echo "<h1>حل التمرين التطبيقي للمحاضرة الثالثة</h1>";


echo "<h2>التكليف التنفيذ 1 و 2: طباعة رسائل للطلاب</h2>";

$students = ["علي", "فاطمة", "خالد", "مريم", "يوسف"];

foreach ($students as $student) {
    echo "مرحبًا <strong>$student</strong>، نتمنى لك حظًا سعيدًا في الامتحان!". "<br>"."<br>";
}

echo "<hr>"; 



echo "<h2>التكليف 3 و 4: طباعة الأعداد من 1 إلى 10</h2>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
      
        echo "<strong style='color: blue;'>العدد الزوجي: $i</strong>"."<br>";
    } else {
        echo "العدد الفردي: $i" ."<br>";
    }
}

?>
