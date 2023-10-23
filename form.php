<form action="form.php " method="GET">
Name: <input type="text" name="fName" >
<br>
Last Name: <input type="text" name="lName" >
<br>
<input type="submit">

</form>

<?php
echo $_REQUEST["fName"] ;
echo $_REQUEST["lName"] ;

?>