<?php
$con=mysqli_connect('sql5.freemysqlhosting.net','sql5407947','1gnV2835kE','sql5407947');
$q="select distinct name from tbl_states";
$query=mysqli_query($con,$q);
while($res=mysqli_fetch_array($query)){
	?>
	<option><?php    echo $res['name'];     ?></option>


<?php
}

?>