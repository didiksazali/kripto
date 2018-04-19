<?php
	include 'include/header.php';
	include 'include/sidebar.php';
	include 'cipher.php';
?>


<script type="text/javascript">
function Encrypt() {
    plaintext = document.getElementById("plain").value.toLowerCase().replace(/[^a-z]/g, "");  
    if(plaintext.length < 1){ alert("Harap isi plain text!"); return; }    
    var key = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, "");  
    var pc = document.getElementById("pc").value.toLowerCase().replace(/[^a-z]/g, "");
    if(pc=="") pc = "x";    
    while(plaintext.length % key.length != 0) plaintext += pc.charAt(0);    
    var colLength = plaintext.length / key.length;
    var chars = "abcdefghijklmnopqrstuvwxyz"; 
    ciphertext = ""; k=0;
    for(i=0; i < key.length; i++){
        while(k<26){
            t = key.indexOf(chars.charAt(k));
            arrkw = key.split(""); arrkw[t] = "_"; key = arrkw.join("");
            if(t >= 0) break;
            else k++;
        }
        for(j=0; j < colLength; j++) ciphertext += plaintext.charAt(j*key.length + t);
    }
    document.getElementById("cipher").value = ciphertext;
}

function Decrypt(f) {
    ciphertext = document.getElementById("cipher2").value.toLowerCase().replace(/[^a-z]/g, "");  
    if(ciphertext.length < 1){ alert("Harap isi cipher text!"); return; }    
    keyword = document.getElementById("key2").value.toLowerCase().replace(/[^a-z]/g, ""); 
    klen = keyword.length;
    if(klen <= 1){ alert("keyword should be at least 2 characters long"); return; }
    if(ciphertext.length % klen != 0){ alert("ciphertext has not been padded, the result may be incorrect (incorrect keyword?)."); }
    // first we put the text into columns based on keyword length
    var cols = new Array(klen);
    var colLength = ciphertext.length / klen;
    for(i=0; i < klen; i++) cols[i] = ciphertext.substr(i*colLength,colLength);
    // now we rearrange the columns so that they are in their unscrambled state
    var newcols = new Array(klen);
    chars="abcdefghijklmnopqrstuvwxyz"; j=0;i=0;
    while(j<klen){
        t=keyword.indexOf(chars.charAt(i));        
        if(t >= 0){
            newcols[t] = cols[j++];
            arrkw = keyword.split(""); arrkw[t] = "_"; keyword = arrkw.join("");
        }else i++;         
    }    
    // now read off the columns row-wise
    plaintext = "";
    for(i=0; i < colLength; i++){
        for(j=0; j < klen; j++) plaintext += newcols[j].charAt(i);
    }            
    document.getElementById("plain2").value = plaintext;    
}
  </script>
		
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg></a></li>
				<li class="active">Permutasi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Permutasi</h1>
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
									<input id="pc" name="pc"  size="1" value="x" type="hidden">
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