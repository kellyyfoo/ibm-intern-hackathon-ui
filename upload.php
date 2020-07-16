<?php 
include("includes/init.php"); 
include("includes/header.php"); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
  $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
  $data = array("title" => $title, "description" => $description);                                                                    
  $data_string = json_encode($data);                                                                                   
                                                                                                                     
  $ch = curl_init('https://ibm-hackathon-backend.herokuapp.com/api/posts');                                                                      
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
  if (is_null($result)) { echo "failed upload"; /* Handle error */ }
  else{
    echo "here";
    header("Location: home.php") ;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/theme.css" media="all" />

<div class=newpost>
  <form method="post" action="home.php" enctype="multipart/form-data">

    <div align="left" class="uploadtitle">
      <b>New Post</b>
    </div>
    
    <input type="text"  id="title" name="title" placeholder="Title" style="width: 800px; height: 35px; font-size: 16pt; font-family: 'IBM Plex Sans Condensed', sans-serif;"/> 

    <div class=secondlinenewpost>
      <div>
        <select name="mediatype" id="mediatype" style="width:150px; height:35px; font-size: 10pt; font-family: 'IBM Plex Sans Condensed', sans-serif;">
          <option value="selectmediatype" disabled selected>Select Media Type...</option>
          <option value="photo">Photo</option>
          <option value="video">Video</option>
          <option value="text">Text</option>
        </select>
      </div>

      <div class=items>
        <input name="browse" type="file" value="Browse"/>
      </div>
    </div>

    <div class=descriptionbox>
      <textarea name="description" placeholder="Type description here..." style="width:800px; height:200px; font-size: 12pt; font-family: 'IBM Plex Sans Condensed', sans-serif;"></textarea>
    </div>
    
    <div class=uploadbuttons>

      <button class="cancelbutton" name="cancel" type="submit" style="margin:5px">Cancel</button>
      <button class="postbutton" name="post" type="submit" style="margin:5px">Post</button>
  </form>
</div>

</html>
