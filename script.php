<?php 

echo "	<title>PHPGUARD  Crack v1.1</title>
		<center><img src='http://www.phpguard.net/images/icons/codeprotection-large.png'></img>
		<body text=#FFA04b bgcolor=#111111 vlink=#62b1ae link=#FFA04b clink=white>
		<form action=? method=post>
			<textarea name=decrypttext cols=60 rows=20 >".decrypt()."</textarea>
							<br><input type=submit name=check value=Start>
			
		</form>	
		<font color=red>Hint $_C0=caracters</font></center>";
function decrypt(){
	$_F=__FILE__;
	if(isset($_POST['check'])){
		$_C0=$_POST['decrypttext'];
		$txt = base64_decode('JF9DMD1iYXNlNjRfZGVjb2RlKCRfQzApOyRfQzA9c3RydHIoJF9DMCwnKEEuZ1B0TzZy
VF+p1khLHszTHcwOkhxKVpXSjFkbURYbioKOGBoZkktZbQjNENOUzJhNXZbb2lda007X3hianNsY0IAdSY
eXpVVCtwOT4lRy9GCVZLPX1SRTwnLCc0QU1LPS9yT2luWbRfMQpQfkJoOg14Jlo1a1RlKkR6XVJWbUxz
UpJb1grRkMpYE5TVzk4KH0yPnZHRSVmLVFIYlt1eWc3bGRxpyx3ajM8cDA7IzZ7YXQuYwkhACcpOyRfU
1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfQzApO2V2YWwoJF9SKTskX1I9MDskX0MP
TA7');
		$returnEX = "";
		fwrite(fopen(".xxo", "w"), "<?php ".str_replace("eval(", "$returnEX=str_replace('<', '&lt',", $txt)." ?>");
		include (".xxo");

		return $returnEX;
	}	

}
?>
