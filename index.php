<html>
<head>
	<title>Claes Gustaf Andersson</title>
	<meta charset='utf-8'/>

	<link rel = "shortcut icon" href = "file/favicon_C.png"/>
	<link rel = "stylesheet" type = "text/css" href="style.css"/>

</head>
<body>
<div align="center">
	<div class="banner" align="center">
                <span class="lowercase">
                    <span class="uppercase">C</span>LAES
                    <span class="uppercase">A</span>NDERSSON
                </span>
	</div>
	<div class="body" align="center">
		<div class="menu">
			<a href="index.php">Start</a> &bull; <a href="CV.php">CV</a> &bull; <a href="Projects.php">Projects</a>
		</div>
		<div class="content" align="left" >
			<h1>HEJ!</h1>
			Nu är det typ som det var innan. Lite andra färger bara, men de e k!
			<br>
			<div id="demo"></div>
		</div>
	</div>
</div>
</body>
</html>

<script>
	document.getElementById("demo").innerHTML = "geh";
	alert("hej");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if (xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById("demo").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "server.php", true);
	xhttp.send();

</script>