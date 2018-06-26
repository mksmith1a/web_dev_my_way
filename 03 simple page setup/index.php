<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demotek Homepage</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
		body, html {
		    margin:0; padding:0; height:100%; width:100%;
			font-family:Tahoma, Geneva, sans-serif;
		} 
		html{
			height:100%;
		}
		body {
		    min-height: 100%;
		    text-align:center;
		}
		h1,h2,h3,h4{margin:0px;padding:0px;}
		h1{ font-size:2.5em; }
		h2{ font-size:1.5em; }
		a{text-decoration:none}
		a:hover{text-decoration:underline}

		textarea, input[type=text], input[type=password]{
			border:none;
			border-bottom: 1px solid #000;	
			background:#F2F2F2;
		}
		hr{
			border:none;
			border-top:1px solid #000;	
			margin:0px;padding:0px;
		}
		@viewport{
		    zoom: 1.0;
		    width: extend-to-zoom;
		}
		@-ms-viewport{
		    width: extend-to-zoom;
		    zoom: 1.0;
		}
		.panel{
		    text-align: center;
		    width: 100%;	
			background:white;
			color:black;
			display:block;
			margin:0px auto;
			min-width:300px;
		}
		.ipanel{
			text-align:left;
			padding:10px 20%;
		}
	</style>
</head>
<body>
	<div class="panel" id="aboutdiv"><div class="ipanel" >This is About Div</div></div>
	<div class="panel" id="mapdiv"><div class="ipanel" >This is Map Div</div></div>
	<div class="panel" id="socialmediadiv"><div class="ipanel" >This is Social Media Div</div></div>
	<div class="panel" id="contactdiv"><div class="ipanel" >This is Contact Div</div></div>
	<div class="panel" id="footerdiv"><div class="ipanel" >This is Footer Div</div></div>
</body>
</html>