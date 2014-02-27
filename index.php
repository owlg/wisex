<?php
/** Loader Filename and Path **/
$sFile = "http://".$_SERVER['SERVER_NAME']."/game/gamefiles/loader_110610.swf";

$size = $_GET["size"];

/** Default Width and Height **/
$width = "960";
$height = "550";

/** Check Size **/
switch($size) {
	default:
		break;
	case 'large':
		$width = "1185";
		$height = "679";
		break;
	case 'huge':
		$width = "1792";
		$height = "1027";
		break;
	case 'tiny':
		$width = "706";
		$height = "405";
		break;
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>WiseX - Welcome</title>
<meta http-equiv=content-type content="text/html; charset=utf-8" />
<meta name=description content />
<meta name=keywords content />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel=stylesheet type=text/css />
<!--[if lte IE 8]><script src=js/html5shiv.js></script><![endif]-->
<script src=js/jquery.min.js></script>
<script src=js/jquery.dropotron.min.js></script>
<script src=js/skel.min.js></script>
<script src=js/skel-panels.min.js></script>
<script src=js/init.js></script>
<noscript>
<link rel=stylesheet href=css/skel-noscript.css />
<link rel=stylesheet href=css/style.css />
<link rel=stylesheet href=css/style-desktop.css />
<link rel=stylesheet href=css/style-noscript.css />
</noscript>
<!--[if lte IE 8]><link rel=stylesheet href=css/ie8.css /><![endif]-->
</head>
<body class=homepage>
<div id=header>
<div class=inner>
<header>
<h1><a href=# id=logo>WiseX</a></h1>
<hr />
<span class=byline>Start playing and enjoying the game.</span>
</header>
<footer>
<a href=#banner class="button circled scrolly">Start</a>
</footer>
</div>
<nav id=nav>
<ul>
<li><a href=index.html>Home</a></li>
<li>
<span>Dropdown</span>
<ul>
<li><a href=#>x</a></li>
<li><a href=#>xx</a></li>
<li><a href=#>xxx</a></li>
<li>
<span>submenu &hellip;</span>
<ul>
<li><a href=#>x</a></li>
<li><a href=#>xx</a></li>
<li><a href=#>xxx</a></li>
<li><a href=#>xxxx</a></li>
</ul>
</li>
<li><a href=#>dzx</a></li>
</ul>
</li>
<li><a href=left-sidebar.html>Left Sidebar</a></li>
<li><a href=right-sidebar.html>Right Sidebar</a></li>
<li><a href=no-sidebar.html>No Sidebar</a></li>
</ul>
</nav>
</div>
<div id=banner>
<h2>Hi. Start playing <strong>WiseX</strong>.</h2>
<span class=byline>
Best template built by <a href=http://owlg.org/>OWLG</a> with collaboration with <a href=http://www.fb.com/aqwps/>WiseX</a> and Wise Entertainment.
Built on skelJS</a>
</span>
</div>
<div class=carousel>
<div class=reel>
<article>
<a href=http://mdomaradzki.deviantart.com/art/Bueller-III-351975087 class="image featured"><img src=images/pic01.jpg alt /></a>
<header>
<h3><a href=#>Pulvinar sagittis congue</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/Disco-351602759 class="image featured"><img src=images/pic02.jpg alt /></a>
<header>
<h3><a href=#>Fermentum sagittis proin</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/The-Patina-of-Time-and-Tide-352128094 class="image featured"><img src=images/pic03.jpg alt /></a>
<header>
<h3><a href=#>Sed quis rhoncus placerat</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/Cityparts-XVIII-350427779 class="image featured"><img src=images/pic04.jpg alt /></a>
<header>
<h3><a href=#>Ultrices urna sit lobortis</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/Vine-Country-381350120 class="image featured"><img src=images/pic05.jpg alt /></a>
<header>
<h3><a href=#>Varius magnis sollicitudin</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/Bueller-III-351975087 class="image featured"><img src=images/pic01.jpg alt /></a>
<header>
<h3><a href=#>Pulvinar sagittis congue</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/Disco-351602759 class="image featured"><img src=images/pic02.jpg alt /></a>
<header>
<h3><a href=#>Fermentum sagittis proin</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/The-Patina-of-Time-and-Tide-352128094 class="image featured"><img src=images/pic03.jpg alt /></a>
<header>
<h3><a href=#>Sed quis rhoncus placerat</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/Cityparts-XVIII-350427779 class="image featured"><img src=images/pic04.jpg alt /></a>
<header>
<h3><a href=#>Ultrices urna sit lobortis</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
<article>
<a href=http://mdomaradzki.deviantart.com/art/Vine-Country-381350120 class="image featured"><img src=images/pic05.jpg alt /></a>
<header>
<h3><a href=#>Varius magnis sollicitudin</a></h3>
</header>
<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
</article>
</div>
</div>
<div id=fb-root></div>
<script>(function(e,a,f){var c,b=e.getElementsByTagName(a)[0];if(e.getElementById(f)){return}c=e.createElement(a);c.id=f;c.src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=468230926614503";b.parentNode.insertBefore(c,b)}(document,"script","facebook-jssdk"));</script>
<div id=fb-root></div>
<script>(function(e,a,f){var c,b=e.getElementsByTagName(a)[0];if(e.getElementById(f)){return}c=e.createElement(a);c.id=f;c.src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=468230926614503";b.parentNode.insertBefore(c,b)}(document,"script","facebook-jssdk"));</script>
<div class=fb-like-box data-href=http://www.facebook.com/aqwps data-width=500 data-height=280 data-colorscheme=light data-show-faces=false data-header=true data-stream=true data-show-border=true></div>
<div class="wrapper style2">
<article id=main class="container special">
<div align=center>
<table width="<?php $width ?> border="4" cellspacing=0 cellpadding=0 id=aqw>
<tr>
<td align=right>
<div id=flashContent name=flashContent>
<h1>You need at least Flash Player 9.0 to view this page.</h1>
<p><a href=http://www.adobe.com/go/getflashplayer><img src=http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif alt="Get Adobe Flash player" /></a></p>
</div>
<script type=text/javascript>var params={LOOP:"false",SCALE:"exactfit",allowScriptAccess:"always",allowFullScreen:"true",menu:"false",flashvars:"",wmode:"window"};swfobject.embedSWF("<?php echo $sFile; ?>","flashContent","<?php echo $width; ?>","<?php echo $height; ?>","9.0",null,null,params,{name:"flashContent"});</script>
<noscript>
<object classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 id=u35941 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" bgcolor=#FFFFFF width=<?php echo $width; ?> height=<?php echo $height; ?>>
<param name=movie value=<?php echo $sFile; ?> />
<param name=LOOP value=false />
<param name=SCALE value=exactfit />
<param name=allowScriptAccess value=always />
<param name=allowFullScreen value=true />
<param name=menu value=false />
<param name=wmode value=window />
<param name=FlashVars value />
<embed src=<?php echo $sFile; ?> bgcolor=#FFFFFF width=<?php echo $width; ?> height=<?php echo $height; ?> loop=false pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type=application/x-shockwave-flash scale=exactfit allowscriptaccess=always allowFullScreen=true menu=false flashvars></embed>
</object>
</noscript>
<br/>
</td>
</tr>
</table>
<br/>
<table width=<?php if($size=="tiny"){ echo "960"; } else { echo $width; }?> border=0 cellspacing=0 cellpadding=0>
<header>
<h2><a href=#>Sed massa imperdiet magnis</a></h2>
<span class=byline>
Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
</span>
</header>
<p>
Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
natoque aenean scelerisque.
</p>
<footer>
<a href=# class=button>Continue Reading</a>
</footer>
</article>
</div>
<div class="wrapper style1">
<section id=features class="container special">
<header>
<h2>Morbi ullamcorper et varius leo lacus</h2>
<span class=byline>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</span>
</header>
<div class=row>
<article class="4u special">
<a href=http://mdomaradzki.deviantart.com/art/Bueller-VII-351975126 class="image featured"><img src=images/pic07.jpg alt /></a>
<header>
<h3><a href=#>Gravida aliquam penatibus</a></h3>
</header>
<p>
Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
</p>
</article>
<article class="4u special">
<a href=http://mdomaradzki.deviantart.com/art/Home-Bound-Train-II-338912191 class="image featured"><img src=images/pic08.jpg alt /></a>
<header>
<h3><a href=#>Sed quis rhoncus placerat</a></h3>
</header>
<p>
Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
</p>
</article>
<article class="4u special">
<a href=http://mdomaradzki.deviantart.com/art/Up-is-Down-325005102 class="image featured"><img src=images/pic09.jpg alt /></a>
<header>
<h3><a href=#>Magna laoreet et aliquam</a></h3>
</header>
<p>
Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
</p>
</article>
</div>
</section>
</div>
<div id=footer>
<div class=container>
<div class=row>
<section class=4u>
<header>
<h2 class="fa fa-twitter circled solo"><span>Tweets</span></h2>
</header>
<ul class=divided>
<li>
<article class=tweet>
Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
<span class=timestamp>5 minutes ago</span>
</article>
</li>
<li>
<article class=tweet>
Hendrerit rutrum quisque.
<span class=timestamp>30 minutes ago</span>
</article>
</li>
<li>
<article class=tweet>
Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
<span class=timestamp>3 hours ago</span>
</article>
</li>
<li>
<article class=tweet>
Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
<span class=timestamp>5 hours ago</span>
</article>
</li>
</ul>
</section>
<section class=4u>
<header>
<h2 class="fa fa-file circled solo"><span>Posts</span></h2>
</header>
<ul class=divided>
<li>
<article class="post stub">
<header>
<h3><a href=#>Nisl fermentum integer</a></h3>
</header>
<span class=timestamp>3 hours ago</span>
</article>
</li>
<li>
<article class="post stub">
<header>
<h3><a href=#>Phasellus portitor lorem</a></h3>
</header>
<span class=timestamp>6 hours ago</span>
</article>
</li>
<li>
<article class="post stub">
<header>
<h3><a href=#>Magna tempus consequat</a></h3>
</header>
<span class=timestamp>Yesterday</span>
</article>
</li>
<li>
<article class="post stub">
<header>
<h3><a href=#>Feugiat lorem ipsum</a></h3>
</header>
<span class=timestamp>2 days ago</span>
</article>
</li>
</ul>
</section>
<section class=4u>
<header>
<h2 class="fa fa-camera circled solo"><span>Photos</span></h2>
</header>
<div class="row quarter no-collapse">
<div class=6u>
<a href=http://mdomaradzki.deviantart.com/art/Air-Lounge-385212062 class="image full"><img src=images/pic10.jpg alt /></a>
</div>
<div class=6u>
<a href=http://mdomaradzki.deviantart.com/art/Paris-City-Streets-II-382623606 class="image full"><img src=images/pic11.jpg alt /></a>
</div>
</div>
<div class="row quarter no-collapse">
<div class=6u>
<a href=http://mdomaradzki.deviantart.com/art/Trainride-Visions-383309985 class="image full"><img src=images/pic12.jpg alt /></a>
</div>
<div class=6u>
<a href=http://mdomaradzki.deviantart.com/art/Paris-Metro-382623851 class="image full"><img src=images/pic13.jpg alt /></a>
</div>
</div>
<div class="row quarter no-collapse">
<div class=6u>
<a href=http://mdomaradzki.deviantart.com/art/Cliffs-of-Coogee-II-366961860 class="image full"><img src=images/pic14.jpg alt /></a>
</div>
<div class=6u>
<a href=http://mdomaradzki.deviantart.com/art/Stormy-Coast-VII-366561367 class="image full"><img src=images/pic15.jpg alt /></a>
</div>
</div>
</section>
</div>
<hr />
<div class=row>
<div class=12u>
<section class=contact>
<header>
<h3>Nisl turpis nascetur interdum?</h3>
</header>
<p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
<ul class=icons>
<li><a href=# class="fa fa-twitter solo"><span>Twitter</span></a></li>
<li><a href=http://www.fb.com/aqwps/ class="fa fa-facebook solo"><span>Facebook</span></a></li>
<li><a href=# class="fa fa-google-plus solo"><span>Google+</span></a></li>
<li><a href=# class="fa fa-pinterest solo"><span>Pinterest</span></a></li>
<li><a href=# class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
<li><a href=# class="fa fa-linkedin solo"><span>Linkedin</span></a></li>
</ul>
</section>
<div class=copyright>
<ul class=menu>
<li>&copy; WiseX. All rights reserved.</li>
<li>Design: <a href=http://owlg.org/>OWLG</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
