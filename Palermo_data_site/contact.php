
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


		<link href='overlaypopup.css' rel='stylesheet' type='text/css'>



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

    <!-- Custom styles for this template -->
	    <script type="text/javascript" src="custom.js"></script>

	<script>
if( 
 navigator.userAgent.match(/Android/i) || 
 navigator.userAgent.match(/webOS/i) || 
 navigator.userAgent.match(/iPhone/i) || 
 navigator.userAgent.match(/iPod/i) || 
 navigator.userAgent.match(/BlackBerry/i)
){
location.href="http://127.0.0.1/Palermo_data_site/index.php";
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
  
    <div class="navbar-wrapper">
	<div class="overlay-bg">
	<div class="overlay-content">
	</div>
</div>
      <div class="container">
<!--  =========    START nav bar	========= -->
<ul class="nav navbar-nav upstyle-nav">
                <li class="active"><a name="top" href="index.php"><img src="img/home_btn.png"></a></li>
                <li><a href="about.php">About</a></li>
                <li><a  style="background-color: #ffffff;">Contact</a></li>
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
              <p>Cultura, SocietÃ , Sport e tanto altro. Tieniti sempre informato su PalermoUp!</p>
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
			  			  	
              <p>SocietÃ , Sport, cultura e tanto altro. Rimani informato su Palermo in un unico posto!</p>
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
			  			  	
            <p>SocietÃ , Sport, cultura e tanto altro. Rimani informato su Palermo in un unico posto!</p>
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

      <div class="row" id="segnala">
        <div class="col-lg-12 backgroundSection">
		 
	<div class="container">
	
        <div class="page-header backtotop" >
            <h1>Scrivici</h1>
        </div>
<?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div id=\"open_here\" class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div id=\"open_here\" class=\"alert alert-error\">".$_GET['e']."</div>";  
  
?>  
        <form method="POST" action="contact-form-submission.php" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input1">Name</label>
                <div class="controls"> <a name="mio"></a>
                    <input type="text" name="contact_name" id="input1" placeholder="Il tuo nome">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input2">Email Address</label>
                <div class="controls">
                    <input type="text" name="contact_email" id="input2" placeholder="Il tuo indirizzo e-mail">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input3">Message</label>
                <div class="controls">
                    <textarea name="contact_message" id="input3" rows="8" class="col-lg-12" placeholder="Scrivi qui il tuo messaggio."></textarea>
                </div>
            </div>
            <div class="form-actions">
                <input type="hidden" name="save" value="contact">
              <button type="submit" class="btn btn-primary" style="margin-top:5px">send</button>
            </div>
        </form>
        
    </div>
        
		</div> 
		</div>

  
        
          <!--<h2>Heading</h2>-->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer class="row">
<div class="col-xs-6 col-sm-3">
	  <ul>
		<h1>Site map</h1>
		<li>
        <a href="index.php">HOME</a>
		</li>
		<li>
        <a href="about.php">ABOUT</a>
		</li>
		<li>
        <a href="contact.php"><b>CONTACT</b></a>
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
				<a href="http://www.addiopizzo.org/	">Addio Pizzo</a>
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
<a href="#top" class="backtotop"><img src="img/logoworking2.png"></a>
</div>
<div class="col-xs-6 col-sm-12" style="text-align:right;">
		        <p>PalermoUp - l.633/1941 diritti dâ€™autore riservati - 2014Â© <a href="contact.php#segnala">Segnala errori</a></p>
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
