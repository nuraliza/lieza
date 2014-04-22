<?php
include ("header.php");

?>
<script>
	$(document).ready(function(){
		$('#hantar').click(function(){
			$.ajax({
				type: 'POST',
				url : 'check_login.php',
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
  <div data-role="header" data-position="fixed">
	<h3>DARFTAR DB04</h3>
	
  </div>
  
  <!--content -->
  <div role="main" class="ui-content">
	<form id="form1">
		<div data-role="fieldcontain">
			<label for="text-basic">Username:</label>
			<input type="text" name="nama" id="nama" value="" placeholder="Sila Masukkan Username" >
		</div>
		<div data-role="fieldcontain">
			<label for="password">Password:</label>
			<input type="password" name="pass" id="pass" value="" autocomplete="off">
		</div>		
		<input type="button" id="hantar" value="SIMPAN">
		
		<div id="try_ajax" data-role="popup" data-dismissible="false" style="max-width:400px;">
			<div data-role="header">
				<h3>Dialog</h3>
			</div>
				<div role="main" class="ui-content">
				<div id="ubah">
				result login disini
				</div>
				<a href="index.php" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Login Semula</a>
				<a href="utama.php" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Teruskan</a>
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


