<?php
   
	include_once('init.php');
	include_once('config.php');
	include_once('librerias.php');
	
	if (!isset($_SESSION)){
	  session_start();  
	}
		
	
	

	$pages = array(	
		'homepage'		
	);
	
	/**************** seccion que actualiza en caso de que se cuente con https */
	/* if(!$_SERVER["HTTPS"]){
		 header("Location:".WEB_ROOT);
	} */
	
	if(isset($_GET)){
		@$page = $_GET['page'];	
	}
	

	if(!in_array($page, $pages)){
		$page = 'homepage';
	}	
   
    $smarty->assign('page', $page);	
	$smarty->assign('project', PROJECT_NAME);
	include_once(DOC_ROOT.'/modules/'.$page.'.php');	 
	$smarty->display(DOC_ROOT.'/templates/index.tpl');	
	
	
   
?>