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
				
				xmlhttp.open('GET', 'search.inc.php' ,true);
				xmlhttp.send();
			}