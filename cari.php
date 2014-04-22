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
	<div role="main" class="ui-content">
	<h3> Carian Maklumat Pemohon </h3>
		
			<label for="text-basic">Mulakan Carian : </label>
			<input type="text" id="search" placeholder="Sila Masukkan Nama Pemohon" >		
			<button id="cari_staff" class="ui-btn ui-corner-all ui-shadow">Cari Staff</button>
				
	<h3> Hasil Carian </h3>
		<ul data-role="listview" id="lv1" data-inset="true"></ul>
		
					
	
  </div>
  <script>
	$(document).ready(function(){
		$('#cari_staff').click(function(){
			$.ajax({
				type: 'POST',
				url : 'check_carian.php',
				data:{cari: $("#search").val()},
				success:function(data){
				$('#lv1').html(data);
				$('#lv1').listview("refresh");
				}
			});
			//disable button dan kosongkan input
			$('input').not('[type="button"]').val('');
			$('ul').val('');
			$('#ul').listview("refresh");
		});
	});
</script>
 </div>
  
  <!--footer -->
  <div data-role="footer" data-position="fixed">
  <h3>SISTEM IWEBS</h3>
  </div>

</div>

<?php
include ("footer.php");
?>


