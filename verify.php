<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
	<title>Verify Requests</title>
</head>
<body>
<input type="text" name="uid" id="uid">
<input type="password" name="pwd" id="pwd">
<input type="button" name="submit" value="Verified!" onclick="verify()">
<div id="message"></div>
<script type="text/javascript">
	function verify() {
		hash = CryptoJS.MD5(document.getElementById('pwd').value);
	Updata={uid:document.getElementById('uid').value, pwd:hash.toString(CryptoJS.enc.Base64)};
	if(!(Updata==null||Updata=='')){
      document.getElementById('message').innerHTML="Processing...";
      request = $.ajax({
        type:'POST',
        data: Updata,
        url: 'verifyRequests.php',
        success: function(reply) {
          document.getElementById('message').innerHTML=reply;
        }
	}); 
  }	
	}
	
</script>
</body>
</html>