<?php
include ("header.php");

?>
<script>
	$(document).ready(function(){
		$('#hantar').click(function(){
			$.ajax({
				type: 'POST',
				url : 'daftar.php',
				data: $("#form1").serialize(),
				success:function(data){
				$("#ubah").html(data);
				$("#try_ajax").popup('open');
				}
			});
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
			<input type="text" name="nama" id="nama" value="">
		</div>
		<div data-role="fieldcontain">
			<label for="text-basic">Masukkan Keterangan:</label>
			<input type="text" name="detail" id="detail" value="">
		</div>
		<div data-role="fieldcontain">
			<label for="file">File:</label>
			<input type="file" name="fail" id="fail" value="">
		</div>
		<div data-role="fieldcontain">
			<label for="date">Tarikh Jangka Guna:</label>
			<input type="date" name="date_guna" id="date_guna" value="">
		</div>
		<div data-role="fieldcontain">
			<label for="kater">Kategori:</label>
			<Select name="kate" id="kate">
			<?php
			$sql1=mysql_query("Select * from kategori");
				while($row=mysql_fetch_array($sql1)){
					$id=$row['keter_id'];
					$keterangan=$row['Keter_desc'];
					$option.="<option value='$id'>$keterangan</option>";}
					echo $option;
			?>
			</select>
		</div>
		<input type="button" id="hantar" value="SIMPAN">
		
		<div id="try_ajax" data-role="popup" data-dismissible="false" style="max-width:400px;">
			<div data-role="header">
				<h3>Output</h3>
			</div>
				<div role="main" class="ui-content">
				<div id="ubah">
				html(data) disini
				</div>
				<a href="#" class="ui-btn ui-corner-all ui-shadow" data-rel="back">Kembali</a>
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


