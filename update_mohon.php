<?php
include ("header.php");
$id_mohon=$_GET["id"];
$q="Select * from bd04 where bd_id=$id_mohon";
$r=mysql_query($q);
while($row = mysql_fetch_array($r))
{
$id=$row["bd_id"];
$pemohon=$row["bd_pemohon"];
$keterangan=$row["bd_keterangan"];
$tkhmohon=$row["bd_tarikhmohon"];
$kategori=$row["bd_kategori"];
}
?>
<script>
	$( document ).ready(function() {
	  //Popup pengesahan
	  $('#hantar').click(function(){
			nama=$('#nama').val();
			detail=$('#detail').val();
			date_guna=$('#date_guna').val();
			kate=$('#kate').val();
			papar='Pinda '+nama+' dalam database.<br />';
			$('#ubah').html(papar);
			$('#try_ajax').popup('open');
			$('#daftar_staff').prop('disabled', false);
	  });
	  
	  // Pengiraan menggunakan ajax
	  $('#daftar_staff').click(function(){
			
			$.ajax({
			type: 'POST',
			url: 'pinda_staff.php',
			data: $("#form1").serialize(),
			success: function(data){
				$('#ubah').html(data);
				$('#try_ajax').popup('open');
				
				}
			});	
			
			$('#daftar_staff').prop('disabled', true);
			
		});	
	});
</script>

<!--Step 1 aka Page 1 -->
<div data-role="page" id="page1">
	<!--header -->
  <div data-role="header" data-transition="fixed" data-add-back-btn="true" data-back-btn-text="utama">
	<h3>DARFTAR DB04</h3>
	
  </div>
  
  <!--content -->
  <div role="main" class="ui-content">
	<form id="form1">
		<div data-role="fieldcontain">
			<label for="text-basic">Masukkan Tajuk:</label>
			<input type="text" name="nama" id="nama" value="<?php echo $pemohon; ?>">
			
			<input type="hidden" name="id_staff" id="id_staff" 
			value="<?php echo $id;?>"/>
		</div>
		<div data-role="fieldcontain">
			<label for="text-basic">Masukkan Keterangan:</label>
			<input type="text" name="detail" id="detail" value="<?php echo $keterangan; ?>">
		</div>
		<div data-role="fieldcontain">
			<label for="date">Tarikh Jangka Guna:</label>
			<input type="date" name="date_guna" id="date_guna" value="<?php echo $tkhmohon; ?>">
		</div>
		<div data-role="fieldcontain">
			<label for="kater">Kategori:</label>
			<Select name="kate" id="kate">
			<?php
			$sql1=mysql_query("Select * from kategori");
				while($row=mysql_fetch_array($sql1)){
					$id=$row['keter_id'];
					$keterangan=$row['Keter_desc'];
					if($id==$kategori)
					{echo "<option value='$id' selected>$keterangan</option>";}
					else
					{echo "<option value='$id'>$keterangan</option>";}
					}
					
			?>
			</select>
		</div>
		<input type="button" id="hantar" value="KEMASKINI">
		
		<div id="try_ajax" data-role="popup" data-dismissible="false" style="max-width:400px;">
			<div data-role="header">
				<h3>Output</h3>
			</div>
				<div role="main" class="ui-content">
				<div id="ubah">
				html(data) disini
				</div>
				<a href="#" class="ui-btn ui-corner-all ui-shadow" data-rel="back">Kembali</a>
				<button id="daftar_staff" class="ui-btn ui-corner-all ui-shadow" 
			data-rel="back">Pinda Staff</button>
				</div>
		</div>
			
	</form>
  </div>
  
  <!--footer -->
  <div data-role="footer" data-position="fixed">
  <h3>SISTEM IWEBS</h3>
  </div>

</div>

<?php
include ("footer.php");
?>


