<?php
$url = "https://symfony.developpez.com/index/rss";
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item) {
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd M Y, H\hi');
    echo '<li><a href="' . $item->link . '">' . $item->title . '</a> (' . $date . ')</li>';
}
echo '</ul>';
?>
