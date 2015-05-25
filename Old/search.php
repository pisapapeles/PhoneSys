<?php
include('db.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("SELECT id, completename FROM phones WHERE completename LIKE '%$q%' ORDER BY id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$name=$row['completename'];
$id=$row['id'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';

?>
<div class="show clearfix">
<a href="http://pisapapeles.net/SQLsearcher/viewer.php?id=<?php echo $id; ?>"><p class="phone"><?php echo $name; ?></p></a>
</div>
<?php
}
}
?>