<html>
<head>
 
   <script type="text/javascript">
     function insert(){
		if(window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		
		 xmlhttp.onreadystatechange = function(){
			 if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				 document.getElementById('message').innerHTML = xmlhttp.responseText;
			 }
		 }
		 parameters ='text='+document.forms[0].elements[0].value;
		 xmlhttp.open('POST','update.inc.php',true);
		xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencode');
		
		xmlhttp.send(parameters);
		
	 }
   </script>  
</head>
    <form>
	   Insert: <input type="text" name="text"/> <input type="button" value="Submit" onclick = "insert();" />
	   <div id="message"></div>
	</form>
<body>

</body>
</html>