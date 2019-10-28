<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="favicon.png">
<meta charset="utf-8">
<meta name="description" content="San More Games - Game Development Company">
<title>San More Games</title>

<script>
var lng = navigator.language;

switch (lng){
  case 'uk':  window.location.href = "https://sanmoregames.github.io/ua/"
                  break;
  case 'uk-UA':  window.location.href = "https://sanmoregames.github.io/ua/"
                  break;
  case 'ru': window.location.href = "https://sanmoregames.github.io/ru/";
                  break;
  case 'ru-ru':    window.location.href = "https://sanmoregames.github.io/ru/";
                  break;
  default:  window.location.href = "https://sanmoregames.github.io/en/";
 
}
</script>

<style>
* {box-sizing:border;}
body {color:#333; background-color:#eee; position:fixed; overflow:auto; left:0; top:0; width:100%; height:100%;}
a {text-decoration:none;}
a:hover {text-decoration:underline;}
img {vertical-align:middle; margin-left:10px}
h3 {display:inline;}
#con {position:absolute; left:50%; top:50%; margin:-202px 0 0 -234px;}
#splash {background-color: #fff; width: 450px; height: 370px; text-align:center; background-color:#fff;
font-family:sans-serif; box-shadow:#333 0 0 20px; padding-top:20px;}
.flag {box-shadow:#333 0 0 3px;}
</style>
</head>
<body>
<noscript>
<div id="con">
<div id="splash">
<img src="/img/Logo.jpg" width="100" height="100" id="logo" alt="Logo">
<h1>San More Games</h1>
<h2>Choise you language:</h2>
<a href="http://www.sanmoregames.com/ua/">
<h3>Ukrainian<img class="flag" src="/img/ua.jpg" width="30" height="20" alt="UA"></h3></a>
<br><br>
<a href="http://www.sanmoregames.com/en/">
<h3>English<img class="flag" src="/img/en.jpg" width="38" height="20" alt="EN"></h3></a>
<br><br>
<a href="http://www.sanmoregames.com/ua/">
<h3>Russian<img class="flag" src="/img/ru.png" width="30" height="20" alt="RU"></h3></a>
</div>
</div>
</noscript>
</body>
</html>
