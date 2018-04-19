<?php
	include 'include/header.php';
	include 'include/sidebar.php';
	include 'cipher.php';
?>


<script type="text/javascript">


function Encrypt() {
    plaintext = document.getElementById("plain").value.toLowerCase().replace(/[^a-z]/g, "");  
    k = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, ""); 
    // do some error checking
    if(plaintext.length < 1){ alert("Harap isi plain text!"); return; }    
    if(k.length <= 1){ alert("Keyword minimal 2 karakter"); return; }
    ciphertext="";
    for(i=0; i<plaintext.length; i++){ 
        ciphertext += String.fromCharCode((((plaintext.charCodeAt(i)-97) + (k.charCodeAt(i%k.length)-97)+26)%26)+97); 
    } 
    document.getElementById("cipher").value = ciphertext; 
} 
 
function Decrypt() { 
    ciphertext = document.getElementById("cipher2").value.toLowerCase().replace(/[^a-z]/g, "");  
    k = document.getElementById("key2").value.toLowerCase().replace(/[^a-z]/g, ""); 
    // do some error checking 
    if(ciphertext.length < 1){ alert("Harap isi cipher text!"); return; }    
    if(k.length <= 1){ alert("Keyword minimal 2 karakter"); return; }
    plaintext="";
    for(i=0; i<ciphertext.length; i++){ 
        plaintext += String.fromCharCode((((ciphertext.charCodeAt(i)-97) - (k.charCodeAt(i%k.length)-97)+26)%26)+97); 
    } 
    document.getElementById("plain2").value = plaintext; 
} 


</script>
		
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg></a></li>
				<li class="active">Substitusi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Substitusi Vigenere</h1>
			</div>
		</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Encryption</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form role="form">
							
								<div class="form-group">
									<label>Plain Text</label>
									<input class="form-control" placeholder="Plain Text" name="plain" id="plain">
								</div>
								
								<div class="form-group">
									<label>Key</label>
									<input class="form-control" placeholder="Key" name="key" id="key">
								</div>
								
								<div class="form-group">
									<label>Cipher Text</label>
									<input class="form-control" placeholder="Cipher Text" name="cipher" id="cipher" >
								</div>
								
								<p align="center">
								<button type="button" class="btn btn-primary" name="encrypt" onclick="Encrypt()">Encrypt</button>
								<button type="reset" class="btn btn-default">Reset</button>
								</p>
							</div>
							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Decryption</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form role="form">
							
								<div class="form-group">
									<label>Cipher Text</label>
									<input class="form-control" placeholder="Cipher Text" name="cipher2" id="cipher2" >
								</div>
								
								<div class="form-group">
									<label>Key</label>
									<input class="form-control" placeholder="Key" name="key2" id="key2">
								</div>
								
								<div class="form-group">
									<label>Plain Text</label>
									<input class="form-control" placeholder="Plain Text" name="plain2" id="plain2">
								</div>
								
								<p align="center">
								<button type="button" class="btn btn-primary" name="encrypt" onclick="Decrypt()">Decrypt</button>
								<button type="reset" class="btn btn-default">Reset</button>
								</p>
							</div>
							
						</form>
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