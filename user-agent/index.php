<?php

echo "<html><!--only tekup agents are allowed to see this content--->
</html>";

if ($_SERVER['HTTP_USER_AGENT'] == 'tekup')
{
	echo "<h4>g00d j0b dude!! here is the flag, but can you read it??</h4><p>fTVUTjNHNF9SMzVVX1k1NDNQX3l6NDN7RlRDRkQ=</p>";
}
else
{
	echo "<h1><b>Internal Server Error</b></h1>\n<p>The Server encountered an internal error or misconfiguration and was unable to complete your request.<br><br>Please contact the server adminstrator and inform them of the time this error occured, and <br> the actiong you performed just before this error<br></p><hr>\n <address>Apache/2.4.53 Server at web.ctf.tekup.com Port 80 </adress> \n <p style='color:white'>don't get fooled bro <33, you better inspect this page!!</p>";
}
?>


