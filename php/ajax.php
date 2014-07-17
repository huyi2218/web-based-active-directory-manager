<?php

	include "functions.php";
	
	
	switch($_GET["action"]){
		case 'get_users':
			$path = $_GET["path"]; 
			echo json_encode(get_users($path));
		
		break;
		case 'get_computers':
			$path = $_GET["path"]; 
			echo json_encode(get_computers($path));
		
		break;
	
		case 'add_user':

			add_new_user($_GET['first_name'],$_GET['last_name'],$_GET['description'] );
		break;
		
		case 'add_computer':
			
			add_new_computer($_GET['name'],$_GET['description'] );
		
		break;
		case 'disable_user':
			
			disable_user($_GET['name'] );
		
		break;
		case 'delete_user_active':
			
			delete_user_active($_GET['name'] );
		
		break;
		case 'unlock_user':
			
			unlock_user($_GET['name'] );
		
		break;
		case 'reset_user':
			
			reset_user($_GET['name'] );
		
		break;
		case 'enable_disabled_user':
			
			enable_disabled_user($_GET['name'] );
		
		break;
		case 'delete_disabled_user':
			
			delete_disabled_user($_GET['name'] );
		
		break;
		case 'enable_pending_user':
			
			enable_pending_user($_GET['name'] );
		
		break;
		case 'move_user':
			
			move_user($_GET['name'] );
		
		break;
		case 'disable_computer':
			
			disable_computer($_GET['name'] );
		
		break;
		case 'delete_computer':
			
			delete_computer($_GET['name'] );
		
		break;
		case 'enable_computer':
			
			enable_computer($_GET['name'] );
		
		break;
	
	
	
	}





?>