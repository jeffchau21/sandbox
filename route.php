<?php
include_once 'epi/Epi.php';
Epi::setPath('base', 'epi');
Epi::setPath('config', dirname(__FILE__));
Epi::init('route');

/*
 * ******************************************************************************************
 * Load the routes from routes.ini then call run()
 * ******************************************************************************************
 */
getRoute()->load('routes.ini');
getRoute()->run();

/*
 * ******************************************************************************************
 * Define functions and classes which are executed by EpiCode based on the $_['routes'] array
 * ******************************************************************************************
 */
class MyClass
{
  static public function GetSub($user_id)
  {
    echo '<p>Get subscription</p>'.$user_id;
    $date = date('Y-m-d H:i:s');
    echo $date;
  }

  static public function NewSub($user_id)
  {
  	echo '<p>Create subscription</p>'.$user_id;
  }

  static public function DelSub($user_id)
  {
    echo '<p>Delete subscription</p>'.$user_id;
  }
  
  static public function EditSub($user_id)
  {
  	echo '<p>update subscripiton</p>'.$user_id;
  }

  static public function Poll()
  {
	echo '{ "result" : [{ "title":"Post 1","content":"content of post 1"}, {"title":"Post 2","content":"content of post 2"}] }';
	$date = date('Y-m-d H:i:s');
        ini_set("log_errors", 1);
        ini_set("error_log", "/tmp/php-error.log");
        error_log( "Poll request : $date" );
  }

}
