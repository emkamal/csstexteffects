<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>CSSTextEffects</title>
	
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Geo&v1' rel='stylesheet' type='text/css'>
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html15.js"></script>
	<![endif]-->
	<!--[if lte IE 7]>
		<script src="js/IE8.js" type="text/javascript"></script>
	<![endif]-->
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/>
	<![endif]-->
	
</head>

<body>
	<div class="topbar"></div>
	<div class="topbar2"></div>

	<div class="leftbar">
		<a class="cteicon" href="">CTE</a>
	</div>
	
	<div class="rightbar">
		<h1 class="logo">
			<a href="#">CSSTextEffects<small>.com</small></a>
			<span>Complete CSS 3 Text Effects Collection</span>
		</h1>
		<ul class="topmenu">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Advertise</a></li>
		</ul>
		
		<div class="choicesouter">
		<h2>Choose text effects</h2>
		<div class="triangle1"></div>
		<ul class="choices">
			<li><a href="" title="Border" class="border">Border</a></li>
			<li><a href="" title="Pixel Border" class="pixelborder">Pixel Border</a></li>
			<li><a href="" title="Vibrate" class="vibrate">Vibrate</a></li>
			<li><a href="" title="3D Text" class="threed">3D Text</a></li>
			<li><a href="" title="Gradient" class="gradient">Gradient</a></li>
			<li><a href="" title="Crystal" class="crystal">Crystal</a></li>
			<li><a href="" title="Metal" class="metal">Metal</a></li>
			<li><a href="" title="Blur" class="blur">Blur</a></li>
			<li><a href="" title="Burn" class="burn">Burn</a></li>
			<li><a href="" title="Letterpress" class="letterpress">Letterpress</a></li>
			<li><a href="" title="Reflected" class="reflected">Reflected</a></li>
			<li><a href="" title="Shadow" class="shadow">Shadow</a></li>
			<li><a href="" title="Stereoscopic" class="stereoscopy">Stereoscopic</a></li>
			<li><div><a title="Brick" class="brick">Brick</a></div></li>
			<li><a href="" title="Fire" class="fire">Fire</a></li>
		</ul>
		<div class="triangle2"></div>
		</div>
		
		<div class="infopanel">
		
		
		<div class="panelitem" id="panelitem1">
			<h3>Hover one of these text effect to see the CSS Code...</h3>
		</div>
		
		
		
		<div class="panelitem" id="border-panel">
			<div class="showpanel">
				<h3>CSS Border Text Effects</h3>
			</div>
			<table>
				<caption>Browsers compatibility</caption>
				<tr>
					<th><img src="images/firefox.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/chrome.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/safari.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/opera.png" /></th><td><img src="images/yes.png" /></td>
				</tr>
			</table>
			<p>Simple border text effect using multiple css text-shadow technique.</p>
			
			<a class="button" href="#">Copy</a><br/>
			<textarea>
.border{
	color: #fff; 
	text-shadow: 0 -1px 0 #000, 1px 0 0 #000, 0 1px 0 #000, -1px 0 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, 1px 1px 0 #000, -1px 1px 0 #000;
}
.border:hover{
	color: #fff;
	text-shadow: 0 -1px 0 #000, 1px 0 0 #000, 0 1px 0 #000, -1px 0 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, 1px 1px 0 #000, -1px 1px 0 #000
				,0 -2px 0 #000, 2px 0 0 #000, 0 2px 0 #000, -2px 0 0 #000, -2px -2px 0 #000, 2px -2px 0 #000, 2px 2px 0 #000, -2px 2px 0 #000;
}
			</textarea>
		</div>
		
		<div class="panelitem" id="pixelborder-panel">
			<div class="showpanel">
				<h3>CSS Pixel Border Text Effects</h3>
			</div>
			<table>
				<caption>Browsers compatibility</caption>
				<tr>
					<th><img src="images/firefox.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/chrome.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/safari.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/opera.png" /></th><td><img src="images/yes.png" /></td>
				</tr>
			</table>
			<p>Same as the border text effect but this one is simpler as no additional diagonal oriented text-shadow upon it. Thus, creating a pixelated effect.</p>
			
			<a class="button" href="#">Copy</a><br/>
			<textarea>
.pixelborder{
	text-shadow: 0 -1px 0 #000, 1px 0 0 #000, 0 1px 0 #000, -1px 0 0 #000;
}
.pixelborder:hover{
	text-shadow: 0 -1px 0 #000, 1px 0 0 #000, 0 1px 0 #000, -1px 0 0 #000
				,0 -2px 0 #000, 2px 0 0 #000, 0 2px 0 #000, -2px 0 0 #000;
}
			</textarea>
		</div>
		
		<div class="panelitem" id="vibrate-panel">
			<div class="showpanel">
				<h3>CSS Vibrate Text Effects</h3>
			</div>
			<table>
				<caption>Browsers compatibility</caption>
				<tr>
					<th><img src="images/firefox.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/chrome.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/safari.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/opera.png" /></th><td><img src="images/yes.png" /></td>
				</tr>
			</table>
			<p>Nice and simple looking vibrate text effect created genuinely with CSS 3 with the magic of text-shadow.</p>
			
			<a class="button" href="#">Copy</a><br/>
			<textarea>
.vibrate{
	text-shadow: 0 1px 0 #000, 0 -1px 0 #000, 1px 0 0 #000, -1px 0 0 #000, 0 2px 0 #fff, 0 -2px 0 #fff, 2px 0 0 #fff, -2px 0 0 #fff, 0 3px 0 #777, 0 -3px 0 #777, 3px 0 0 #777, -3px 0 0 #777;
}
.vibrate:hover{
	text-shadow: 0 1px 0 #000, 0 -1px 0 #000, 1px 0 0 #000, -1px 0 0 #000, 0 2px 0 #fff, 0 -2px 0 #fff, 2px 0 0 #fff, -2px 0 0 #fff, 0 3px 0 #777, 0 -3px 0 #777, 3px 0 0 #777, -3px 0 0 #777, 0 4px 0 #fff, 0 -4px 0 #fff, 4px 0 0 #fff, -4px 0 0 #fff, 0 5px 0 #777, 0 -5px 0 #777, 5px 0 0 #777, -5px 0 0 #777;
}
			</textarea>
		</div>
		
		<div class="panelitem" id="threed-panel">
			<div class="showpanel">
				<h3>CSS 3D Text Effects</h3>
			</div>
			<table>
				<caption>Browsers compatibility</caption>
				<tr>
					<th><img src="images/firefox.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/chrome.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/safari.png" /></th><td><img src="images/yes.png" /></td>
					<th><img src="images/opera.png" /></th><td><img src="images/yes.png" /></td>
				</tr>
			</table>
			<p>Nice and simple looking vibrate text effect created genuinely with CSS 3 with the magic of text-shadow.</p>
			
			<a class="button" href="#">Copy</a><br/>
			<textarea>
.threed{
	text-shadow: 1px 1px 0px #555, 2px 2px 0px #555, 3px 3px 0px #555;
}
.threed:hover{
	text-shadow: 1px 1px 0px #555, 2px 2px 0px #555, 3px 3px 0px #fff;
}
			</textarea>
		</div>
		
		
		
		</div>
	
	</div>
	
	
	
<script type="text/javascript" src="script.js" ></script>
</body>
</html>