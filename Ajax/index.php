<html>
<head>
    <script type="text/javascript">
	   
	    function load(thediv,thefile) {
				if(window.XMLHttpRequest) {
					xmlHttp = new XMLHttpRequest();
				} else {
					xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
				}
				xmlHttp.onreadystatechange = function() {
					if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
						document.getElementById(thediv).innerHTML = xmlHttp.responseText;
					}
				}
			
			xmlHttp.open('GET',thefile,true);
			xmlHttp.send();
		}
	   
    </script>
</head>
<body>
  
   <input type="submit" onClick ="load('adiv','include.inc.php');"/>
 <div id="adiv"></div>
</body>
</html>