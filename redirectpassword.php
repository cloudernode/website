<?php
add_hook('ClientAreaPage', 1, function($vars){
	global $smarty;
	if($_SESSION['uid'] == '1'){
		if($vars['templatefile'] == 'user-password' || $vars['templatefile'] == 'user-profile' || $vars['templatefile'] == 'user-security' || $vars['templatefile'] == 'clientareadetails' || $vars['templatefile'] == 'account-user-management'){
			App::redirect("clientarea.php",array());			
		}
		$smarty->assign('cloudx_default_user_active', true);	
	}
});
?>