<?php

// ضبط توقيت اليمن
date_default_timezone_set("Asia/Aden");

function current_date()
{
    return date("Y-m-d");
}

function current_time()
{
    return date("H:i:s");
}

function full_datetime()
{
    return date("Y-m-d H:i:s");
}
