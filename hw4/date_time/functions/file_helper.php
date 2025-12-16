<?php

function write_file($filename, $content)
{
    file_put_contents($filename, $content);
}

function read_file($filename)
{
    if (file_exists($filename)) {
        return file_get_contents($filename);
    }
    return "الملف غير موجود";
}

function file_size_kb($filename)
{
    if (file_exists($filename)) {
        return filesize($filename) / 1024 . " KB";
    }
    return "غير معروف";
}
