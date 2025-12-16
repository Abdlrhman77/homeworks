<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
