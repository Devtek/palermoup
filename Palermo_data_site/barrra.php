<html>
<head>
    <title>Pagina di reindirizzamento</title>
    <script type="text/javascript">
    function countdown(){
	var ora = parseFloat(document.rovescia.conto.value);
	ora = ora + 0.5;
	document.rovescia.conto.value=ora;
	var g_c = ora*3;
	document.getElementById("barra").innerHTML="<div style='height:10px; width:"+g_c+"px; background-color:#FF0000'></div>";
	if(ora==60){
		location.href = "index.php";
	}
	conto = setTimeout("countdown()",100);
    }
    </script>
</head>
<body>
Stai per essere reindirizzato alla pagina corretta...
<br/>
<form name='rovescia' action='#'>
    <input type='hidden' name='conto' value='0'/>
</form>
<div class='barra' id='barra' style='border:1px solid #000000; width:180px;'>
<script type="text/javascript">
    countdown();
</script>
</body>
</html>