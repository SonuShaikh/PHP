<html>
<head>
    <script type="text/javasrcipt">
		   
        function findmatch() {
		  if(window.XMLHttpRequest) {
		      xmlhttp = XMLHttpRequest();
			} else {
					xmlhttp = ActiveXObject('Microsoft.XMLHTTP');
				}
				
				xmlhttp.onreadystatechange = function() {
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById('results').innerHTML = xmlhttp.responseText;
					} 
				}
				
		xmlhttp.open('GET', 'search.inc.php?search_text='+document.search.search_text.value ,true);
		xmlhttp.send();
			}
		   
    </script>
</head>
<body>

   
    <form id="search" name="search">
	      Type Name:<br/>
		  <input type="text" name="search_text" onkeyup="findmatch();"/>
    </form>
  
      <div id="results"></div>  
 
</body>
</html>