
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <title>PalermoUP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css.old" rel="stylesheet">
    	<link href="css/style.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">  

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">PalermoUP</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/live_sicilia.gif" alt="livesicilia" width="300px" height="600px">
      <div class="carousel-caption">
<h3>Prova</h3>
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
       <!--<h1>Palermo-UP</h1>
        <p>Novità Palermitane per i Palermitani sempre aggiornati.</p>
        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>-->

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">     
      
        
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
$i=0;
foreach ($items as $item)
  {
	 if ($i <10){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
    $description = $item->description;
	echo '<div id="article">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
	echo '<br>';
    echo '<span>('.$published_on.')</span>';
	echo '<br>';
/*	echo '<p>'.$content->encoded.'</p>';
*/	echo '<br>';
/*    echo '<p>'.$description.'</p>';
*/	echo '</div>';	
	 $i=$i+1; // lo stesso di $i=++;
	 }
  }
}
?>

          <!--<h2>PalermoTodayRss</h2>-->
        <p><a class="btn" href="#">Vai a PalermoToday &raquo;</a></p>
        </div>
        <div class="span4">
<?php

$url = "http://www.mobilitapalermo.org/mobpa/feed";
$rss = simplexml_load_file($url);
if($rss)
{
	echo '<div id="head-logo">';
  	echo '<h1>'.'<img src="img/mobilitapalermo.jpg" alt="Mobilita palermo"/>'.'</h1>';
  	echo '</div>';
 	echo '<li>'.$rss->channel->item->pubDate.'</li>';
  $items = $rss->channel->item;
  $i=0;
foreach($items as $item)
  {
	if ($i <10){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
/*    $description = $item->description;
*/	
	echo '<div id="article">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
    echo '<br>';
    echo '<span>('.$published_on.')</span>';
	echo '<br>';
/*    echo '<p>'.$description.'</p>';
*/	
/*	echo $content->encoded;
*/ 
		echo '</div>';

	$i=$i+1; // lo stesso di $i=++;
	 }
  }
}
?>
        
<!--          <h2>MobilitaPalermoRss</h2>
-->          
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
   <?php

$url = "http://feeds.feedburner.com/Palermo-LiveSicilia";
$rss = simplexml_load_file($url);
if($rss)
{
  echo '<div id="head-logo">';
  	echo '<h1>'.'<img src="img/live_sicilia.gif" alt="Live Sicilia"/>'.'</h1>';
  	echo '</div>';
/*  echo '<h1>'.$rss->channel->title.'</h1>';
*/  echo '<li>'.$rss->channel->item->pubDate.'</li>';
  $items = $rss->channel->item;
  $i=0;
  foreach($items as $item)
  {
	 if ($i <10){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
    $description = $item->description;
	
	echo '<div id="article">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
	echo '<br>';
    echo '<span>('.$published_on.')</span>';
	echo '<br>';
	echo '</div>';
	
/*    echo '<p>'.$description.'</p>';
*//*	echo $content->encoded;
*/ 
	$i=$i+1; // lo stesso di $i=++;
	 }
  }
}

?>     
        
          <!--<h2>Heading</h2>-->
          
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; PalermoUP 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
<!--        <script src="js/bootstrap-carousel.js"></script>
-->
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
