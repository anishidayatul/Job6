<?php session_start();ob_start();?>
<html>
<head>
<title>Contoh Pemakaian Session</title>
</head>
<body>
<?php echo"<form action=\"$php_set\"methot=\"post\">";?>
<P>
<pre>
Silhkan Login:
user:<input type="text"name="user"values="" />
sandi:<input type="password"name="sandi"values="" />
      <input type="submit"name="login"values="login">
</pre>
</P>
</form> 
<?php
if($_POST['login'])
{
	$lgnuser="stekom";$lgnsandi="605";
	/*untuk sementara contoh nama user dan pass merupakan isi variabel
	$lgnuser dan $lgnsandi. untuk selanjutnya kita akan mencoba mengambil 
	data yang tersimpan dalam table*/
	if(trim($_POST['user'])==$lgnuser and trim($_POST['sandi'] ==$lgnsandi)
	{       ob_end_clean();
	        $_SESSION['user']=$_POST['user'];
	        $_SESSION['sandi']=$_POST['sandi'];
	        header("Location:menuinternal.php");
	        exit();
	}
}
?>
</body>
</html>