<?php
	include 'include/header.php';
	include 'include/sidebar.php';
	include 'cipher.php';
?>

		
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg></a></li>
				<li class="active">Ekspansi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ekspansi</h1>
			</div>
		</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Encryption</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form>
							<div class="form-group">
									<label>Plain Text</label>
									<input class="form-control" placeholder="Plain Text" name="input" id="input">
								</div>
															
								<div class="form-group">
									<label>Cipher Text</label>
									<input class="form-control" placeholder="Cipher Text" name="result" id="result" >
								</div>
							<button type="button" class="btn btn-primary" name="calculate" id="calculate">Encrypt</button>
							<button type="reset" class="btn btn-default">Reset</button>
							
						</form>
						<script src="js/md5.js"></script>
						<script src="js/demo.js"></script>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
		
		
		
	
	</div>	<!--/.main-->

<?php
	
	//if(isset($_POST['encrypt'])) {
		
	//	$cipherText = Encipher($Plain, $key);
		
	//}
	
	include 'include/footer.php';
?>