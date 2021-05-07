<?php
$data=$_POST['data'];
$con=mysqli_connect('sql5.freemysqlhosting.net','sql5407947','1gnV2835kE','sql5407947');
$que="select id from tbl_states where name='$data'";
$result=mysqli_query($con,$que);
$state=mysqli_fetch_array($result);
$stateid=$state['id'];
$q="select distinct name from tbl_cities where state_id='$stateid'";
$query=mysqli_query($con,$q);
?>
<option>Select any one</option>
<?php
while($res=mysqli_fetch_array($query)){
	?>
	<option><?php echo $res['name'] ?></option>
<?php
}
?>



