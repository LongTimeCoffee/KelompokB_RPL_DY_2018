<?php
	include 'connection.php';

	$sql = "select * from meja";
	$meja = mysqli_query($link, $sql);
?>
<div class=col-sm-4>
<?php
	for ($i = 0; $row = mysqli_fetch_assoc($meja);$i++) {
		$sql = "SELECT count(*) as total, (select total from pembayaran where pembayaran.id_pesan=pesan.id_pesan) as status FROM  `pesan` left join pembayaran on pembayaran.id_pesan = pesan.id_pesan WHERE DATE =  '$_POST[date]'AND TIME <= '$_POST[time]' and meja=$row[No_meja]";
		$total = mysqli_query($link, $sql);
		$total = mysqli_fetch_assoc($total);

		if($i%6==0 && $i != 0){
			echo "</div><div class=col-sm-4>";
		}

		if ($total['total'] > 0 && $total['status'] == null) {
			echo '<p><button style="background:#ccc" class="btn btn-lg btn-meja" name="meja" disabled><b>' . $row['No_meja'] . '</b></button></p><br>';
		}else{
?>
			<p><button class="btn btn-lg btn-meja" name="meja" idMeja="<?php echo $row['No_meja'] ?>"><b><?php echo $row['No_meja'] ?></b></button></p><br>
<?php
		}
	}
?>
</div>