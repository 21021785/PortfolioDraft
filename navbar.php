<?php 
$focus = $focus??"Home";
?>
<header>
    <ul class = "navbar">
        <li style="float: right; padding-top: 15px"><a class="<?php echo ($focus=='Contact')?"active":"none"?>" href="index.php">Contact</a></li>
        <li style="float: right; padding-top: 15px"><a class="<?php echo ($focus=='Resume')?"active":"none"?>" href="index.php">Resume</a></li>
        <li style="float: right; padding-top: 15px"><a class="<?php echo ($focus=='Work')?"active":"none"?>" href="work.php">Work</a></li>
        <li style="float: right; padding-top: 15px"><a class="<?php echo ($focus=='About me')?"active":"none"?>" href="about.php">About me</a></li>
        <li style="float: right;"><a class="<?php echo ($focus=='Home')?"active":"none"?>" href="index.php"><div style="min-width: 70px" class="logo"><img src="images\Personal Logo Dark BG.svg"></div></a></li>
    </ul>
</header>