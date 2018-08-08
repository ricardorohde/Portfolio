<?php
	function antisql($conexao,$string)
    {
		$string = get_magic_quotes_gpc() 
		? stripcslashes($string) : $string;
		$string = mysqli_real_escape_string($conexao,$string);
        return $string;
    }
?>