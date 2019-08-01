
<?php
session_start();
if( !empty($_SESSION['user']) ) {
            $serialized_users = file_get_contents('users.bin');
            $users = unserialize($serialized_users);
	    $user = $_SESSION['user'];
	    if(!empty($_POST['username']) and !empty($_POST['password'])){
                $new_user = $_POST['username'];
		$new_password = $_POST['password'];
		$users.$new_user[$new_password];
	    }
		
	    }
            if( isset($users[ $user ]) ){
                $serialized_users = serialize($users);
                file_put_contents('users.bin',$serialized_users);
        }
	    }	
?>
