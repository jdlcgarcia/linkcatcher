<HTML>
<HEAD>
<TITLE>RSScatcher Blogspot Kyomu</TITLE>
</HEAD>
<BODY>
<ol>
<?php

$rssurl = $_GET["objetivo"];
$rssurl .= "/feeds/posts/default";
$rssurl .="?max-results=100";
$f = fopen($rssurl,'r');
$rss = ' ';
while (!feof($f)) {
	$rss = fgets($f, 4096);
//	if (preg_match("/http\:\/\/www\.megaupload\.com\//", $rss)) 
//		{
//		echo "<li>".$rss; 
//		}
	preg_match_all("/http\:\/\/www\.megaupload\.com\/\?d=......../",$rss,$enlaces,PREG_PATTERN_ORDER);
	if (isset($enlaces[0][0]))
		echo "<li>".$enlaces[0][0];
	else
	{
		
		echo "<li>"."no tiene enlace Megaupload";
	}
}
fclose($f);


?>
</ol>
</BODY>
</HTML>
