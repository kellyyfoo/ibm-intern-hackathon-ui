<?php 
include("includes/init.php"); 
include("includes/header.php"); 


if (isset($_POST["submit_login"])) {
    //header("Location: home.php") ;
    $response = httpPost("https://frozen-badlands-71872.herokuapp.com/api/login",
    array("username"=>"sujil","password"=>"sujil"));
    var_dump($response);
}

function httpPost($url, $data){
	$options = array(
		'http' => array(
     		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        	'method'  => 'POST',
        	'content' => http_build_query($data)
    	)
    );
	$context  = stream_context_create($options);
	return file_get_contents($url, false, $context);
}

?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/theme.css" media="all" />

<div class=login>
    <form method="post" action="home.php" enctype="multipart/form-data">
          <div class="group_label_input">
            <label class="form_title" for="email"> IBM Email: </label>
            <input id="email" type="text" name="email"  />
          </div>

          <div class="group_label_input">
            <label class="form_title" for="password"> Password: </label>
            <input class = "password_input_text" id="password" type="text" name="password"  />
          </div>

          <div class="group_label_button">
            <span></span>
            <input name="submit_login" type="submit" value="LOG IN" />
          </div>

          <div class="group_label_input">
            <a href="url">Forgot password</a>
          </div>
        </form>
    
      </div>

</html>
