<?php

 /*** error reporting on ***/
 error_reporting(E_ALL);

 /*** define the site path ***/
 $site_path = realpath(dirname(__FILE__));

 define ('__SITE_PATH', $site_path);

 /*** include the init.php file ***/
 include 'includes/init.php';

 /*** load the router ***/
 $registry->router = new router($registry);

 /*** set the controller path ***/
 $registry->router->setPath (__SITE_PATH . '/controller');

 /*** load up the template ***/
 $registry->template = new template($registry);

 /*** load the controller ***/
 $registry->router->loader();


?>


<!--<form id="login" method="post" action="views\login.php">
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" placeholder="user" />
	<label for="password">Password:</label>
	<input type="password" id="password" name="password" placeholder="password" />
	<input type="checkbox" id="remember" name="remember" />
	<label for="remember">Remember password?</label>
	<a href="views/register.php">
	 <input id="button-login" type="button"  name="reg" value="Register">
	</a>
	<input id="button-login" type="submit" name="login" value="Log in">
</form>-->