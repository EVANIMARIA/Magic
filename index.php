<?php
/**
* 
*/
class EchoFlag
{
	public $obj = '';
	function __construct()
	{
		$this->obj = new Fake();
	}
	function __toString()
	{
		//echo "hello";
		$flag = $this->obj->echoFlag();
		return $flag;
	}
}

/**
* 
*/
class Fake
{
	public $obj = '';
	public function echoFlag()
	{
		if (file_exists('fakeflag.php')) {
			$fakeflag = file_get_contents('fakeflag.php');
			return $fakeflag;
		} else {
			return "Wrong Way!";
		}
		
	}
}

/**
* 
*/
class f1a9_1s_here 
{
	
	public $flag = '';
	public function echoFlag()
	{
		if (file_exists('flag.php')) {
			$this->flag = file_get_contents('flag.php');
			return $this->flag;
		} else {
			return "Something wrong!";
		}
		
	}
}

if (isset($_POST)) {
	if ($_POST['data']) {
		$data = urldecode($_POST['data']);
		//var_dump($data);
		$flag = unserialize($data);
		echo $flag;
	} else {
		echo "i need some data";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
<!--Please remember to commit your newest version to git! by boss-->
<!--okok,i'll do it asap...-->
</head>
<body>
<form method="POST" action="index.php">
	<input type="hidden" name="data" value="O:8:%22EchoFlag%22:1:%7Bs:3:%22obj%22;O:4:%22Fake%22:1:%7Bs:3:%22obj%22;s:0:%22%22;%7D%7D">
	<input type="submit" name="submit" value="Click me and find the real flag">
</form>

</body>
</html>
