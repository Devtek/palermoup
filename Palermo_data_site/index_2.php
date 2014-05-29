<html>
<div id="palermotoday">
<?php

$url = "http://www.palermotoday.it/rss";
$rss = simplexml_load_file($url);
if($rss)
{
  echo '<h1>'.$rss->channel->title.'</h1>';
  echo '<li>'.$rss->channel->pubDate.'</li>';
  $items = $rss->channel->item;
  foreach($items as $item)
  {
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
    $description = $item->description;
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
    echo '<span>('.$published_on.')</span>';
    echo '<p>'.$description.'</p>';
  }
}

?>
</div>

<div id="palermoweb">
<?php

$url = "http://www.palermowebnews.it/rss";
$rss = simplexml_load_file($url);
if($rss)
{
  echo '<h1>'.$rss->channel->title.'</h1>';
  echo '<li>'.$rss->channel->pubDate.'</li>';
  $items = $rss->channel->item;
  foreach($items as $item)
  {
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
    $description = $item->description;
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
    echo '<span>('.$published_on.')</span>';
    echo '<p>'.$description.'</p>';
  }
}

?>
</div>

<?php

$url = "http://www.mobilitapalermo.org/mobpa/feed";
$rss = simplexml_load_file($url);
if($rss)
{
  echo '<h1>'.$rss->channel->title.'</h1>';
  echo '<li>'.$rss->channel->item->pubDate.'</li>';
  $items = $rss->channel->item;
  foreach($items as $item)
  {
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
    $description = $item->description;
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
    echo '<span>('.$published_on.')</span>';
	echo $content->encoded;
    echo '<p>'.$description.'</p>';
  }
}

?>