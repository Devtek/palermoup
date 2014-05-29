
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
				    <link href="css/carousel.css" rel="stylesheet">


    <title>Palermo - UP</title>
			<link rel="Shortcut Icon" href="img/favicon.ico"></link>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template NON ANCORA ATTIVO PER SMARTPHONE-->
	    <script type="text/javascript" src="custom.js"></script>

	<script>
if( 
 navigator.userAgent.match(/Android/i) || 
 navigator.userAgent.match(/webOS/i) || 
 navigator.userAgent.match(/iPhone/i) || 
 navigator.userAgent.match(/iPod/i) || 
 navigator.userAgent.match(/BlackBerry/i)
){
location.href="../index_mobile";
}</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47721398-1', 'palermoup.it');
  ga('send', 'pageview');

</script>

  </head>
<!-- NAVBAR
================================================== -->
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="navbar-wrapper">
	
      <div class="container">
<!--  =========    START nav bar	========= -->
<ul class="nav navbar-nav upstyle-nav">
                <li class="active"><a name="top" style="background-color: #ffffff;"><img src="img/home_btn.png"></a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!--<h1>Palermo'Up</h1>-->
               
              </ul> 
<!--  =========    END nav bar	========= -->

       <!-- <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Palermo - UP</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
               
              </ul>
            </div>
          </div>
        </div>-->

      </div>
    </div>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4100" data-pause="hover">     


      <!-- Indicators -->
     
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner">
		
        <div class="item active">
          <img src="img/cattedrale.jpg" alt="First slide">
          <div class="container">
		  
            <div class="carousel-caption" >
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
			<script type="text/javascript">
			$(document).ready(function(){	
				$('.example1').hide().before(' <a href="#" id="open-example1" class="btn btn-warning dropdown-toggle"><img src="img/sun.png"/></a>');
				$('.example1').append('<a href="#close-example1" id="close-example1" class="btn btn-danger dropdown-toggle">Close</a>');
				$('a#open-example1').click(function() {
					$('.example1').slideDown(1000);
					return false;
				});
				$('a#close-example1').click(function() {
					$('.example1').slideUp(1000);
					return false;
				});
			});
			</script>

			<script type="text/javascript"> //torna su jquery
			//onnipresente document ready per aspettare il caricamento del dom
$(document).ready(function(){
    //evento click sul nostro collegamento (in questo caso si usa come identificatore la classe backtotop)
    $(".backtotop").unbind("click").bind("click", function(){
         //se amate la semplicità potevamo anche usare il metodo $(".backtotop").click(function(){   con questo script invece ci copriamo da eventuali problemi di altri binding
         //qui avviene la vera operazione. animiamo la pagina (dobbiamo animare sia il body sia la pagina per differenze di interpretazione tra i browser) per scrollare fino in cima
         //animate è il metodo dell'oggetto jquery per animare l'elemento: tra parentesi graffe ci sono li effetti che l'animazione produrrà (in questo caso lo scrollTop controlla la barra di scorrimento verticale) dopo la virgola il tempo in millisecondi che impiegherà l'animazione a completarsi.
         $('html, body').animate({scrollTop:0}, 400);
    })
})
			</script>

			<div class="example1" style="display:none;" >
						<div>
			<!-- Inizio codice ilMeteo.it --> <iframe width="200" height="125" scrolling="no" frameborder="no" noresize="noresize" src="http://www.ilmeteo.it/box/previsioni.php?citta=4937&type=real1&width=200&ico=3&lang=ita&days=6&font=Arial&fontsize=11&bg=FFFFFF&fg=000000&bgtitle=0099FF&fgtitle=FFFFFF&bgtab=F0F0F0&fglink=1773C2"></iframe>
			<!-- Fine codice ilMeteo.it -->
						</div>
			</div>
							<div style="float:left; margin:0px auto; width:100%; height:200px; background-image:url('img/logoworking2.png'); background-repeat:no-repeat; background-position: center;   background-color: rgba(250,250,225,0.7); border-radius: 5px;
"></div>
			  <p><?php setlocale(LC_TIME, 'ita', 'it_IT');
		echo utf8_encode(strftime("%A %d %B %Y"));
				?>
			  </p>
              <p>Cultura, Società, Sport e tanto altro. Tieniti sempre informato su PalermoUp!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/74668689.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
			
			<div class="example1" style="display:none;" >
						<div>
			<!-- Inizio codice ilMeteo.it --> <iframe width="200" height="125" scrolling="no" frameborder="no" noresize="noresize" src="http://www.ilmeteo.it/box/previsioni.php?citta=4937&type=real1&width=200&ico=3&lang=ita&days=6&font=Arial&fontsize=11&bg=FFFFFF&fg=000000&bgtitle=0099FF&fgtitle=FFFFFF&bgtab=F0F0F0&fglink=1773C2"></iframe>
			<!-- Fine codice ilMeteo.it -->
						</div>
			</div>
							<div style="float:left; margin:0px auto; width:100%; height:200px; background-image:url('img/logoworking2.png'); background-repeat:no-repeat; background-position: center;   background-color: rgba(250,250,225,0.7); border-radius: 5px;
"></div>
              <p><?php setlocale(LC_TIME, 'ita', 'it_IT');
		echo utf8_encode(strftime("%A %d %B %Y"));
				?>
			  </p>
			  			  	
              <p>Società, Sport, cultura e tanto altro. Rimani informato su Palermo in un unico posto!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/carretto.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
			
			<div class="example1" style="display:none;" >
						<div>
			<!-- Inizio codice ilMeteo.it --> <iframe width="200" height="125" scrolling="no" frameborder="no" noresize="noresize" src="http://www.ilmeteo.it/box/previsioni.php?citta=4937&type=real1&width=200&ico=3&lang=ita&days=6&font=Arial&fontsize=11&bg=FFFFFF&fg=000000&bgtitle=0099FF&fgtitle=FFFFFF&bgtab=F0F0F0&fglink=1773C2"></iframe>
			<!-- Fine codice ilMeteo.it -->
						</div>
			</div>
							<div style="float:left; margin:0px auto; width:100%; height:200px; background-image:url('img/logoworking2.png'); background-repeat:no-repeat; background-position: center;   background-color: rgba(250,250,225,0.7); border-radius: 5px;
"></div>
              <p><?php setlocale(LC_TIME, 'ita', 'it_IT');
		echo utf8_encode(strftime("%A %d %B %Y"));
			    //echo (date("d-m-y"));
				?>
			  </p>
			  			  	
            <p>Società, Sport, cultura e tanto altro. Rimani informato su Palermo in un unico posto!</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
	        
		<!-- PalermoToday -->

      <div class="row">
        <div class="col-lg-4">
          <?php
	setlocale(LC_TIME, 'ita', 'it_IT');

		function rssDate($timestamp=null)
    {
        /*** set the timestamp ***/
        $timestamp = ($timestamp==null) ? time() : $timestamp;
        /*** Mon, 02 Jul 2009 11:36:45 +0000 ***/
		setlocale(LC_TIME, 'ita', 'it_IT');
		//echo strftime("%A %d %B %Y");
		echo utf8_encode(strftime("%A %d %B %Y"));
        //return date('D d M Y H:i', $timestamp);
		//DATE_RSS		
    }
		  
error_reporting(0);
$url = "http://www.palermotoday.it/rss";
$rss = simplexml_load_file($url);

if($rss)
{
  /*echo '<h1>'.$rss->channel->title.'</h1>';*/
  echo '<div class="head-logo">';
  echo '<h1>'.'<img class="pt" src="img/palermo_today.png" alt="Palermo today"/>'.'</h1>';
  echo '</div>';
  /*echo '<li>'.$rss->channel->pubDate.'</li>';*/
  $items = $rss->channel->item;
  $i=0;
  $j=3;
foreach ($items as $item)
  {
	 if ($i <3){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
	$published_on = strftime("%A %d %B %Y", strtotime($published_on));
	$published_off = utf8_encode($published_on);
    $description = $item->description;
	$fbsharePT = '<div class="fb-share-button" data-href="'.$link.'" data-type="icon_link"></div>';
	echo '<div class="feed1">';
    echo '<h3 class="news"><a href="'.$link.'">'.$title.'</a></h3>';
	/*echo '<br>';*/
    echo '<span>('.$published_off.')</span>';
	//echo rssDate();
	echo $fbsharePT;
	echo '<br>';
   	/*echo '<div id="ptimg" class="hide-text">'.$content->encoded.'</div>';*/
	/*echo '<br>';*/
/*    echo '<p>'.$description.'</p>';
*/	echo '</div>';	
	 $i=$i+1; // lo stesso di $i=++;
	 }


  }
  /* CODE ADDED 1 */
  foreach ($items as $item)
  {
	 if ($j <10){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
	$published_on= strftime("%A %d %B %Y", strtotime($published_on));
	$published_off = utf8_encode($published_on);
    $description = $item->description;
	$fbsharePT = '<div class="fb-share-button" data-href="'.$link.'" data-type="icon_link"></div>';
	echo '<div class="feed1">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
	/*echo '<br>';*/
    echo '<span>('.$published_off.')</span>';
	echo $fbsharePT;
	echo '<br>';
   	/*echo '<div id="ptimg" class="hide-text">'.$content->encoded.'</div>';*/
	/*echo '<br>';*/
/*    echo '<p>'.$description.'</p>';
*/	echo '</div>';	
	 $j=$j+1; // lo stesso di $i=++;
	 }

  }
}/*DONT DELETE*/
			else
			 {
			  echo '<div id="errormess"></div>'; /*Is not working message*/
			 }
?>

          <!--<h2>PalermoTodayRss</h2>-->
        <p><a class="btn btn-default" href="http://www.palermotoday.it">Vai a PalermoToday &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
		<!-- END PalermoToday -->
		
		<!-- MobilitaPalermo -->

        <div class="col-lg-4">
          
		  
		  <?php
setlocale(LC_TIME, 'ita', 'it_IT');
error_reporting(0);
$url = "http://www.mobilitapalermo.org/mobpa/feed";
$rss = simplexml_load_file($url);
if($rss)
{
	echo '<div class="head-logo">';
  	echo '<h1>'.'<img class="pt" src="img/Mobilita_palermo.png" alt="Mobilita palermo"/>'.'</h1>';
  	echo '</div>';
 	/*echo '<li>'.$rss->channel->item->pubDate.'</li>';*/
  $items = $rss->channel->item;
  $i=0;
  $j=3;
foreach($items as $item)
  {
	if ($i <3){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
		$published_on= strftime("%A %d %B %Y", strtotime($published_on));
	$published_off = utf8_encode($published_on);
	$fbshareMP = '<div class="fb-share-button" data-href="'.$link.'" data-type="icon_link"></div>';

/*    $description = $item->description;
*/	
	echo '<div class="feed2">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
    /*echo '<br>';*/
    echo '<span>('.$published_off.')</span>';
	//echo rssDate();
	echo $fbshareMP;

	echo '<br>';
/*    echo '<p>'.$description.'</p>';
*/	
/*	echo $content->encoded;
*/ 
		echo '</div>';

	$i=$i+1; // lo stesso di $i=++;
	 }
  }
    /* CODE ADDED 2*/
  foreach ($items as $item)
  {
	 if ($j <10){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
	$published_on= strftime("%A %d %B %Y", strtotime($published_on));
	$published_off = utf8_encode($published_on);
    $description = $item->description;
	$fbsharePT = '<div class="fb-share-button" data-href="'.$link.'" data-type="icon_link"></div>';
	echo '<div class="feed2">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
	/*echo '<br>';*/
    echo '<span>('.$published_off.')</span>';
	//echo rssDate();
	echo $fbshareMP;
	echo '<br>';
   	/*echo '<div id="ptimg" class="hide-text">'.$content->encoded.'</div>';*/
	/*echo '<br>';*/
/*    echo '<p>'.$description.'</p>';
*/	echo '</div>';	
	 $j=$j+1; // lo stesso di $i=++;
	 }

  }
}/*DONT DELETE*/
 
			else
			 {
			  echo '<div id="errormess"></div>'; /*Is not working message*/
			 }
?>
        
<!--          <h2>MobilitaPalermoRss</h2>
-->          
          <p><a class="btn btn-default" href="bilitapalermo.org/mobpa/">Vai a MobilitaPalermo &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
		
		<!-- Fine Mobilitapalermo -->
		
		<!-- LiveSicilia -->
        <div class="col-lg-4">
           <?php
setlocale(LC_TIME, 'ita', 'it_IT');
error_reporting(0);
$url = "http://feeds.feedburner.com/Palermo-LiveSicilia";
$rss = simplexml_load_file($url);
if($rss)
{
	echo '<div class="head-logo">';
  	echo '<h1>'.'<img class="pt" src="img/live_sicilia.gif" alt="Live Sicilia"/>'.'</h1>';
  	echo '</div>';
/*  echo '<h1>'.$rss->channel->title.'</h1>';
  echo '<li>'.$rss->channel->item->pubDate.'</li>';*/
  $items = $rss->channel->item;
  $i=0;
  $j=3;
  foreach($items as $item)
  {
	 if ($i < 3){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
	$published_on= strftime("%A %d %B %Y", strtotime($published_on));
	$published_off = utf8_encode($published_on);
    $description = $item->description;
	$fbshareLS = '<div class="fb-share-button" data-href="'.$link.'" data-type="icon_link"></div>';
	echo '<div class="feed3">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
	/*echo '<br>';*/
    echo '<span>('.$published_off.')</span>';
	//echo rssDate();
	echo $fbshareLS;

	echo '<br>';
	echo '</div>';
	
/*    echo '<p>'.$description.'</p>';
*//*	echo $content->encoded;
*/ 
	$i=$i+1; // lo stesso di $i=++;
	 }
  }
      /* CODE ADDED 3*/
  foreach ($items as $item)
  {
	 if ($j <10){
	$content = $item->children('http://purl.org/rss/1.0/modules/content/');
    $title = $item->title;
    $link = $item->link;
    $published_on = $item->pubDate;
	$published_on= strftime("%A %d %B %Y", strtotime($published_on));
	$published_off = utf8_encode($published_on);
    $description = $item->description;
	$fbsharePT = '<div class="fb-share-button" data-href="'.$link.'" data-type="icon_link"></div>';
	echo '<div class="feed3">';
    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
	/*echo '<br>';*/
    echo '<span>('.$published_off.')</span>';
	//echo rssDate();
	echo $fbshareLS;
	echo '<br>';
   	/*echo '<div id="ptimg" class="hide-text">'.$content->encoded.'</div>';*/
	/*echo '<br>';*/
/*    echo '<p>'.$description.'</p>';
*/	echo '</div>';	
	 $j=$j+1; // lo stesso di $i=++;
	 }

  }
}/*DONT DELETE*/
			else
			 {
			  echo '<div id="errormess"></div>'; /*Is not working message*/
			 }
?>     
          <p><a class="btn btn-default" href="http://livesicilia.it/palermo/" role="button">Vai a LiveSicilia &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
		<!-- END LiveSicilia -->

      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

 
      
        
<!--EMPTY PALERMOtd
-->        

        <div class="span4">
  
        
          <!--<h2>Heading</h2>-->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer class="row">
<div class="col-xs-6 col-sm-3">
	  <ul>
		<h1>Site map</h1>
		<li>
        <a href="index.php"><b>HOME</b></a>
		</li>
		<li>
        <a href="about.php">ABOUT</a>
		</li>
		<li>
        <a href="contact.php">CONTACT</a>
		</li>
		<li>
		</ul>
</div>
<div class="col-xs-6 col-sm-3">
				<ul>
				<h1>Siti Amici</h1>
				<li>
				<a href="https://www.facebook.com/groups/114470722033242/?fref=ts">Posteggiamo i posteggiatori</a>
				</li>
				<li>
				<a href="http://www.palermobugs.com/">Palermo bugs</a>
				</li>
				<li>
				<a href="http://www.addiopizzo.org/">Addio Pizzo</a>
				</li>
				<li>
				<a href="http://www.peppinoimpastato.com/">Peppino impastato</a>
				</li>
				<li>
				</ul>
</div>
<div class="col-xs-6 col-sm-4">
<a href="https://www.facebook.com/groups/114470722033242/?fref=ts"><img src="img/icone_siti_amici/posteggiamo.png"></a>
<a href="http://www.palermobugs.com/"><img src="img/icone_siti_amici/palermobugs2.png" style="padding:10px;"></a>
<a href="http://www.addiopizzo.org/"><img src="img/icone_siti_amici/banner5_sito.gif"></a>
</div>
<div class="col-xs-6 col-sm-4">
<a href="#top" class="backtotop"><img src="img/preview_link.png"></a>
</div>
<div class="col-xs-6 col-sm-12" style="text-align:right;">
		        <p>PalermoUp - l.633/1941 diritti d’autore riservati - 2014© <a href="contact.php#segnala">Segnala errori</a></p>
				<p style="margin-right:20px;"><a href="#top" class="backtotop"><img src="img/backtotop.png"></a></p>
</div>
      </footer>
	<!-- Inizio Codice ShinyStat -->
<div style="visibility:hidden">
<script type="text/javascript" src="http://codice.shinystat.com/cgi-bin/getcod.cgi?USER=Palermoup"></script>
<noscript>
<a href="http://www.shinystat.com/it" target="_top">
<div id="shiny"><img src="http://www.shinystat.com/cgi-bin/shinystat.cgi?USER=Palermoup" alt="Statistiche" border="0" /></div></a>
</noscript>
</div>
<!-- Fine Codice ShinyStat -->
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>

  </body>
</html>
