<?php
$url = "https://www.google.fr/alerts/feeds/11423696395208606566/14567861726585369355";
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->entry as $item) {
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd M Y, H\hi');
    echo '<li><a href="' . $item->link . '">' . $item->title . '</a> (' . $date . ')</li>';
}
echo '</ul>';
