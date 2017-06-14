<?php 
 class Application_Models_Auth
 {
 	function ValidData($login, $pass)
 	{
 		if ($login == 'admin' && $pass == '1')
 		{
 			$_SESSION['Auth'] = true;
 			$_SESSION['User'] = $login;
 		} 
 		else $_SESSION['Auth'] = false;

 		if (!$_SESSION['Auth'])
 		{
 			$form = true;
 		}
 		else $form = false;

 		$result = array('login' => $login,
 			'pass' => $pass,
 			'userName'=>$login,
 			'form' => $form);

 		return $result;
 	}
 }
  ?>