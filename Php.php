<?php
	include "koneksi/connect.php";
	$query_input="select * from tb_input_data order by judul desc";
	$hasil_input=mysqli_query($link,$query_input);
?>
<ol type="1">
<?php 
while($outputan=mysqli_fetch_assoc($hasil_input)){
?>
     <?php echo "<li><div id='judul'>".$outputan['Dana']."</div></li>";  ?>
<?php
}
?>
</ol>