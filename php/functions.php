<?php
	define(PS_PATH,"C:\licenta\scriptps\\");
	function  get_users($path){
	 
		$query = shell_exec('powershell -command "'.PS_PATH.'users.ps1" -location  "'.$path.'" < NUL');
		$users = explode(",",$query);
		$return = array();
		foreach($users as $user){ 
			if(trim($user) != "")
				$return[] = trim($user);
		}
		
		return $return;
	}
	function  get_computers($path){
	 
		$query = shell_exec('powershell -command "'.PS_PATH.'computers.ps1" -location  "'.$path.'" < NUL');
		$users = explode(",",$query);
		$return = array();
		foreach($users as $user){
			if(trim($user) != "")
				$return[] = trim($user);
		}
		
		return $return;
	}
	function add_new_user($fname,$lname,$desc){
		//echo 'powershell -command "'.PS_PATH.'new_user.ps1" -fname  "'.$fname.'" -lname  "'.$lname.'" -description "'.$desc.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'new_user.ps1" -fname  "'.$fname.'" -lname  "'.$lname.'" -description "'.$desc.'"  < NUL');
		echo $query;
	}
	function add_new_computer($name,$desc){ 
		$query = shell_exec('powershell -command "'.PS_PATH.'new_computer.ps1" -name  "'.$name.'" -description "'.$desc.'"  < NUL');
		echo $query;
	}

	function disable_user($name){ 
		//echo 'powershell -command "'.PS_PATH.'disable_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'disable_user.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function delete_user_active($name){ 
		//echo 'powershell -command "'.PS_PATH.'disable_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'delete_user_active.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function unlock_user($name){ 
		//echo 'powershell -command "'.PS_PATH.'disable_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'unlock_user.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function reset_user($name){ 
		//echo 'powershell -command "'.PS_PATH.'disable_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'reset_user.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function enable_disabled_user($name){ 
		//echo 'powershell -command "'.PS_PATH.'disable_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'enable_disabled_user.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function delete_disabled_user($name){ 
		//echo 'powershell -command "'.PS_PATH.'delete_disabled_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'delete_disabled_user.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function enable_pending_user($name){ 
		//echo 'powershell -command "'.PS_PATH.'delete_disabled_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'enable_pending_user.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function move_user($name){ 
		//echo 'powershell -command "'.PS_PATH.'delete_disabled_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'move_user.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function disable_computer($name){ 
		//echo 'powershell -command "'.PS_PATH.'delete_disabled_user.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'disable_computer.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function delete_computer($name){ 
	//	echo 'powershell -command "'.PS_PATH.'delete_computer.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'delete_computer.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}
	function enable_computer($name){ 
		//echo 'powershell -command "'.PS_PATH.'enable_computer.ps1" -name  "'.$name.'"  < NUL';
		$query = shell_exec('powershell -command "'.PS_PATH.'enable_computer.ps1" -name  "'.$name.'"  < NUL');
		echo $query;
	}

?>