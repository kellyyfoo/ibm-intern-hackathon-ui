<?php 
include("includes/init.php"); 
include("includes/header.php"); 

$latest_selected = "";
$popular_selected = "";
$priority_selected = "";
$your_posts_selected = "";

/*function changeLatest() {
    $latest_selected = 
}*/
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/theme.css" media="all" />

<button class="new_post_button" name="new_post_submit"> + New Post </button>

<img class="user_icon" src="images/user-icon.png" alt="User Icon"> 

<button class="logout_button" onclick="location.href='login.php'"name="logout_submit"> Logout </button>

<!-- Tab links -->
<div class="center">
    <div class="tab">
        <button class="<?php echo $latest_selected ?>" onclick="changeLatest()">Latest</button>
        <button class="<?php echo $popular_selected ?>" onclick="changePopular()">Most Popular</button>
        <button class="<?php echo $priority_selected ?>" onclick="changePriority()">Priority</button>
        <button class="<?php echo $your_posts_selected ?>" onclick="changeYourPosts()">Your Posts</button>
    </div>

    <div class="issues_box"></div>
</div>


</html>