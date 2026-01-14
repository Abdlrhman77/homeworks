<?php
// if(extension_loaded('pdo')){
//     echo "مثبت";

// }else{
//     echo "غير مثبت";

// }
// // print_r(PPDO::getAvailableDrivers());

// =================================================================================


// الهيلكل الاساسي للاتصال 
// $pdo = new PDO(DSN, username,password,options);

// =====================================================================================

// الصغيه الاساسية
// $dsn = "mysql:host=localhost;dbname=test;charset=utf8mb4";

// مع منفذ مخصص

// print_r(PDO::getAvailableDrivers());

// ==========================================================================================



// // MySQL / MariaDB
// $dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';

// // مع منفذ:

// $dsn = 'mysql:host=localhost;port=3307;dbname=test';

// //  SQLite

// قاعدة بيانات ملف:

// $dsn = 'sqlite:/path/to/database.db';

// // في الذاكرة:
// $dsn = 'sqlite::memory:';

// //  PostgreSQL
// $dsn = 'pgsql:host=localhost;port=5432;dbname=test';

// // SQL Server
// $dsn = 'sqlsrv:Server=localhost;Database=test';

// //  Oracle
// $dsn = 'oci:dbname=//localhost:1521/test';

// ==========================================================================================


// // إعدادات الاتصال المهمة (PDO Options)
// // أهم الإعدادات الشائعة:
// $options = [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES => false,
// ];

// // شرحها:

// // ERRMODE_EXCEPTION
// // 👉 يجعل الأخطاء تظهر كـ Exception (الأفضل دائمًا)

// // FETCH_ASSOC
// // 👉 يجلب النتائج كمصفوفة بأسماء الأعمدة

// // EMULATE_PREPARES = false
// // 👉 يمنع SQL Injection بشكل أقوى



// class Database {
//     private static $connection = null;

//     public static function connect() {
//         if (self::$connection === null) {
//             self::$connection = new PDO(
//                 "mysql:host=localhost;dbname=myapp;charset=utf8mb4",
//                 "app_user",
//                 "password",
//                 [
//                     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//                 ]
//             );
//         }
//         return self::$connection;
//     }
// }


/**
 * Database Connection Class using PDO
 * Author: Student
 * Description: Secure and reusable database connection class
 */

class Database
{
    // إعدادات الاتصال
    private static $host = "localhost";
    private static $dbName = "test_db";
    private static $username = "root";
    private static $password = "";
    private static $charset = "utf8mb4";

    // كائن الاتصال
    private static $connection = null;

    /**
     * إنشاء الاتصال أو إرجاعه إن كان موجودًا
     */
    public static function connect()
    {
        if (self::$connection === null) {
            try {
                $dsn = "mysql:host=" . self::$host .
                       ";dbname=" . self::$dbName .
                       ";charset=" . self::$charset;

                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];

                self::$connection = new PDO(
                    $dsn,
                    self::$username,
                    self::$password,
                    $options
                );

            } catch (PDOException $e) {
                // لا تعرض تفاصيل الخطأ في المشاريع الحقيقية
                die("فشل الاتصال بقاعدة البيانات");
            }
        }

        return self::$connection;
    }

    /**
     * إغلاق الاتصال (اختياري)
     */
    public static function disconnect()
    {
        self::$connection = null;
    }
}


?>