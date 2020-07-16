<?php 
include("includes/init.php"); 
include("includes/header.php"); 


/*function changeLatest() {
    $latest_selected = "active";
    echo $latest_selected;
    var_dump($latest_selected);
}
function changePopular() {
    $popular_selected = "active";
}
function changePriority() {
    $priority_selected = "active";
}
function changeYourPosts() {
    $your_posts_selected = "active";
}*/

function display ($post) {
    $title = $post->title;
    $description = $post->description;?>
    <h2> <?php echo $title ?></h2>
    <p> <?php echo $description ?> </p>
    <hr>
<?php } ?>




<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/theme.css" media="all" />


<button class="new_post_button" onclick="location.href='upload.php'" name="new_post_submit"> + New Post </button>

<img class="user_icon" src="images/user-icon.png" alt="User Icon"> 

<button class="logout_button" onclick="location.href='login.php'"name="logout_submit"> Logout </button>


<div class="center">
    <div class="tab">
        <button class="<?php echo $latest_selected ?>" onclick="changeLatest()">Latest</button>
        <button class="<?php echo $popular_selected ?>" onclick="changePopular()">Most Popular</button>
        <button class="<?php echo $priority_selected ?>" onclick="changePriority()">Priority</button>
        <button class="<?php echo $your_posts_selected ?>" onclick="changeYourPosts()">Your Posts</button>
    </div>

    <div class="issues_box">
        <?php
        $data = file_get_contents('https://ibm-hackathon-backend.herokuapp.com/api/posts');
        $decodedData = json_decode($data);
        //$title = $decodedData[0]->title;
        //$description = $decodedData[0]->description;
        foreach ($decodedData as $obj) {
            display($obj);
        }
        ?>
    </div> 
</div>



</html>