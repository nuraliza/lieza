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
	 <a href="mohon.php" data-transition="slidefade" class="ui-btn ui-btn-inline"> PERMOHONAN BARU</a>  
		<a href="cari.php" data-transition="slidefade" class="ui-btn ui-btn-inline"> SEMAK PERMOHONAN</a>  
	
  </div>
  
  <!--footer -->
  <div data-role="footer" data-position="fixed">
  <h3>SISTEM IWEBS</h3>
  </div>

</div>

<?php
include ("footer.php");
?>


