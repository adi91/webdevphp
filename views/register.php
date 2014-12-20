

<form method="POST" class="user" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
	<label for="email">E-mail:</label>
	<input type="email" id="email" name="email" placeholder="email" />
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" placeholder="username" />
	<label for="password">Password:</label>
	<input type="password" id="password" name="password" placeholder="password" />
	<label for="confirm">Password:</label>
	<input type="password" id="confirm" name="confirm" placeholder="repeat password" />
	<input id="button-register" type="submit" name="register" value="Register">
</form>

<?php

include '../application/registry.class.php';
 
require('../model/user.class.php');
require('../model/db.class.php');

$registry = new registry;
 
 /*** create the database registry object ***/
 $registry->db = db::getInstance();
 
 $user = new User($registry->db);
 
        
if(isset($_POST['register'])){

    $user->register();
    
    $user->display_info();
    
    $user->display_errors();
    
    unset($_POST['register']);
}

?>