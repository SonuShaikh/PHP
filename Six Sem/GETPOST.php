<?php

  echo $_GET['Pdata'];
  echo $_POST['Gdata'];
?>
<form action="GETPOST.php" method="POST">
  Send POST Data<input type="Text" name="Pdata" REQUIRED/>
</form>
<form action="GETPOST.php" method="GET">
  Send GET Data<input type="Text" name="Pdata" REQUIRED/>
</form>

<input type ="submit" />