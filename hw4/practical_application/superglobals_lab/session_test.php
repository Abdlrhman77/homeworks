<?php
session_start();

if (isset($_SESSION['name'])) {
    echo "مرحبًا يا " . htmlspecialchars($_SESSION['name']) . "، هذه ليست زيارتك الأولى";
} else {
    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
        echo "تم حفظ اسمك، حدّث الصفحة";
    } else {
        ?>
        <form method="post">
            <input type="text" name="name" placeholder="اكتب اسمك">
            <button type="submit">حفظ</button>
        </form>
        <?php
    }
}
