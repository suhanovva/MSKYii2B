<?
function varDump($vars_)
	{
		ob_start();
		var_dump($vars_);
		$a=ob_get_contents();
		ob_end_clean();
		return $a;
	}
?>