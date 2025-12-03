<?php

class Product {
    public $name;
    public $price;
    public $discount = 0;

    public function __construct($name, $price) {
        $this->name  = $name;
        $this->price = $price;
    }

    public function applyDiscount($percent) {
        $this->discount = $percent;
    }

    public function getFinalPrice() {
        return $this->price - ($this->price * ($this->discount / 100));
    }
}

$p = new Product("Laptop", 1000);
$p->applyDiscount(20);

echo "المبلغ النهائي = " . $p->getFinalPrice() . "<br>";
// -----------------------------------------------------------------------------

// 2) دالة عودية

$cats = [
    "Electronics" => [
        "Phones" => ["Samsung", "iPhone"],
        "Laptops" => ["Dell", "HP"]
    ]
];

function showTree($arr, $level = 0) {
    foreach ($arr as $key => $val) {
        echo str_repeat("— ", $level) . $key . "<br>";

        if (is_array($val)) {
            foreach ($val as $vKey => $vVal) {
                if (is_array($vVal)) {
                    showTree([$vKey => $vVal], $level + 1);
                } else {
                    echo str_repeat("— ", $level + 1) . $vVal . "<br>";
                }
            }
        }
    }
}

showTree($cats);

// --------------------------------------------------------------------------------
// 3) Higher-Order Function (ترجع دالة تعمل خصم)

function makeDiscount($percent) {
    return function($price) use ($percent) {
        return $price - ($price * ($percent / 100));
    };
}

$discount10 = makeDiscount(10);

echo "المبلغ بعد الخصم 10% = " . $discount10(200) . "<br>";
// --------------------------------------------------------------------

// 4) array_filter + Closure

$products = [
    ["name" => "Phone", "price" => 150],
    ["name" => "Cable", "price" => 20],
    ["name" => "Laptop", "price" => 500],
];

$filtered = array_filter($products, function($item) {
    return $item["price"] > 100;
});

foreach ($filtered as $p) {
    echo $p["name"] . " - " . $p["price"] . "<br>";
}

// ----------------------------------------------------------------------

// الاسئلة 

// -------------
// 1ما الفرق بين Closure و Anonymous Function؟
//  Anonymous Function (دالة مجهولة)

// هي دالة بدون اسم فقط
// مثال 
// $fn = function() {
//     echo "Hello";
// };

// Closure
// هي Anonymous Function + تستخدم use() لحمل متغيرات من خارجها
// مثال 
// $message = "Hi";

// $fn = function() use ($message) {
//     echo $message;
// };
// -----------------------------------------
// 2لماذا تعتبر الدوال العودية خطيرة إذا لم يتم وضع شرط إنهاء؟
// لأنها تستدعي نفسها بدون توقف
//  يعني راح تدخل في Loop لا نهائية
//  يستهلك الجهاز كامل الذاكرة (Stack Overflow)
//  ويطيّح السيرفر بالكامل.
// مثال خطير اوبه تشغله يادكتور 
// function bad() {
//     return bad(); // لا يوجد شرط إيقاف
// }

// ------------------------------------------------------
// 3ما العلاقة بين Callback وإدارة الـ Middleware في Laravel؟
// الـ Middleware في Laravel أساسه:

//  استقبال Request
//  تنفيذ function
//  تمريره لدالة أخرى (Callback) تكمل المعالجة

// --------------------------------------------------------

// 4كيف تساعد Higher-Order Functions في تقليل الكود؟
// لأنها:
 تستقبل دوال
 أو ترجع دوال
 فتسمح بإعادة استخدام سلوك كامل بدون تكرار

//  ------------------------------------------------------------

// 5لماذا كل Framework متقدم يستخدم الدوال بشكل مكثف؟

// 1) لأنها قابلة لإعادة الاستخدام
// Routes – Middleware – Validation – Collections
// كلها مبنية على دوال.
//  2) لأنها تقلل حجم الكود
// الـ Functional style أقصر من الـ OOP الثقيلة.
//  3) لأنها أسهل في الاختبار
// الدوال → مدخلات → مخرجات واضحة.
//  4) لأنها تقلل الأخطاء
// كل مهمة داخل دالة صغيرة واضحة.
//  5) لأنها أساسية للـ Callbacks & Events
// وهي قلب Laravel بالكامل.
//  6) لأنها تمنح مرونة أكبر
// تقدر تمرر سلوك كامل كمتغير.
?>