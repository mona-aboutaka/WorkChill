<html>
	<head>
		<title>Play</title>
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
		<style>
		
			body {
				font-family: 'Anton', sans-serif;
				margin: 10px auto;
				padding: 10px;
				background: url(bg.png);
				font-size: 14pt;				
			}
		</style>
		<script>
			function startTime() {
			    var today = new Date();
			    var h = today.getHours();
			    var m = today.getMinutes();
			    var s = today.getSeconds();
			    var month = today.getMonth() + 1;
				var day = today.getDate();
				var year = today.getFullYear();
			    m = checkTime(m);
			    s = checkTime(s);
			    document.getElementById('txt').innerHTML =
			    month + "/" + day + "/" + year + " @ " + h + ":" + m + ":" + s;
			    var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
			    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			    return i;
			}
		</script>
	</head>
	
	<body  onload="startTime()">
		<center><div id="txt"></div></center>
		<iframe id="image" src="images.php" style="height: 200px; width: 300px;" frameBorder="0" scrolling="no" allowtransparency="true"></iframe>
		<br>
		<EMBED src="music.m3u" autostart=true>
	</body>
</html>