<?php 
include("includes/init.php"); 
include("includes/header.php"); ?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/theme.css" media="all" />

<button class="new_post_button" name="new_post_submit"> + New Post </button>

<button class="logout_button" name="logout_submit"> Logout </button>

<!-- Tab links -->
<div class="center">
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Latest')">Latest</button>
        <button class="tablinks" onclick="openCity(event, 'Most Popular')">Most Popular</button>
        <button class="tablinks" onclick="openCity(event, 'Priority')">Priority</button>
        <button class="tablinks" onclick="openCity(event, 'Your Posts')">Your Posts</button>
    </div>

    <div class="issues_box"></div>
</div>


</html>