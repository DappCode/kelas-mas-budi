<?php

require_once("vendor/autoload.php");

use Carbon\Carbon;
use  Portal\News;

$news = new News();
echo $news->getTitle();
echo "<br>";
echo $news->getCategory();
echo "<br>";


echo "1. Sekarang: ".Carbon::now()."<br>";

echo "2. Umur Saya: ".Carbon::createFromDate(1999, 5, 30)->age."<br>";

echo "3. Kamu Lahir: ".Carbon::createFromDate(1999, 5, 30)->diffForHumans();

