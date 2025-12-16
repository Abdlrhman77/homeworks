<?php

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'admin' && $password === '1234') {
    echo "مرحبًا بالمشرف";
} else {
    echo "بيانات غير صحيحة";
}
