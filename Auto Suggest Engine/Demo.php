<html>
<head>
     <script ="text/javascript">
	     
		  function hello() {
                
                   var text = document.forms[0].elements[0].name;
              alert(text);				   
			   
			 }
		 
	 </script>
</head>
<body>
 
      <form>
	     <input type="text" name="hello" /> <input type="button" value="name" onClick="hello();">
	  </form>
  
</body>
</html>