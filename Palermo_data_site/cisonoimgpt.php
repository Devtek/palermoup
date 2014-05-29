<?php

$url = "http://www.palermotoday.it/rss";
$rss = simplexml_load_file($url);
if($rss)
{
  /*echo '<h1>'.$rss->channel->title.'</h1>';*/
  echo '<div id="head-logo">';
  echo '<h1>'.'<img id="pt" src="img/palermo_today.png" alt="Palermo today"/>'.'</h1>';
  echo '</div>';
  echo '<li>'.$rss->channel->pubDate.'</li>';
  $items = $rss->channel->item;
  
  /*Start getImage*/
  

function getImage($xml){
    $encls=$xml->xPath('/rss/channel/item/enclosure'); 
        foreach($encls as $encl) { 
            echo('<img src='.$encl->attributes()->url.'/>');
            echo('<br>');
            }

}//end function getImage
if (isset($rss->channel)) getImage($rss);


foreach($items as $item)
  {
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
    $description = $item->description;
	echo '<div id="article">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
	echo '<br>';
    echo '<span>('.$published_on.')</span>';
		echo '<br>';
    echo '<p>'.$description.'</p>';
	echo '</div>';	
	
  }
}

?>