<?php
	include 'include/header.php';
	include 'include/sidebar.php';
	include 'cipher.php';
?>


<script type="text/javascript">



function Encrypt() {
    plaintext = document.getElementById("plain").value.toLowerCase();  
    if(plaintext.length < 1){ alert("Harap isi plain text!"); return; }    
    var shift = parseInt(document.getElementById("key").value);
    ciphertext = "";    var re = /[a-z]/;
    for(i=0; i<plaintext.length; i++){ 
        if(re.test(plaintext.charAt(i))) ciphertext += String.fromCharCode((plaintext.charCodeAt(i) - 97 + shift)%26 + 97); 
        else ciphertext += plaintext.charAt(i); 
    } 
    document.getElementById("cipher").value = ciphertext; 
} 
 
function Decrypt() { 
    ciphertext = document.getElementById("cipher2").value.toLowerCase();  
    // do some error checking 
    if(ciphertext.length < 1){ alert("Harap isi cipher text!"); return; }    
    var shift = parseInt(document.getElementById("key2").value);
    plaintext = "";    var re = /[a-z]/;
    for(i=0; i<ciphertext.length; i++){ 
        if(re.test(ciphertext.charAt(i))) plaintext += String.fromCharCode((ciphertext.charCodeAt(i) - 97 + 26 - shift)%26 + 97); 
        else plaintext += ciphertext.charAt(i); 
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
				<h1 class="page-header">Substitusi Caesar</h1>
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
									<label>Key Number</label>
									<select class="form-control" name="key" id="key">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>										
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>										
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>										
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>										
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
									</select>
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
									<label>Key Number</label>
									<select class="form-control" name="key2" id="key2">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>										
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>										
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>										
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>										
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
									</select>
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